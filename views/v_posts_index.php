<section class="content posts">
	<h2>Blogroll</h2>

		<?php if($connections): ?>

			<?php foreach($posts as $post): ?>

					<!-- Get an array of posts from posts table, pass it to the view, and 
					the view will loop through that and print out content for each post -->

				<article>

				    <h3><span class="name"><?=$post['first_name']?> <?=$post['last_name']?></span>:</h3>

				    <p><?=$post['content']?></p>

				    <h4 class="meta"><time datetime="<?=Time::display($post['created'],'Y-m-d G:i')?>">
				        <?=Time::display($post['created'])?>
				    </time>
					</h4>

				</article>
				<br />

			<?php endforeach; ?>

		<?php else: ?>

			<h4 class="prompt"><a href="/posts/users" title="Follow Users">Click here to see what other users are up to!</a></h4>

		<?php endif; ?>

</section>