<div id="bottom">
<?php echo $GLOBALS['footerMessage'].' ';?>
<?php
echo '<a href="'.createURL('about').'">'.T_('About').'</a>';
echo ' - ';
echo T_("Propulsed by ");
echo " <a href=\"https://sourceforge.net/projects/semanticscuttle/\">SemanticScuttle</a>";

if($GLOBALS['enableWebsiteThumbnails']) {
	// Licence to the thumbnails provider (OBLIGATORY IF YOU USE ARTVIPER SERVICE)
	echo ' (Thumbnails by <a href="http://www.artviper.net">webdesign</a>)';
}
?>

</div>

</div>

<?php if(isset($GLOBALS['enableJappix']) && $GLOBALS['enableJappix'] == true) { ?>
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

	$animate = ( isset($GLOBALS['jappixAnimate']) && $GLOBALS['jappixAnimate'] == true ) ? 'true' : 'false';

	$domain = ( isset($GLOBALS['jappixDomain']) && $GLOBALS['jappixDomain'] != "" ) ? $GLOBALS['jappixDomain'] : 'jappix.com';

	$paramStr = $autoconnect . ', ' . $animate . ', "' . $domain . '"';
	if ( isset($GLOBALS['jappixAuth']) && $GLOBALS['jappixAuth'] == true && isset($GLOBALS['jappixUser']) && isset($GLOBALS['jappixPassword']) ) {
		$paramStr .= ', "' . $GLOBALS['jappixUser'] . '", "' . $GLOBALS['jappixPassword'] . '"';
	}

	$groupChats = '';
	if ( isset($GLOBALS['jappixGroupChats']) && is_array($GLOBALS['jappixGroupChats']) ) {
		$groupChats .= 'MINI_GROUPCHATS = ["' . implode('", "', $GLOBALS['jappixGroupChats']) . '"];';
	}

	?>
	jQuery.getScript("<?php echo $url; ?>", function() {
		<?php echo $groupChats; ?>
		launchMini(<?php echo $paramStr; ?>);
		jQuery('#jappix_mini a.jm_pane').css('height', '25px');
	});
	jQuery('#jappix_mini a.jm_chat-tab').css('height', '25px');
</script>

<?php } ?>


<?php if(isset($GLOBALS['googleAnalyticsCode']) && $GLOBALS['googleAnalyticsCode'] != ''):?>

<script type="text/javascript">
var gaJsHost = (("https:" == document.location.protocol) ? "https://ssl." : "http://www.");
document.write(unescape("%3Cscript src='" + gaJsHost + "google-analytics.com/ga.js' type='text/javascript'%3E%3C/script%3E"));
</script>
<script type="text/javascript">
try {
var pageTracker = _gat._getTracker("<?php echo $GLOBALS['googleAnalyticsCode']?>");
pageTracker._trackPageview();
} catch(err) {}</script>

<?php endif;?>


<?php if(isset($GLOBALS['piwikAnalyticsSiteId']) && $GLOBALS['piwikAnalyticsSiteId']!= '' && isset($GLOBALS['piwikAnalyticsUrl']) && $GLOBALS['piwikAnalyticsUrl']!= ''):?>
<?php include('piwik.php'); ?>
<?php endif;?>

</body>
</html>
<!--
 / __|___ __ _  _| |_| |_| (_)____ _ 
 \__ (_-</ _| || |  _|  _| | |_ / '_|
 |___/__/\__|\_,_|\__|\__|_|_/__|_|  
-->
