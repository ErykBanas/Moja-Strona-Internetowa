<!DOCTYPE HTML>
<?php
session_start();
if($_SESSION['logged_in']==true){
	header('Location: index.php?action=already_logged_in');
}
?>
<html>
<head>
        <META HTTP-EQUIV="Content-Type" CONTENT="text/html; charset=utf-8">
        <META NAME="Author" CONTENT="Eryk Banaś">
        <meta name="description" content="" />
        <meta name="keywords" content="" />
        <link rel="shortcut icon" href="AB.ico" type="image/x-icon" />
		<link type="text/css" rel="stylesheet" href="stylesheet.css"/>
<TITLE>Logowanie</TITLE>
</head>
<body>

	<div id="loginForm">

	<?php
	if($_GET['action']=='not_yet_logged_in'){
		echo "<div id='infoMesssage'>You cannot go to the index page because you are not yet logged in.</div>";
	}
	if($_POST){
		$username = 'student';
		$password = 'zet';
		if($_POST['username']==$username && $_POST['password']==$password){
			$_SESSION['logged_in'] = true;
			header('Location: index.php');
		}else{
			echo "<div id='failedMessage'>Access denied. :(</div>";
		}
	}
	?>

		<!-- where the user will enter his username and password -->
		<form action="login.php" method="post">

			<div id="formHeader">Login Form</div>

			<div id="formBody">
				<div class="formField">
					<input type="text" name="username" placeholder="Username" />
				</div>

				<div class="formField">
					<input type="password" name="password" placeholder="Password" />
				</div>

				<div>
					<input type="submit" value="Login" class="customButton" />
				</div>
			</div>

			<div id="userNotes">
				<div>Username: student</div>
				<div>Password: zet</div>
				<div>
					<a href="index.php">Go to index page</a>
				</div>
			</div>
		</form>

	</div>

</body>
</html>
