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
			<p><?php echo sprintf(T_('Sign up here to create a free %s account. All the information requested below is required'), $GLOBALS['sitename']); ?>.</p>

			<form action="<?php echo $formaction; ?>" method="post">
				<div class="form-group">
						<label for="username"><?php echo T_('Username'); ?></label>
						<input class="form-control" type="text" id="username" name="username" size="20" class="required" onkeyup="isAvailable(this, '')" /> 
						<span id="availability"><?php echo '<i class="fa fa-chevron-up"></i> '.T_(' at least 5 characters, alphanumeric (no spaces, no dots or other special ones)') ?></span>
				</div>
				<div class="form-group">
						<label for="password"><?php echo T_('Password'); ?></label>
						<input class="form-control" type="password" id="password" name="password" size="20" class="required" />
				</div>
				<div class="form-group">
						<label for="password2"><?php echo T_('Repeat Password'); ?></label>
						<input class="form-control" type="password" id="password2" name="password2" size="20" class="required" />
						
				</div>
				<div class="form-group">
						<label for="email"><?php echo T_('E-mail'); ?></label>
						<input class="form-control" type="text" id="email" name="email" size="40" class="required" value="<?php echo htmlspecialchars(POST_MAIL); ?>" />
						<span><?php echo '<i class="fa fa-chevron-up"></i> '.T_(' to send you your password if you forget it')?></span>
				</div>

				<?php if(strlen($antispamQuestion)>0) {?>
				<div class="form-group">
						<label for="antispamAnswer"><?php echo T_('Antispam question'); ?></label>
						<input class="form-control" type="text" id="antispamAnswer" name="antispamAnswer" size="40" class="required" placeholder="<?php echo $antispamQuestion; ?>"/>
				</div>
				<?php } ?>
				<input class="btn btn-default" type="submit" name="submitted" value="<?php echo T_('Register'); ?>" />
			</form>
		</div>
	</div>
</div>

<?php
$this->includeTemplate($GLOBALS['bottom_include']);
?>
