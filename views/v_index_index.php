<img id="logo" src="/images/foodshare.png" />

<?php if($user): ?>
<section class="content">

	<p id="welcome">
	Welcome, <?=$user->first_name;?>.<br />
	What will you bring to the table today?
	</p>

	<pre>
	<?php
	print_r($user);
	?>
	</pre>

</section>

<?php else: ?>
<section class="content">
	<p id="welcome">
	Welcome to FoodShare! We are excited to see what you will bring to the table. 
	Post recipes of recently cooked meals, share some you have found on other sites, 
	or even post photos of beautiful restaurant meals! Create your account and get started.
	</p>
	<h4><a href="/users/signup">Sign me up!</a></h4>
</section>
<?php endif; ?>


