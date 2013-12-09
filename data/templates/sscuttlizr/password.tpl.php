<?php
$this->includeTemplate($GLOBALS['top_include']);
?>

<div class="container-full">
	<div class="row">
		<div class="col-12 col-xs-12 col-sm-12 col-lg-12">
			<p><?php echo sprintf(T_('If you have forgotten your password, %s can generate a new one. Enter the username and e-mail address of your account into the form below and we will e-mail your new password to you.'), $GLOBALS['sitename']); ?></p>
			<form action="<?php echo $formaction; ?>" method="post">
				<div class="form-group">
					<label for="username"><?php echo T_('Username'); ?></label>
					<input class="form-control" type="text" id="username" name="username" size="20" class="required" />
				</div>
				<div class="form-group">
					<label for="email"><?php echo T_('E-mail'); ?></label>
					<input class="form-control" type="text" id="email" name="email" size="40" class="required" />
				</div>
				<input class="btn btn-default" type="submit" name="submitted" value="<?php echo T_('Generate Password'); ?>" />
			</form>
		</div>
	</div>
</div>

<?php
$this->includeTemplate($GLOBALS['bottom_include']);
?>