<?php
$this->includeTemplate($GLOBALS['top_include']);
?>

<?php
if ($tags && count($tags) > 0) {
?>
<div class="container-full">
	<div class="row">
		<div class="col-8 col-xs-12 col-sm-8 col-lg-8">
			<p id="sort">
					<?php echo T_("Sort by:"); ?>
					<a href="?sort=alphabet_asc"><?php echo T_("Alphabet"); ?></a><span> / </span>
					<a href="?sort=popularity_asc"><?php echo T_("Popularity"); ?></a>
			</p>
			<p class="tags">

			<?php
			$contents = '';
			foreach ($tags as $row) {
					$entries = T_ngettext('bookmark', 'bookmarks', $row['bCount']);
					$contents .= '<a href="'. sprintf($cat_url, $user, filter($row['tag'], 'url')) .'" title="'. $row['bCount'] .' '. $entries .'" rel="tag" style="font-size:'. $row['size'] .'">'. filter($row['tag']) .'</a> ';
			}
			echo $contents ."\n";
			?>

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
}

$this->includeTemplate($GLOBALS['bottom_include']);
?>
