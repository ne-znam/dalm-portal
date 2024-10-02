<?php

class DP_Command extends WP_CLI_Command
{
    private $wpdb2;

    public function __construct()
    {
        $this->wpdb2 = new wpdb(DB_USER, DB_PASSWORD, 'v2dalmatinski_dbase', DB_HOST);
    }

    public function import_categories()
    {
        $rows = $this->wpdb2->get_results("SELECT * FROM kategorije", OBJECT_K);
        foreach ($rows as $row) {
            if (!term_exists($row->naslov_kategorije, 'category')) {
                wp_insert_term($row->naslov_kategorije, 'category', [ 'slug' => $row->url_kategorije ]);
            }
        }
    }

    private function map_category($category)
    {
        $map = [
            1 => 2,
            2 => 3,
            3 => 4,
            4 => 5,
            5 => 6,
            6 => 7,
            7 => 8,
            8 => 9,
            9 => 10,
            10 => 11,
            11 => 12,
            12 => 13,
            13 => 14,
            14 => 15,
            15 => 16,
        ];
        return $map[$category];
    }
    public function import()
    {
        global $wpdb, $coauthors_plus;
        $offset = 0;
        while (true) {
            $rows = $this->wpdb2->get_results("SELECT * FROM vijesti order by id_vijesti desc limit 100 offset " . $offset, OBJECT_K);
            if (empty($rows)) {
                break;
            }
            $offset += 100;
            foreach ($rows as $row) {
                $author = false;
                $as     = [];
                if ($row->autor_vijesti) {
                    $authors = explode(',', $row->autor_vijesti);
                    foreach ($authors as $author_name) {
                        $author = $coauthors_plus->get_coauthor_by('user_login', sanitize_title(trim($author_name)));
                        if (! $author) {
                            $c         = new CoAuthors_Guest_Authors();
                            $author_id = $c->create([
                                'display_name' => $row->autor_vijesti,
                                'user_login'   => sanitize_title($row->autor_vijesti)
                            ]);
                            if (! is_wp_error($author_id)) {
                                $author = $coauthors_plus->get_coauthor_by('id', $author_id);
                            }
                        }
                        $as[] = $author->display_name;
                    }
                }
                if ($row->autor_kolumne_vijesti) {
                    continue;
                }
                $id = wp_insert_post([
                    'post_title'    => $row->naslov_vijesti,
                    'post_content'  => $row->tekst_vijesti,
                    'post_status'   => 'publish',
                    'post_type'     => 'post',
                    'post_date'     => sprintf('%s-%s-%s %s:%s:%s', $row->god_vijesti, $row->mj_vijesti, $row->dan_vijesti, $row->hh_vijesti, $row->mm_vijesti, $row->ss_vijesti),
                    'post_author'   => 2,
                    'post_category' => [ $this->map_category($row->kategorija_vijesti) ],
                ]);

                wp_set_post_tags($id, $row->tags_vijesti);
                if (! empty($as)) {
                    $coauthors_plus->add_coauthors($id, $as);
                }
                if ($row->foto_velika_vijesti) {
                    $featured_image = $this->import_image('https://dalmatinskiportal.hr/sadrzaj/vijesti/velika/' . $row->foto_velika_vijesti);
                    if ($featured_image) {
                        set_post_thumbnail($id, $featured_image);
                    }
                }
            }
        }
    }

    private function import_image($url)
    {
        $filename = basename($url);
        $upload_file = wp_upload_bits($filename, null, file_get_contents($url));
        if (!$upload_file['error']) {
            $wp_filetype = wp_check_filetype($filename, null);
            $attachment = array(
                'post_mime_type' => $wp_filetype['type'],
                'post_title' => sanitize_file_name($filename),
                'post_content' => '',
                'post_status' => 'inherit'
            );
            $attachment_id = wp_insert_attachment($attachment, $upload_file['file']);
            if (!is_wp_error($attachment_id)) {
                require_once(ABSPATH . 'wp-admin/includes/image.php');
                $attachment_data = wp_generate_attachment_metadata($attachment_id, $upload_file['file']);
                wp_update_attachment_metadata($attachment_id, $attachment_data);
                return $attachment_id;
            }
        }
        return false;
    }

    public function fix_fb()
    {
        $q = new WP_Query([
            'post_type' => 'post',
            'posts_per_page' => -1,
            's' => 'facebook.com',
            'no_found_rows' => true,
        ]);
        while ($q->have_posts()) {
            $q->the_post();
            $post = $q->post;
            $content = $post->post_content;
            $content = preg_replace_callback('/<iframe(.*?)src=&quot;https:\/\/www\.facebook\.com\/plugins\/post\.php\?href=(.*?)&quot(.*?)<\/iframe>/i', function ($matches) {
                $url = urldecode($matches[2]);
                $url = explode('&', $url)[0];
                return '[embed]'.$url.'[/embed]';
            }, $content);

            wp_update_post([
                'ID'           => $post->ID,
                'post_content' => $content
            ]);
        }
    }

    public function clear()
    {
        $posts = get_posts([
            'post_type' => 'post',
            'posts_per_page' => -1
        ]);
        foreach ($posts as $post) {
            wp_delete_post($post->ID, true);
        }
    }
}

WP_CLI::add_command('dp', 'DP_Command');
