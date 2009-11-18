<?php

/*

Plugin Name: Comments with OpenId
Plugin URI: http://www.unixpin.com/wordpress/comments-with-openid
Description: Third party accounts login plugin enables you to allow users to login via third party accounts like Google, Yandex and so on. Based on 'Third Party Accounts Login' plugin of  Anant Garg
Version: 1.0
Author: Korolev Igor
Author URI: http://unixpin.com
Licence: This WordPress plugin is licenced under the GNU General Public Licence. For more information see: http://www.gnu.org/copyleft/gpl.html

For documentation, please visit http://www.unixpin.com/wordpress/comments-with-openid

*/



function comments_with_openid() {
	$plugin_url = trailingslashit( get_bloginfo('wpurl') ).PLUGINDIR.'/'. dirname( plugin_basename(__FILE__) );
	$data = '<div>';
	
	$OpenIDs = 
	array (
		'Yandex' => array( 'url'=> 'http://openid.yandex.ru/USERNAME', 'start'=> 24, 'end'=> 8 ),
		'Google' => array( 'url'=> 'https://www.google.com/accounts/o8/id', 'start'=> 0, 'end'=> 0 ),
		'LiveJournal' => array( 'url'=> 'http://USERNAME.livejournal.com', 'start'=> 7, 'end'=> 8 ),
		'myOpenId' => array( 'url'=> 'http://USERNAME.myopenid.com/', 'start'=> 7, 'end'=> 8 ),
		'Flickr' => array( 'url'=> 'http://flickr.com/USERNAME/', 'start'=> 18, 'end'=> 8 ),
		'claimId' => array( 'url'=> 'http://claimid.com/USERNAME', 'start'=> 19, 'end'=> 8 ),
		'Blogger' => array( 'url'=> 'http://USERNAME.blogspot.com', 'start'=> 7, 'end'=> 8 )
	);


	foreach ($OpenIDs as $openid=>$tp) {
			$data .= '<a href="javascript:void(0);" onclick="javascript:setToVar(\''.$tp['url'].'\',\''.$tp['start'].'\',\''.$tp['end'].'\');">';
			$data .= '<img src="'.$plugin_url.'/img/small/'.strtolower($openid).'.png" width="25" height="25" border="0" class="tpal_image_small" alt="'.$openid.'" title="'.$openid.'">';
			$data .= '</a>';
	}
	$data .= '<br/> </div>';
	

echo <<<EOD
	<style type="text/css">
		.tpal_image_small { 	border:1px solid #cccccc;  	margin-right:5px; 	margin-bottom:5px; }
		.tpal_text a { 	border-bottom:1px dotted #333333; 	text-decoration:none;  }	
	</style>
	<script type="text/javascript">
	function setToVar(url,start,length) {
		document.getElementById('openid_identifier').value = url;
		start = parseInt(start);
		length = start+parseInt(length);
		textbox = document.getElementById('openid_identifier');
		if (textbox.createTextRange) {
			var oRange = textbox.createTextRange();
		    oRange.moveStart("character", start);
		    oRange.moveEnd("character", length - textbox.value.length);
		    oRange.select();
	    } else if (textbox.setSelectionRange) {
	        textbox.setSelectionRange(start, length);
	    }
	    textbox.focus(); 
	}
	</script>
EOD;

	echo $data;
}

?>