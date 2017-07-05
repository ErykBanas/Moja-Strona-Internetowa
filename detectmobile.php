<?php
session_start();
if(empty($_SESSION['logged_in'])){
    header('Location: login.php?action=not_yet_logged_in');
}
?><!DOCTYPE HTML>
<html>
	<head lang="pl">
        <META HTTP-EQUIV="Content-Type" CONTENT="text/html; charset=utf-8">
        <META NAME="Author" CONTENT="Eryk Banaś">
        <meta name="description" content="" />
        <meta name="keywords" content="" />
		<link type="text/css" rel="stylesheet" href="stylesheet.css"/>
		<title>Banaś Eryk</title>
	</head>
	<body>
        <?php
// Zmienna sprawdzająca na jakim systemie naszą stronę odpalamy! Jak widać zapisujemy ją tu po przecinku!
$useragent=$_SERVER['HTTP_USER_AGENT'];

if(preg_match('/(android|avantgo|blackberry|bolt|boost|cricket|docomo|fone|hiptop|mini|mobi|palm|phone|pie|tablet|up\.browser|up\.link|webos|wos)/i',$useragent))

header("Location: http://volt.iem.pw.edu.pl/~banase/mobile.html");
?> 

        <p>
        This will be desktop site
        </p>
       <p> 
    <a href="http://validator.w3.org/check?uri=http%3A%2F%2Fvolt.iem.pw.edu.pl%2F~banase%2Fdetectmobile.php"><img
      src="http://www.w3.org/Icons/valid-xhtml11" alt="Valid XHTML 1.1" height="31" width="88"></a>
  </p> 
  </body>
</html>