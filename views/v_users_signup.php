<!-- Naming convention: v_users_signup = views_controller_method */ -->

<h2>Sign Up</h2>

<form method='POST' action='/users/p_signup'>  <!-- Naming convention = /controller/post or method -->

	First Name <input type='text' name='first_name'><br />
	Last Name <input type='text' name='last_name'><br />
	Email address <input type='text' name='email'><br /> <!-- Query database to be sure email doesn't already exist -->
	Password <input type='password' name='password'><br />

	<input type='Submit' value='Sign Up'>

</form>