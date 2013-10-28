<!DOCTYPE html>
<html>
<head>
	<title><?php if(isset($title)) echo $title; ?></title>

	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />

	<!-- Common CSS/JS -->
	<link rel="stylesheet" href="/css/style.css" type="text/css">
	<link href='http://fonts.googleapis.com/css?family=Asap:400,700,700italic,400italic' rel='stylesheet' type='text/css'>	
	<link href='http://fonts.googleapis.com/css?family=Rokkitt:400,700' rel='stylesheet' type='text/css'>

					
	<!-- Controller Specific JS/CSS -->
	<?php if(isset($client_files_head)) echo $client_files_head; ?>
	
</head>

<body>	
	
	<nav>
		<ul>
			
				<li><a href="/">Home</a></li>
			
			<!-- If logged in -->
			<?php if($user): ?>
				<li><a href="/posts/add">Create a Post</a></li>
				<li><a href="/users/user_list">Users</a></li>
				<li><a href="/posts/index">Blogroll</a></li>
				<li><a href="/users/profile">Profile</a></li>
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