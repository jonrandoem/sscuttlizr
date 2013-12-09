<?php
if ($userservice->isLoggedOn() && is_object($currentUser)) {
	$cUserId = $userservice->getCurrentUserId();
	$cUsername = $currentUser->getUsername();
?>

	<ul class="nav navbar-nav navigation">
		<li><a href="<?php echo createURL(''); ?>"><i class="fa fa-home"></i> <?php echo T_('Home'); ?></a></li>    
		<li><a href="<?php echo createURL('bookmarks', $cUsername); ?>"><i class="fa fa-star"></i> <?php echo T_('Bookmarks'); ?></a></li>
		<li><a href="<?php echo createURL('alltags', $cUsername); ?>"><i class="fa fa-tags"></i> <?php echo T_('Tags'); ?></a></li>
		<li><a href="<?php echo createURL('watchlist', $cUsername); ?>"><i class="fa fa-users"></i> <?php echo T_('Watchlist'); ?></a></li>
		<li><a href="<?php echo $userservice->getProfileUrl($cUserId, $cUsername); ?>"><i class="fa fa-user"></i> <?php echo T_('Profile'); ?></a></li>
		<li><a href="<?php echo createURL('bookmarks', $cUsername . '?action=add'); ?>"><i class="fa fa-bookmark"></i> <?php echo T_('Add a Bookmark'); ?></a></li>
		<li><a href="<?php echo createURL('about'); ?>"><i class="fa fa-info-circle"></i> <?php echo T_('About'); ?></a></li>
	</ul>
	<ul class="nav navbar-nav navbar-right navigation">
		<?php if($currentUser->isAdmin()): ?>
			<li><a href="<?php echo createURL('admin', ''); ?>">[<i class="fa fa-gears"></i> <?php echo T_('Admin'); ?>]</a></li>
		<?php endif; ?>
		<li><a href="<?php echo $userservice->getProfileUrl($cUserId, $cUsername); ?>"><i class="fa fa-user"></i> <?php echo $cUsername?></a></li>
		<li><a href="<?php echo ROOT ?>?action=logout">(<i class="fa fa-power-off"></i> <?php echo T_('Log Out'); ?>)</a></li>
	</ul>

<?php
} else {
?>
	<ul class="nav navbar-nav navigation">
		<li><a href="<?php echo createURL(''); ?>"><i class="fa fa-home"></i> <?php echo T_('Home'); ?></a></li>
		<li><a href="<?php echo createURL('populartags'); ?>"><i class="fa fa-tags"></i> <?php echo T_('Popular Tags'); ?></a></li>
		<li><a href="<?php echo createURL('about'); ?>"><i class="fa fa-info-circle"></i> <?php echo T_('About'); ?></a></li>
	</ul>
	<ul class="nav navbar-nav navbar-right navigation">
		<li><a href="<?php echo createURL('login'); ?>"><i class="fa fa-user"></i> <?php echo T_('Log In'); ?></a></li>
		<?php if ($GLOBALS['enableRegistration']) { ?>
			<li><a href="<?php echo createURL('register'); ?>"><i class="fa fa-plus"></i> <?php echo T_('Register'); ?></a></li>
		<?php } ?>
	</ul>

<?php
}
?>
