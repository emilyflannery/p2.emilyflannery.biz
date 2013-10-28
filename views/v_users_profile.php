<img id="logo" src="/images/foodshare.png" />

<?php if(isset($user)): ?>
<section class="content">
	<p>This is <?=$user->first_name;?> <?=$user->last_name;?>'s profile.</p>
	<p><?=$user->email;?></p>
</section>

<?php else: ?>
<section class="content">
	<p>Please <a href="/users/login">log in</a> to view this page.</p>
</section>
<?php endif; ?>




<!-- OR TO GET THE SAME RESULTS:
<?php if($user): ?>
	<section class="content">
		<p>This is <?=$user->first_name;?> <?=$user->last_name;?>'s profile.</p>
	</section>

<?php else: ?>
	<section class="content">
		<p>Please <a href="/users/login">log in</a> to view this page.</p>
	</section>
<?php endif; ?> -->