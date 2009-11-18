=== Plugin Name ===
Contributors: Korolev Igor
Tags: Comments, Third Party Login, openid, Yandex, Google, LiveJournal, Gmail, Flickr, etc
Requires at least: 2.0
Tested up to: 2.8.5
Stable tag: 1.0

The 'Comments with OpenID' plugin allows to provide user details via OpenID service providers (Google, Yandex, LiveJournal etc.) while commenting.

== Description ==

The Comments with OpenId plugin allows the user to provide his/her details via all the famous 
OpenID service providers (Google, Yandex, LiveJournal etc.) while commenting. 
A working example of the plugin can be found on http://unixpin.com

== Installation ==
1. Download the plugin file
2. Extract the archive contents to the wp-content/plugins folder i.e. wp-content/plugins/comments-with-openid
3. Login to WordPress Administration Center
4. Activate the plugin
5. Add the following line in wp-content/themes/YOUR_THEME/comments.php: 
	<?php comments_with_openid(); ?>
	<br/>
	<label>Or enter your OpenId URL:</label><br/>
	<input type="text" name="openid_identifier" id="openid_identifier" class="textfield" tabindex="4" style="width:300px" />

For more details, please visit: http://www.unixpin.com/wordpress/2009/11/16/comments-with-openid/ 

== Frequently Asked Questions ==

= What are the plugin requirements? =

This plugin requires OpenID plugin to be installed.

= I have a question/I want to add X OpenID provider? =

Contact to me at http://www.unixpin.com/wordpress/2009/11/16/wordpress-plugin-comments-with-openid/

== Screenshots ==

1. Sample of login form


== Changelog ==

= 1.0 =
* First version

