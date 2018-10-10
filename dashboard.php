<?php include 'header.php';
include 'database/loggedin_status.php';
include 'database/get_user_posts.php'; ?>
<div class="profile">
	<div class="profile_name">
		<img class="pic" src="<?php echo $_SESSION["propic_url"]; ?>"/>
		<text><?php echo $_SESSION["username"]; ?></text>
	</div>
	<?php 
	foreach ($rows as $key => $value) {
		echo '<div class="post">'
		. $value .
		'</div>';
	}
	?>
</div>
<?php include 'footer.php'; ?>