<?php

class GridPane_Cache_Purger_Plugin_Deactivator {

	public static function deactivate() {

		$nginx_cache_purge_log = GPCP_DIR_PATH . '/purge-logs/nginx-cache-purge.log';

		unlink( $nginx_cache_purge_log );
	}

}