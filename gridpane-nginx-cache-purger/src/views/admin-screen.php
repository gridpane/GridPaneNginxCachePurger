<div class="wrap">
	<h2>
		<?php _e( 'GridPane Nginx Cache Purger', $this->plugin_textdomain ); ?>
		<span style="float: right; font-size: 10px; color: #888;">
        <?php
        _e( 'Version ', $this->plugin_textdomain );
        echo esc_attr( '0.1' );
        ?>
	</span>
	</h2>
	<div class="wrap">
		<p>The Nginx Helper plugin can not purge all nginx cache. Use this plugin instead when you want to Purge the entire cache for this site.</p>
		<form id="purge" style="margin: 20px 0; height: 30px" method="POST">
			<input type="submit" id="purge" class="button-primary" name="purge" value="PURGE"/>
		</form>
	</div>
</div>