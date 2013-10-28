<img id="logo" src="/images/foodshare.png" />

<?php if(isset($user)): ?>
<section class="content">
		
		<?php if(isset($success)): ?>
	        <div class='success'>
	            Thank you for signing up!
	        </div>
	        <br>
	    <?php endif; ?>
	    

	<p>This is <?=$user->first_name;?> <?=$user->last_name;?>'s profile.</p>
	<p><?=$user->email;?></p>

	<?php foreach($posts as $post): ?>

			<!-- Get an array of posts from posts table, pass it to the view, and 
			the view will loop through that and print out content for each post -->

		<article>

		    <h1><?=$post['first_name']?> <?=$post['last_name']?> posted:</h1>

		    <p><?=$post['content']?></p>

		    <time datetime="<?=Time::display($post['created'],'Y-m-d G:i')?>">
		        <?=Time::display($post['created'])?>
		    </time>

		</article>
		<br />

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