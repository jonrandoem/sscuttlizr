<!DOCTYPE html>
<html class="no-js">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title><?php echo filter($GLOBALS['sitename'] .(isset($pagetitle) ? ' » ' . $pagetitle : '')); ?></title>
	<meta name="description" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" type="image/png" href="<?php echo $theme->resource('icon.png');?>">
	<link rel="stylesheet" type="text/css" href="<?php echo $theme->resource('css/bootstrap.min.css');?>">
	<link rel="stylesheet" type="text/css" href="<?php echo $theme->resource('css/font-awesome.min.css');?>">
	<link rel="stylesheet" type="text/css" href="<?php echo $theme->resource('scuttle.css');?>">
	<link rel="search" type="application/opensearchdescription+xml" href="<?php echo ROOT ?>api/opensearch.php" title="<?php echo htmlspecialchars($GLOBALS['sitename']) ?>">
	<?php
	if (isset($rsschannels)) {
		$size = count($rsschannels);
		for ($i = 0; $i < $size; $i++) {
			echo '  <link rel="alternate" type="application/rss+xml" title="' . htmlspecialchars($rsschannels[$i][0]) . '"' . ' href="'. htmlspecialchars($rsschannels[$i][1]) .'" />' . "\n";
		}
	}
	?>
	
	<script type="text/javascript" src="<?php echo ROOT ?>js/sscuttlizr/modernizr.min.js"></script>
	<?php if (DEBUG_MODE) : ?>
		<script type="text/javascript" src="<?php echo ROOT ?>js/sscuttlizr/jquery-1.10.2.js"></script>
		<script type="text/javascript" src="<?php echo ROOT_JS ?>jquery.jstree.js"></script>
		<script type="text/javascript" src="<?php echo ROOT ?>js/sscuttlizr/bootstrap.js"></script>
	<?php else: ?>
		<script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
		<script>
			window.jQuery || document.write('<script src="<?php echo ROOT ?>js/sscuttlizr/jquery-1.10.2.min.js"><\/script>')
		</script>
		<script type="text/javascript" src="<?php echo ROOT_JS ?>jquery.jstree.min.js"></script>
		<script type="text/javascript" src="<?php echo ROOT ?>js/sscuttlizr/bootstrap.min.js"></script>
	<?php endif ?>
	<?php
	if ( isset($bookmarks) && ! empty($bookmarks) ) {
		?>
		<script type="text/javascript" src="<?php echo ROOT ?>js/sscuttlizr/jquery.qrcode.min.js"></script>
		<?php
	}
	?>
	<script type="text/javascript" src="<?php echo ROOT ?>jsScuttle.php"></script>
	
</head>
<body>
	<!--[if lt IE 8]>
	<p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
	<![endif]-->
	<div id="page">
		<?php
		$headerstyle = '';
		if(isset($_GET['popup'])) {
			$headerstyle = ' popup';
		}
		?>
		<nav id="header" class="navbar navbar-default<?php echo $headerstyle; ?>" role="navigation">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#sscuttlizr-navbar">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="<?php echo ROOT ?>"><?php echo $GLOBALS['sitename']; ?></a>
			</div>
			<div class="collapse navbar-collapse" id="sscuttlizr-navbar">
				<?php
				if(!isset($_GET['popup'])) {
					$this->includeTemplate('toolbar.inc');
				}
				?>
			</div>
		</nav>
		<div class="container-full">
			<div class="row" id="subtitle">
				<div class="col-4 col-xs-12 col-sm-4 col-lg-4">
					<?php
					if (isset($subtitlehtml)) {
						echo '<div class="container-full">' . $subtitlehtml . "</div>";
					} else if (isset($subtitle)) {
								echo '<div class="container-full">' . htmlspecialchars($subtitle) . "</div>";
					}
					?>
				</div>
				<div class="col-4 col-xs-12 col-sm-4 col-lg-4"></div>
				<div class="col-4 col-xs-12 col-sm-4 col-lg-4">
					<?php
					if ( ! isset($_GET['popup']) && ($pageName == 'bookmarks' || $pageName == 'index') ) {
						include('search.menu.php');
					}
					?>
				</div>
			</div>
		</div>
		<div class="container-full">
			<div class="row">
				<div class="col-12 col-xs-12 col-sm-12 col-lg-12">
					<?php
					if(DEBUG_MODE) {
						echo '<p class="error">'. T_('Admins, your installation is in "Debug Mode" ($debugMode = true). To go in "Normal Mode" and hide debugging messages, change $debugMode to false into config.php.') ."</p>\n";
					}
					if (isset($error) && $error!='') {
						echo '<p class="error">'. $error ."</p>\n";
					}
					if (isset($msg) && $msg!='') {
						echo '<p class="success">'. $msg ."</p>\n";
					}
					if (isset($tipMsg) && $tipMsg!='') {
						echo '<p class="tipMsg">'. $tipMsg ."</p>\n";
					}
					?>
				</div>
			</div>
		</div>
