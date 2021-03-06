<?php
// create custom plugin settings menu
add_action('admin_menu', 'path_create_menu');

function path_create_menu(){

	// create new sub-menu
	add_submenu_page(
		'themes.php', 
		'Path Theme Options',
		'Path Options',
		'administrator',
		'theme-options.php',
		'path_settings_page'
	);
	add_action('admin_init', 'path_register_settings');
}

function path_register_settings(){
	// register the various custom settings
	register_setting('path-settings-group', 'path_twitter');
	register_setting('path-settings-group', 'path_easy_fundraising');
	register_setting('path-settings-group', 'path_footer_text');
	register_setting('path-settings-group', 'path_logo');
	register_setting('path-settings-group', 'path_homepage_image');
	register_setting('path-settings-group', 'path_clients_image');
	register_setting('path-settings-group', 'path_agencies_image');
	register_setting('path-settings-group', 'path_landlords_image');
	register_setting('path-settings-group', 'path_volunteers_image');
	register_setting('path-settings-group', 'path_analytics');
}

function path_settings_page(){
?>

<div class="wrap">
	<h2>Portfolio Theme Settings</h2>

	<form id="landingOptions" method="post" action="options.php">
	<?php settings_fields( 'path-settings-group' ); ?>		
	<table class="form-table">
		<tr valign="top">
		<th scope="row">Logo:</th>
		<td>
			<input type="text" name="path_logo" value="<?php print get_option('path_logo'); ?>" />
			<br/>
			*upload using the Media Uploader and paste the URL here.
		</td>
		</tr>

		<tr valign="top">
		<th scope="row">Homepage Image:</th>
		<td>
			<input type="text" name="path_homepage_image" value="<?php print get_option('path_homepage_image'); ?>" />
			<br/>
			*upload using the Media Uploader and paste the URL here.
		</td>
		</tr>

		<tr valign="top">
		<th scope="row">Homepage Clients Image:</th>
		<td>
			<input type="text" name="path_clients_image" value="<?php print get_option('path_clients_image'); ?>" />
			<br/>
			*upload using the Media Uploader and paste the URL here.
		</td>
		</tr>

		<tr valign="top">
		<th scope="row">Homepage Agencies Image:</th>
		<td>
			<input type="text" name="path_agencies_image" value="<?php print get_option('path_agencies_image'); ?>" />
			<br/>
			*upload using the Media Uploader and paste the URL here.
		</td>
		</tr>

		<tr valign="top">
		<th scope="row">Homepage landlords Image:</th>
		<td>
			<input type="text" name="path_landlords_image" value="<?php print get_option('path_landlords_image'); ?>" />
			<br/>
			*upload using the Media Uploader and paste the URL here.
		</td>
		</tr>

		<tr valign="top">
		<th scope="row">Homepage volunteers Image:</th>
		<td>
			<input type="text" name="path_volunteers_image" value="<?php print get_option('path_volunteers_image'); ?>" />
			<br/>
			*upload using the Media Uploader and paste the URL here.
		</td>
		</tr>

		<tr valign="top">
		<th scope="row">Twitter Link:</th>
		<td>
			<input type="text" name="path_twitter" value="<?php print get_option('path_twitter'); ?>" />
			<br/>
		</td>
		</tr>

		<tr valign="top">
		<th scope="row">Easy Fundraising Link:</th>
		<td>
			<input type="text" name="path_easy_fundraising" value="<?php print get_option('path_easy_fundraising'); ?>" />
			<br/>
		</td>
		</tr>		

		<tr valign="top">
		<th scope="row">Footer Text:</th>
		<td>
			<input type="text" name="path_footer_text" value="<?php print get_option('path_footer_text'); ?>" />
			<br/>
		</td>
		</tr>	

		<tr valign="top">
		<th scope="row">Analytics Code:</th>
		<td>
			<textarea name="path_analytics" class="analytics-textarea"><?php print get_option('path_analytics'); ?></textarea>
		</td>
		</tr>

		<p class="submit">
			<input type="submit" class="button-primary" value="<?php _e('Save Changes') ?>" />
		</p>

	</form>
</div>
<?php }

?>