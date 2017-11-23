Click here to verify your account: <a href="<?php echo e($link = route('email-verification.check', $user->verification_token) . '?email=' . urlencode($user->email)); ?>"><?php echo e($link); ?></a>
