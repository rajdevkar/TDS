<?php include 'imports.php';
include 'database/logfun.php'; ?>
<div class="form-wrapper">
	<div class="form-container">
		<form method="post" action="">
			<label>LOGIN</label>
			<input type="text" name="username" required="true" placeholder="username" />
			<input type="password" name="password" required="true" placeholder="password" />
			<input type="submit" value="submit" name="submit"/>
		</form>
	</div>
</div>
<?php include 'footer.php'; ?>