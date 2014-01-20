<?php
$show = false;

if ( $currentUser->isAdmin() && isset($GLOBALS['jappixEnableForAdmin']) && $GLOBALS['jappixEnableForAdmin'] == true ) {
	$show = true;
} else {
	if ( $userservice->isLoggedOn() && isset($GLOBALS['jappixEnableForLogged']) && $GLOBALS['jappixEnableForLogged'] == true ) {
		$show = true;
	}
}



if ( $show == true ) {
	?>
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

		$domain = ( isset($GLOBALS['jappixDomain']) && $GLOBALS['jappixDomain'] != "" ) ? $GLOBALS['jappixDomain'] : 'anonymous.jappix.com';

		$paramStr = $autoconnect . ', true, "' . $domain . '"';
		if ( isset($GLOBALS['jappixAuth']) && $GLOBALS['jappixAuth'] == true && isset($GLOBALS['jappixUser']) && isset($GLOBALS['jappixPassword']) ) {
			$paramStr .= ', "' . $GLOBALS['jappixUser'] . '", "' . $GLOBALS['jappixPassword'] . '"';
		}

		$animate = ( isset($GLOBALS['jappixAnimate']) && $GLOBALS['jappixAnimate'] == true ) ? 'MINI_ANIMATE = true;' : 'MINI_ANIMATE = false;';

		$resource = ( isset($GLOBALS['jappixResource']) && $GLOBALS['jappixResource'] != "" ) ? 'MINI_RESOURCE = "' . $GLOBALS['jappixResource'] . '";' : 'SemanticScuttle';

		$nick = ( isset($GLOBALS['jappixNickName']) && $GLOBALS['jappixNickName'] != '' ) ? 'MINI_RANDNICK = true; MINI_NICKNAME = "' . $GLOBALS['jappixNickName'] . '";' : 'MINI_RANDNICK = true;';

		$error = ( isset($GLOBALS['jappixErrorLink']) && $GLOBALS['jappixErrorLink'] != '' ) ? 'MINI_ERROR_LINK = "' . $GLOBALS['jappixErrorLink'] . '";' : 'MINI_ERROR_LINK = https://mini.jappix.com/issues;';

		$disableMobile = ( isset($GLOBALS['jappixDisableMobile']) && $GLOBALS['jappixDisableMobile'] == true ) ? 'MINI_DISABLE_MOBILE = true;' : 'MINI_DISABLE_MOBILE = false;';

		$groupChats = '';
		if ( isset($GLOBALS['jappixGroupChats']) && is_array($GLOBALS['jappixGroupChats']) ) {
			$groupChats .= 'MINI_GROUPCHATS = ["' . implode('", "', $GLOBALS['jappixGroupChats']) . '"];';
		}

		?>
		jQuery.getScript("<?php echo $url; ?>", function() {
			<?php echo $groupChats; ?>
			<?php echo $animate; ?>
			<?php echo $nick ?>
			<?php echo $resource ?>
			<?php echo $error ?>
			<?php echo $disableMobile ?>
			launchMini(<?php echo $paramStr; ?>);
			jQuery('#jappix_mini a.jm_pane').css('height', '25px');
		});
		jQuery('#jappix_mini a.jm_chat-tab').css('height', '25px');
	</script>
	<?php
}
?>