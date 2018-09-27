<?php include 'imports.php'; ?>
<?php include 'database/regfun.php'; ?>
<div class="form-wrapper">
	<div class="form-container">
		<form method="post" action="">
			<label>Register</label>
			<input type="text" name="name" required="true" placeholder="Name" />
			<input type="text" name="username" required="true" placeholder="Username" />
			<input type="text" name="email_id" required="true" placeholder="Email id" />
			<input type="text" name="phone" required="true" placeholder="Phone" />
			<input type="password" name="password" required="true" placeholder="Password" />
			<input type="password" name="cpassword" required="true" placeholder="Confirm Password" />
			<input type="submit" value="Register" name="submit"/>
		</form>
	</div>
</div>
<?php include 'footer.php'; ?>