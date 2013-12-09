<?php
$this->includeTemplate($GLOBALS['top_include']);
?>

<script type="text/javascript">
window.onload = function() {
    document.getElementById("username").focus();
}
</script>
<div class="container-full">
	<div class="row">
		<div class="col-12 col-xs-12 col-sm-12 col-lg-12">
			<?php
			if (!$userservice->isSessionStable()) {
					echo '<p class="error">'.T_('Please activate cookies').'</p>';
			}
			?>

			<form action="<?php echo $formaction; ?>" method="post" role="form">
				<div><input type="hidden" name="query" value="<?php echo $querystring; ?>" /></div>
				<div class="form-group">
					<label for="username"><?php echo T_('Username'); ?></label>
					<input class="form-control" type="text" id="username" name="username" size="20" />
				</div>
				<div class="form-group">
					<label for="password"><?php echo T_('Password'); ?></label></th>
					<input class="form-control" type="password" id="password" name="password" size="20" />
				</div>
				<div class="form-group">
					<label for="keeppass"><?php echo T_("Don't ask for my password for 2 weeks"); ?>.</label>
					<input class="form-control" type="checkbox" name="keeppass" id="keeppass" value="yes" />
				</div>
				<input class="btn btn-default" type="submit" name="submitted" value="<?php echo T_('Log In'); ?>" />
				<p>&raquo; <a href="<?php echo ROOT ?>password.php"><?php echo T_('Forgotten your password?') ?></a></p>
			</form>
		</div>
	</div>
</div>

<?php
$this->includeTemplate($GLOBALS['bottom_include']);
?>