<?php

class DP_Command extends WP_CLI_Command {
	public function import() {
		global $wpdb;
		$wpdb2 = new wpdb('v2dalmatinski_user', '5Iq(Z3IN]-9t', 'v2dalmatinski_dbase', '141.95.172.161');
		$wpdb2->get_row("SET NAMES 'utf8'");
	}
}

WP_CLI::add_command( 'dp', 'DP_Command' );
