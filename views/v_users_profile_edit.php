<img id="logo" src="/images/foodshare.png" />

<section class="content">
	<h2>Edit Profile</h2>
	<form method='POST' action='/users/p_profile_edit'>  <!-- Naming convention = /controller/post or method -->

		<div class="avatar"></div>
		<input type='file' name='file' value='submit'><br />

		<input type='text' name='first_name' placeholder='<?=$user->first_name;?>'><br />
		<input type='text' name='last_name' placeholder='<?=$user->last_name;?>'><br />
		<input type='text' name='email' placeholder='<?=$user->email;?>'><br /> <!-- Query database to be sure email doesn't already exist -->
		<input type='password' name='password' placeholder='Password'><br />


		<div class="button"><input type='Submit' value='Save'></div>

	</form>
</section>

