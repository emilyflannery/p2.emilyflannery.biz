<section class="content posts profile">
	<?php if(isset($user)): ?>

	<section>
		<h2><?=$user->first_name;?>'s profile</h2>
		<h3><?=$user->email;?></h3>
	</section>

	<h4>My Posts:</h4>
	<?php foreach($posts as $post): ?>

			<!-- Get an array of posts from posts table, pass it to the view, and 
			the view will loop through that and print out content for each post -->

		<article>

		    <p><?=$post['content']?></p>

		    <p class="time"><time datetime="<?=Time::display($post['created'],'Y-m-d G:i')?>">
		        <?=Time::display($post['created'])?>
		    </time>
			</p>

		</article>

	<?php endforeach; ?>

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