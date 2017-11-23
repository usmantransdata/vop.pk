<html>
	<head>
		<title><?php echo e(isset($senderName) ? $senderName : ''); ?></title>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<style type="text/css"><?php echo e(file_get_contents(app_path() . '/../vendor/snowfire/beautymail/src/styles/css/ark.css')); ?></style>
		<?php if($css): ?>
		<style type="text/css">
			<?php echo e($css); ?>

		</style>
		<?php endif; ?>
	</head>
	<body>
	<table id="background-table" border="0" cellpadding="0" cellspacing="0" width="100%">
		<tbody>
		<tr>
			<td align="center">
				<table class="w640" border="0" cellpadding="0" cellspacing="0" width="640">
					<tbody>
					<tr class="large_only">
						<td class="w640" height="20" width="640"></td>
					</tr>
					<tr class="mobile_only">
						<td class="w640" height="10" width="640"></td>
					</tr>
					<tr class="mobile_only">
						<td class="w640" width="640" align="center">
							<img class="mobile_only" border="0" src="<?php echo e($logo['path']); ?>" alt="<?php echo e(isset($senderName) ? $senderName : ''); ?>" width="<?php echo e($logo['width']); ?>" height="<?php echo e($logo['height']); ?>" />
						</td>
					</tr>
					<tr class="mobile_only">
						<td class="w640" height="10" width="640"></td>
					</tr>
					<tr class="large_only">
						<td class="w640" bgcolor="#ffffff" height="20" width="640"></td>
					</tr>
					<tr class="mobile_only">
						<td class="w640" bgcolor="#ffffff" height="10" width="640"></td>
					</tr>
					<tr>
						<td id="header" class="w640" align="center" bgcolor="#FFFFFF" width="640">
							<table class="w640" border="0" cellpadding="0" cellspacing="0" width="640">
								<tr>
									<td class="w20" width="20"></td>
									<td id="logo" width="<?php echo e($logo['width']); ?>" valign="top">
										<img border="0" src="<?php echo e($logo['path']); ?>" alt="<?php echo e(isset($senderName) ? $senderName : ''); ?>" width="<?php echo e($logo['width']); ?>" height="<?php echo e($logo['height']); ?>" />
									</td>
									<td class="w30" width="30"></td>
								</tr>
								<tr>
									<td colspan="3" height="20" class="large_only"></td>
								</tr>
							</table>
						</td>
					</tr>

					<tr>
						<td class="w640" bgcolor="#ffffff" width="640">
							<table class="w640" border="0" cellpadding="0" cellspacing="0" width="640">
								<tbody>

									<?php $__env->startSection('content'); ?>
									<?php echo $__env->yieldSection(); ?>

								</tbody>
							</table>
						</td>
					</tr>
					<tr>
						<td class="w640" bgcolor="#ffffff" width="640" colspan="3" height="20"></td>
					</tr>
					<tr>
						<td>
							<table width="640" class="w640" align="center" cellpadding="0" cellspacing="0">
								<tr>
									<td class="w50" width="50"></td>
									<td class="w410" width="410">
										<?php if(isset($reminder)): ?>
											<p id="permission-reminder" class="footer-content-left" align="left"><?php echo $reminder; ?></p>
										<?php endif; ?>
									</td>
									<td valign="top">
										<table align="right">
											<tr>
												<td colspan="2" height="10"></td>
											</tr>
											<tr>
												<?php if(isset($twitter)): ?>
													<td><a href="https://twitter.com/<?php echo e($twitter); ?>"><img src="<?php echo e(Request::getSchemeAndHttpHost()); ?>/vendor/beautymail/assets/images/ark/twitter.png" alt="Twitter" height="25" width="25" style="border:0" /></a></td>
												<?php endif; ?>

												<?php if(isset($facebook)): ?>
													<td><a href="https://facebook.com/<?php echo e($facebook); ?>"><img src="<?php echo e(Request::getSchemeAndHttpHost()); ?>/vendor/beautymail/assets/images/ark/fb.png" alt="Facebook" height="25" width="25" style="border:0" /></a></td>
												<?php endif; ?>
											</tr>
										</table>
									</td>
									<td class="w15" width="15"></td>
								</tr>

							</table>
						</td>
					</tr>
					<tr>
						<td class="w640" height="60" width="640"></td>
					</tr>
					</tbody>
				</table>
			</td>
		</tr>
		</tbody>
	</table>
	</body>
</html>
