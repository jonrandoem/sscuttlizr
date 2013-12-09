<?php
$this->includeTemplate($GLOBALS['top_include']);
?>
<div class="container-full">
	<div class="row">
		<div class="col-12 col-xs-12 col-sm-12 col-lg-12">
			<form action="<?php echo $formaction; ?>" method="post">
			<p><?php echo T_('Are you sure?'); ?></p>
			<p>
					<input class="btn btn-default" type="submit" name="confirm" value="<?php echo T_('Yes'); ?>" />
					<input class="btn btn-default" type="submit" name="cancel" value="<?php echo T_('No'); ?>" />
			</p>

			<?php if (isset($referrer)): ?>
			<div><input type="hidden" name="referrer" value="<?php echo $referrer; ?>" /></div>
			<?php endif; ?>

			</form>
		</div>
	</div>
</div>

<?php
$this->includeTemplate($GLOBALS['bottom_include']); 
?>