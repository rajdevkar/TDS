<?php include 'imports.php';
include 'database/logfun.php'; ?>
<login>
<div class="title">
	ThinkShareDesign
</div>
<div class="form-wrapper">
	<div class="form-container">
		<form method="post" action="">
			<label>Login</label>
			<input type="text" class="login" name="username" required="true" placeholder="username" />
			<input type="password" class="login" name="password" required="true" placeholder="password" />
			<input type="submit" class="login" value="submit" name="submit"/>
		</form>
	</div>
</div>
</login>
<?php include 'footer.php'; ?>