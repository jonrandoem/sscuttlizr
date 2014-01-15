<!-- Piwik -->
<script type="text/javascript">
	var _paq = _paq || [];
	_paq.push(["trackPageView"]);
	_paq.push(["enableLinkTracking"]);
	(function() {
		var u=(("https:" == document.location.protocol) ? "https" : "http") + "://<?php echo $GLOBALS['piwikAnalyticsUrl']; ?>/";
		_paq.push(["setTrackerUrl", u+"piwik.php"]);
		_paq.push(["setSiteId", "<?php echo $GLOBALS['piwikAnalyticsSiteId']; ?>"]);
		var d=document, g=d.createElement("script"), s=d.getElementsByTagName("script")[0]; g.type="text/javascript";
		g.defer=true; g.async=true; g.src=u+"piwik.js"; s.parentNode.insertBefore(g,s);
	})();
</script>
<?php if ( isset($GLOBALS['piwikAnalyticsNoScript']) && $GLOBALS['piwikAnalyticsNoScript'] == true ) {
	$url = 'http';
	if ( isset($GLOBALS['piwikAnalyticsNoScriptHttps']) && $GLOBALS['piwikAnalyticsNoScriptHttps'] == true ) {
		$url .= 's';
	}
	$url .= '://' . $GLOBALS['piwikAnalyticsUrl'] . '/piwik.php?idsite=' . $GLOBALS['piwikAnalyticsSiteId'] . '&amp;rec=1';
	?>
	<noscript>
		<img src="<?php echo $url; ?>" style="border:0" alt="">
	</noscript>
<?php } ?>
<!-- End Piwik Code -->