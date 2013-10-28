<section class="content posts">
	<h2>Blogroll</h2>

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