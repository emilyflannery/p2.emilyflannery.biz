<!-- Filename "v_users_profile" reflects "views_controllername_method" -->
<!-- Ok to use logic IF it's determining whether or how something should display -->

<?php if(isset($user_name)): ?>
	<h1>This is the profile for <?=$user_name?></h1>
<?php else: ?>
	<h2>No user has been specified</h1>
<?php endif; ?>