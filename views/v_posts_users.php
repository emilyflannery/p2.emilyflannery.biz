<!-- Stream of other uses on app and ability ot follow and unfollow them -->

<section class="content follow">
	<h2>Follow others</h2>

	<?php foreach($users as $user): ?>
	<br />

		<article>
			<!-- Print this user's name -->
	    <div class="avatar"></div>
	    <h3><?=$user['first_name']?> <?=$user['last_name']?></h2>

	    <!-- If there exists a connection with this user, show a unfollow link -->
	     <h4>
	     	<?php if(isset($connections[$user['user_id']])): ?>
	        	<a href='/posts/unfollow/<?=$user['user_id']?>'>Unfollow</a>

	    <!-- Otherwise, show the follow link -->
	    	<?php else: ?>
	        	<a href='/posts/follow/<?=$user['user_id']?>'>Follow</a>
	    	<?php endif; ?>
	    </h4>
		</article>


	<?php endforeach ?>

</section>