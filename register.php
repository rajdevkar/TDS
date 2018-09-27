<?php include 'imports.php'; ?>
<?php include 'database/regfun.php'; ?>
<register>
<div class="title">
	ThinkShareDesign
</div>
<div class="form-wrapper">
	<div class="form-container">
		<form method="post" action="" onsubmit="return validateForm()">
			<label>Connect Us..</label>
			<input type="text" class="register" name="name" placeholder="Name" required/>
			<input type="text" class="register" name="username" placeholder="Username" required/>
			<input type="text" class="register" name="email_id" placeholder="Email id" required/>
			<input type="text" class="register" name="phone" placeholder="Phone" required/>
			<input type="password" class="register" name="password" placeholder="Password" required/>
			<input type="password" class="register" name="cpassword" placeholder="Confirm Password" required/>
			<input type="submit" class="register" value="Register" name="submit"/>
		</form>
	</div>
</div>
</register>
<?php include 'footer.php'; ?>