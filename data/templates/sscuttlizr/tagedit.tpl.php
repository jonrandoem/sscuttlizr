<?php
$this->includeTemplate($GLOBALS['top_include']);
?>
<script type="text/javascript">
window.onload = function() {
    document.getElementById("description").focus();
}
</script>

<div class="container-full">
	<div class="row">
		<div class="col-12 col-xs-12 col-sm-12 col-lg-12">
			<form action="<?php echo $formaction; ?>" method="post">
			<table>
			<tr>
					<th align="left"><?php echo T_('Description'); ?></th>
					<td><textarea class="form-control" name="description" cols="75" rows="10"><?php echo $description['tDescription']; ?></textarea></td>
			</tr>
			<tr>
					<td></td>
					<td>
					<input class="btn btn-default" type="submit" name="confirm" value="<?php echo T_('Update'); ?>" />
					<input class="btn btn-default" type="submit" name="cancel" value="<?php echo T_('Cancel'); ?>" />
					</td>
					<td></td>
			</tr>
			</table>

			<?php if (isset($referrer)): ?>
			<div><input type="hidden" name="referrer" value="<?php echo $referrer; ?>" /></div>
			<?php endif; ?>
			<div><input type="hidden" name="tag" value="<?php echo $tag; ?>" /></div>
			</form>
		</div>
	</div>
</div>

<?php
$this->includeTemplate($GLOBALS['bottom_include']); 
?>
