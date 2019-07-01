<?php

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="">

	<title>Black Sheep</title>

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/normalize.css">
	<link rel="stylesheet" type="text/css" href="css/styles.css">
</head>
<body>
	<div class="container">
		<header class="row">
			<div class="col">
				<h1>Black Sheep</h1>
			</div>
			<div id="profile" class="col-3 text-center">
				<p><span class="user"><?php echo htmlspecialchars($_SESSION["username"]); ?></span></p>
			</div>
			<!-- <div id="login-area" class="col">
				<input type="text" placeholder="Username" name="username"></input>
				<input type="password" placeholder="Password" name="password"></input>
				<input type="button" value="Login" name="login"></input>
			</div> -->
		</header>
		<main class="row">
			<div id="feed" class="col text-center">
				<h3>Feed</h3>
				<div class="post">
					<p><span class="user"><!-- USER --></span> posted:</p>
					<p class="content"><!-- CONTENT --></p>
				</div>
			</div>
			<div id="inbox" class="coltext-center">
				<h3>Inbox</h3>
				<div class="notification">
					<p class="title"><span class="user"><!-- USER --></span> messaged:</p>
					<p class="message"><!-- MESSAGE --></p>
				</div>
			</div>
		</main>
		<footer class="row">
			<div class="col">
				<a href="/public/html/contact.html">Contact</a>
				<a href="/public/html/about.html">About</a>
			</div>
		</footer>
	</div>
</body>
</html>