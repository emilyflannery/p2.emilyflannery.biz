<!DOCTYPE html>
<html>
<head>
	<title><?php if(isset($title)) echo $title; ?></title>

	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />

	<!-- Common CSS/JS -->
	<link rel="stylesheet" href="/stylesheets/screen.css" type="text/css">
	<link href='http://fonts.googleapis.com/css?family=Asap:400,700,700italic,400italic' rel='stylesheet' type='text/css'>	
	<link href='http://fonts.googleapis.com/css?family=Playfair+Display:400,700,900,400italic,700italic,900italic' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Cutive+Mono' rel='stylesheet' type='text/css'>
	
	<script src="http://code.jquery.com/jquery-2.0.3.min.js"></script> 
	<script src="http://netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
	
	
					
	<!-- Controller Specific JS/CSS -->
	<?php if(isset($client_files_head)) echo $client_files_head; ?>
	
</head>

<body>	
	
	<nav>
		<ul>
			
				<li><a href="/">Home</a></li>
			
			<!-- If logged in -->
			<?php if($user): ?>
				<li><a href="/users/profile">Profile</a></li>
				<li><a href="/posts/add">Post</a></li>
				<li><a href="/posts/index">Blogroll</a></li>
				<li><a href="/posts/users">Follow</a></li>
				<li><a href="/users/logout">Log Out</a></li>
			<!-- If not logged in -->
			<?php else: ?>
				<li><a href="/users/signup">Sign Up</a></li>
				<li><a href="/users/login">Log In</a></li>
			<?php endif; ?>

		</ul>
	</nav>

	<?php if(isset($content)) echo $content; ?>

	<footer>
		<img src="/images/foodshare.png" />
	</footer>

	<?php if(isset($client_files_body)) echo $client_files_body; ?>
</body>
</html>