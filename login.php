// login.php

<?php if(!$auth->isLoggedIn()): ?>

<a href="<?php echo $auth->getAuthUrl(); ?>">Sign in with Google</a>

<?php else: ?>

<?php endif; ?>