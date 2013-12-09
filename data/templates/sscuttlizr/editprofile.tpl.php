	<?php
	$this->includeTemplate($GLOBALS['top_include']);
	?>

	<div class="container-full">
		<div class="row">
			<div class="col-12 col-sm-12 col-xs-12 col-lg-12">
				<form action="<?php echo $formaction; ?>" method="post">
					<input type="hidden" name="token" value="<?php echo $token; ?>"/>

					<h3><?php echo T_('Account Details'); ?></h3>

					<div class="form-group">
							<?php echo T_('Username'); ?>
							<?php echo $user; ?>
					</div>
					<div class="form-group">
							<label for="pPass"><?php echo T_('New Password'); ?></label>
							<input class="form-control" type="password" name="pPass" id="pPass" size="20" />
					</div>
					<div class="form-group">
							<label for="pPassConf"><?php echo T_('Confirm Password'); ?></label>
							<input class="form-control" type="password" name="pPassConf" id="pPassConf" size="20" />
					</div>
					<div class="form-group">
							<label for="pMail"><?php echo T_('E-mail'); ?></label>
							<input class="form-control" type="text" name="pMail" id="pMail" size="75" value="<?php echo filter($objectUser->getEmail(), 'xml'); ?>" />
							<i class="fa fa-chevron-up"></i> <?php echo T_('Required'); ?>
					</div>
					<div class="form-group">
							<label for="pEnablePrivateKey"><?php echo T_('Enable') . ' ' . T_('Private RSS Feed'); ?></label>
							<input class="form-control" type="checkbox" id="pEnablePrivateKey" name="pEnablePrivateKey" value="true" <?php echo $privateKeyIsEnabled;?> />
					</div>
					<a onclick="getNewPrivateKey(this); return false;"><button class="btn btn-default" type="submit" name="submittedPK" value="1"><?php echo T_('Generate New Key'); ?></button></a>
					<input class="form-control" type="text" id="pPrivateKey" name="pPrivateKey" size="40" value="<?php echo $privateKey;?>" readonly="readonly" />

					<h3><?php echo T_('Personal Details'); ?></h3>

					<div class="form-group">
							<label for="pName"><?php echo T_('Name'); ?></label>
							<input class="form-control" type="text" name="pName" id="pName" size="75" value="<?php echo filter($objectUser->getName(), 'xml'); ?>" />
					</div>
					<div class="form-group">
							<label for="pPage"><?php echo T_('Homepage'); ?></label>
							<input class="form-control" type="text" name="pPage" id="pPage" size="75" value="<?php echo filter($objectUser->getHomepage()); ?>" />
					</div>
					<div class="form-group">
							<label for="pDesc"><?php echo T_('Description'); ?></label>
							<textarea class="form-control" name="pDesc" id="pDesc" cols="75" rows="10"><?php echo $objectUser->getContent(); ?></textarea>
					</div>
					<input class="btn btn-default" type="submit" name="submitted" value="<?php echo T_('Save Changes'); ?>" />

				<?php include 'editprofile-sslclientcerts.tpl.php'; ?>
				<h3><?php echo T_('Actions'); ?></h3>
				<table class="profile">
					<div class="form-group">
							<?php echo T_('Export bookmarks'); ?>
							
						<a href="../api/export_html.php"><?php echo T_('HTML file (for browsers)')?></a> /
						<a href="../api/posts_all.php"><?php echo T_('XML file (like del.icio.us)')?></a> /
						<a href="../api/export_csv.php"><?php echo T_('CSV file (for spreadsheet tools)')?></a>
							
					</div>
					<div class="form-group">  </div>
					<div class="form-group">  </div>
				</table>

				</form>
			</div>
		</div>
	</div>
	<?php
	$this->includeTemplate($GLOBALS['bottom_include']);
	?>
