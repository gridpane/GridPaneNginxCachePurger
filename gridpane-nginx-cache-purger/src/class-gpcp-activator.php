<?php

class GridPane_Cache_Purger_Plugin_Activator {

	public static function activate() {

		$nginx_cache_purge_log = GPCP_DIR_PATH . '/purge-logs/nginx-cache-purge.log';

		fopen( $nginx_cache_purge_log, 'w+' );
	}

}