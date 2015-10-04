<html>
	<head>
		<link rel="stylesheet" type="text/css" href="css/normalize.css">
		<link rel="stylesheet" type="text/css" href="css/foundation.css">
		<title>SQL Injection and Prevention</title>
	</head>
<body>
<div class="row">
<div class="large-12 columns">
<h1>SQL Injection</h1>
<hr>
<?php
require_once('connect.php');


if($_POST['submit']=='Login'){
	//this line can cause sql injection
	$username = $_POST['username'];

	// this is to prevent sql injection
	//$username = mysql_real_escape_string($_POST['username']);
	$password = hash('SHA512',$_POST['password']);

	$query = "SELECT * FROM users WHERE password='$password' AND username='$username'";


	$sql = mysql_query($query);
	$rows = mysql_num_rows($sql);
	$temp=0;
	if($rows>=1){
		session_start();
		while($details = mysql_fetch_array($sql)){
			?>
			<h5><?php echo "<strong>UserID</strong>: ".$details[0]."<br>";?></h5>
			<h5><?php echo "<strong>Name</strong>: ".$details[1]."<br>";?></h5>
			<h5><?php echo "<strong>Username</strong>: ".$details[2]."<br>";?></h5>
			<hr>
			<?php
			$temp = $temp+1;
		}
		if($temp>1){
			?><h3 style="color:red"><strong><?php echo "SQL Injection Occured";?></strong></h3><?php
		}
		else if($temp==1){
			?><h3 style="color:green"><strong><?php echo "No SQL Injection Occured";?></strong></h3><?php
		}
	}
	else{
		echo "Please use valid credentials";
	}
}
if($_POST['submit']=='Register'){
	$name = $_POST['name'];
	$username = $_POST['username'];
	$password = hash('SHA512',$_POST['password']);
	$query = "INSERT INTO users(name,password,username) VALUES('$name','$password','$username')";
	$sql = mysql_query($query);
	$msg = "Registration Successful!";
	header("Location: index.php?msg=$msg");
}

?>
<a href="logout.php" class="button info">Logout and Try Again</a>
</div>
</body>
</html>
