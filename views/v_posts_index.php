<section class="content posts">
	<h2>Blogroll</h2>

	<?php foreach($posts as $post): ?>

			<!-- Get an array of posts from posts table, pass it to the view, and 
			the view will loop through that and print out content for each post -->

		<article>

		    <h3><span class="name"><?=$post['first_name']?> <?=$post['last_name']?></span>:</h3>

		    <p><?=$post['content']?></p>

		    <h4 class="time"><time datetime="<?=Time::display($post['created'],'Y-m-d G:i')?>">
		        <?=Time::display($post['created'])?>
		    </time>
			</h4>

		</article>
		<br />

	<?php endforeach; ?>

</section>