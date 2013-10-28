<!-- Naming convention: v_users_signup = views_controller_method */ -->


<section class="content">
	<h2>Log In</h2>

		
		 <?php if(isset($success)): ?>
	        <div class='success'>
	            Thanks for signing up! Please log in to get started.
	        </div>
	        <br>
	    <?php endif; ?>

	    <form method='POST' action='/users/p_login'>

		Email address <input type='text' name='email'><br />
		Password <input type='password' name='password'><br />

		 <?php if(isset($error)): ?>
	        <div class='error'>
	            Login failed. Please double check your email and password.
	        </div>
	        <br>
	    <?php endif; ?>

	    <input type='submit' value='Log In'>

	</form>
</section>