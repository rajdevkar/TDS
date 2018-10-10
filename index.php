<?php include 'header.php';
include'navbar.php';
include 'database/get_posts.php'; ?>
<div class="main-content">
	<div class="outer-wrapper">
		<div class="inner-wrapper">
			<div class="site-description">
				<div class="title">
					ThinkShareDesign
				</div>
			</div>
		</div>
	</div>
	<div class="posts-container">
		<?php 
		foreach ($rows as $key => $value) {
			echo '<div class="post">'
			. $value .
			'</div>';
		}
		?>
	</div>
</div>
<?php include 'footer.php';  ?>