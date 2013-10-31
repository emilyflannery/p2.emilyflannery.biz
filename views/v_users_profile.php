<section class="content posts">
	<?php if(isset($user)): ?>

		<?php if(isset($success)): ?>
	        <div class='success'>
	            Thank you for signing up! Please log in to get started.
	        </div>
	        <br>
	    <?php endif; ?>
	    

	<section class="profile">
		<h2><?=$user->first_name;?>'s profile</h2>
		<h3><?=$user->email;?></h3>
	</section>

	<?php foreach($posts as $post): ?>

			<!-- Get an array of posts from posts table, pass it to the view, and 
			the view will loop through that and print out content for each post -->

		<article>

		    <h3><span class="name"><?=$post['first_name']?> <?=$post['last_name']?></span>:</h3>

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