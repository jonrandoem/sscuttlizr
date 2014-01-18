<script type="text/javascript">
	
	jQuery.ajaxSetup({cache: true});
	<?php 
	$url = "";
	if ( isset($GLOBALS['jappixUrl']) && $GLOBALS['jappixUrl'] != "" ) {
		$url .= $GLOBALS['jappixUrl'];
	} else {
		$url .= "https://static.jappix.com";
	}
	$url .= '/php/get.php?l=';
	$langs = array('ar', 'bg', 'cs', 'de', 'en', 'eo', 'es', 'et', 'fa', 'fr', 'he', 'hu', 'id', 'it', 'ja', 'la', 'lb', 
									'mn', 'nl', 'oc', 'pl', 'pt-br', 'pt', 'ru', 'sk', 'sv', 'tr', 'uk', 'zh-cn', 'zh-tw');
	if ( isset($GLOBALS['jappixLang']) && in_array($GLOBALS['jappixLang'], $langs) ) {
		$url .= $GLOBALS['jappixLang'];
	} else {
		$url .= 'en';
	}
	$url .= '&t=js&g=mini.xml';

	$autoconnect = ( isset($GLOBALS['jappixAutoConnect']) && $GLOBALS['jappixAutoConnect'] == true ) ? 'true' : 'false';

	$domain = ( isset($GLOBALS['jappixDomain']) && $GLOBALS['jappixDomain'] != "" ) ? $GLOBALS['jappixDomain'] : 'jappix.com';

	$paramStr = $autoconnect . ', true, "' . $domain . '"';
	if ( isset($GLOBALS['jappixAuth']) && $GLOBALS['jappixAuth'] == true && isset($GLOBALS['jappixUser']) && isset($GLOBALS['jappixPassword']) ) {
		$paramStr .= ', "' . $GLOBALS['jappixUser'] . '", "' . $GLOBALS['jappixPassword'] . '"';
	}

	$animate = ( isset($GLOBALS['jappixAnimate']) && $GLOBALS['jappixAnimate'] == true ) ? 'MINI_ANIMATE = true;' : 'MINI_ANIMATE = false;';

	$groupChats = '';
	if ( isset($GLOBALS['jappixGroupChats']) && is_array($GLOBALS['jappixGroupChats']) ) {
		$groupChats .= 'MINI_GROUPCHATS = ["' . implode('", "', $GLOBALS['jappixGroupChats']) . '"];';
	}

	?>
	jQuery.getScript("<?php echo $url; ?>", function() {
		<?php echo $groupChats; ?>
		<?php echo $animate; ?>
		launchMini(<?php echo $paramStr; ?>);
		jQuery('#jappix_mini a.jm_pane').css('height', '25px');
	});
	jQuery('#jappix_mini a.jm_chat-tab').css('height', '25px');
</script>