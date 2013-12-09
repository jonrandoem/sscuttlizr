<?php
$this->includeTemplate($GLOBALS['top_include']);
?>
<div class="container-full">
	<div class="row">
		<div class="col-8 col-xs-12 col-sm-8 col-lg-8">
			<?php
			echo '<h3>'.T_('Users management').'</h3>';

			echo '<ol id="bookmarks">';

			foreach($users as $user) {
				echo '<li class="xfolkentry">'."\n";

				echo '<div class="link">';
				echo '<a href="'.createURL('profile', $user->getUsername()).'">'.$user->getUsername().'</a>';
				echo ' - <span title="'. T_('Public/Shared/Private') .'">'. $user->getNbBookmarks('public') .' / '. $user->getNbBookmarks('shared') .' / '. $user->getNbBookmarks('private') .' '. T_('bookmark(s)') .'</span>';
				echo '</div>';

				if($user->getUsername() != $currentUser->getUsername()) {
						echo '<div class="meta">';
						echo '<a href="'.createURL('admin','delete/'.$user->getUsername()).'" onclick="return confirm(\''.T_('Are you sure?').'\');">'.T_('Delete').'</a>';
						echo '</div>';
				}

				echo '</li>'."\n";
			}
			echo '</ol>';
			?>
			<h3><?php echo T_('Other actions')?></h3>
			<p>
			<a href="<?php echo createURL('admin','checkUrl/') ?>"> <?php echo T_('Check all URLs (May take some time)')  ?></a>
			</p>
		</div>
		<div class="col-4 col-xs-12 col-sm-4 col-lg-4">
			<?php
			$this->includeTemplate('sidebar.tpl');
			?>
		</div>
	</div>
</div>
<?php
$this->includeTemplate($GLOBALS['bottom_include']);
?>
