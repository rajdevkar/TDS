<?php include'imports.php'; ?>
<?php include 'session.php'; ?>
<header>
	<div class="outer-wrapper">
		<div class="inner-wrapper">
			<text class="title"><a href="index">TDS</a></text>
			<div class="search-wrapper">
				<form id="search">
					<input id="field" onfocus="clicked()" onblur="normal()" type="text" placeholder="Dive In.." autocomplete="off" />
					<img onclick="clicked()" id="icon" src="imgs/search_icon.svg">
				</form>
			</div>
			<div class="header-btns">
				<ul>
					<?php
						if($logged_in){
							echo "<li><a href='logout.php'>Logout</a></li>";
						} else{
							echo "<li><a href='login.php'>Login</a></li>";
						}
					?>
				</ul>
			</div>
		</div>
	</div>
</header>