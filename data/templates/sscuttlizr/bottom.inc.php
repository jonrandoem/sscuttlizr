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

	jQuery.getScript("<?php echo $GLOBALS['jappixUrl']; ?>/get.php?l=fr&t=js&g=mini.xml", function() {
		JappixMini.launch({
			connection: {
				<?php if ( isset($GLOBALS['jappixAuth']) && $GLOBALS['jappixAuth'] == true ) {
					echo 'user: \'' . $GLOBALS['jappixUser'] . '\',';
					echo 'password: \'' . $GLOBALS['jappixPassword'] . '\',';
				} ?>
				domain: '<?php echo $GLOBALS['jappixDomain']; ?>',
				resource: '<?php echo $GLOBALS['jappixResource']; ?>'
			},
			
			application: {
				network: {
					autoconnect: false
				},

				interface: {
					showpane: true,
					animate: true
				},

				user: {
					random_nickname: true,
					nickname: '<?php echo $GLOBALS['jappixNickname']; ?>'
				},

				chat: {
					open: []
				},

				groupchat: {
					open: [],
					open_passwords: []
				}
			}
		});
		jQuery('#jappix_mini a.jm_pane').css('height', '25px');
	});
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
