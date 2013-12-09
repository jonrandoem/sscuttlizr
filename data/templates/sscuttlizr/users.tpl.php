<?php
$this->includeTemplate($GLOBALS['top_include']);

if ($users && count($users) > 0) {
?>

<div class="container-full">
	<div class="row">
		<div class="col-12 col-sm-12 col-xs-12 col-lg-12">

			<!--p id="sort">
					<?php echo T_("Sort by:"); ?>
					<a href="?sort=alphabet_asc"><?php echo T_("Alphabet"); ?></a><span> / </span>
					<a href="?sort=popularity_asc"><?php echo T_("Popularity"); ?></a>
			</p-->

			<p class="users">
			<ul>
			<?php
			$contents = '<';
			foreach ($users as $row) {
					echo  '<li><strong>'
							. SemanticScuttle_Model_UserArray::getName($row) . '</strong>'
							. ' (<a href="' . createURL('profile', $row['username']) . '">'
							. T_('profile') . '</a> '
							. T_('created in') . ' '
							. date('M Y', strtotime($row['uDatetime'])) . ')'
							. ' : <a href="' . createURL('bookmarks', $row['username']).'">'
							. T_('bookmarks') . '</a></li>';
			}
			?>
			</ul>
			</p>

		</div>
	</div>
</div>

<?php
}
$this->includeTemplate($GLOBALS['bottom_include']);
?>
