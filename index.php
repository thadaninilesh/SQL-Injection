<html>
<head>
<link rel="stylesheet" type="text/css" href="css/normalize.css">
<link rel="stylesheet" type="text/css" href="css/foundation.css">
<title>SQL Injection and Prevention</title>
</head>
<body style="font-family: Georgia">
	<br>
	<div class="row">
		<h1 style="text-align:center">SQL Injection</h1>
		<hr>
		<?php
		if(isset($_GET['msg']) && !empty($_GET['msg'])) { ?>
			<div style="padding: 10px; margin: 5px; background: #0cd9ff; color: #0079c1; border-radius: 10px"><strong><?php echo $_GET['msg']; ?></strong></div>
		<?php }
		?>

		<div class="large-6 columns">
			<form action="validate.php" method="POST">
				<div class="row">
					<h2 class="subheader">Register</h2>
					<hr>
				</div>
				<div class="row">
					<div class="large-12 columns">
						<label>Name
							<input type="text" placeholder="Enter Full Name" name="name" id="name" autocomplete="off"/>
						</label>
					</div>
				</div>

				<div class="row">
					<div class="large-12 columns">
						<label>Username
							<input type="text" placeholder="Enter username" name="username" id="username" autocomplete="off"/>
						</label>
					</div>
				</div>


				<div class="row">
					<div class="large-12 columns">
						<label>Password
							<input type="password" placeholder="Enter Password" name="password" id="password" autocomplete="off"/>
						</label>
					</div>
				</div>


				<div class="row">
					<div class="large-12 columns">
						<button type="submit" value="Register" name="submit" class="button expand">Register</button>
					</div>
				</div>
			</form>
		</div>
		<div class="large-6 columns">
			<form action="validate.php" method="POST">
				<div class="row">
					<h2 class="subheader">Login</h2>
					<hr>
				</div>
				<div class="row">
					<div class="large-12 columns">
						<label>Username
							<input type="text" placeholder="Enter your Username" name="username" id="username" autocomplete="off"/>
						</label>
					</div>
				</div>
				<div class="row">
					<div class="large-12 columns">
						<label>Password
							<input type="password" placeholder="Enter your password" name="password" id="password" autocomplete="off"/>
						</label>
					</div>
				</div>
				<div class="row">
					<div class="large-12 columns">
						<button type="submit" value="Login" name="submit" class="button success expand">Login</a>
					</div>
				</div>
			</form>
		</div>
	</div>
</body>
</html>
