<?php 
session_start(); 
?> 
<HTML> 
<HEAD> <META HTTP-EQUIV="Content-Type" CONTENT="text/html; charset=utf-8">
        <META NAME="Author" CONTENT="Agnieszka Breśka">
        <meta name="description" content="" />
        <meta name="keywords" content="" />
        <link rel="shortcut icon" href="AB.ico" type="image/x-icon" />
		<link type="text/css" rel="stylesheet" href="stylesheet.css"/>
            
  <TITLE>Wylogowanie</TITLE> 
</HEAD> 
<BODY> 
<?php 
  echo "Uzytkownik " . $_SESSION["logged_in"]; 
  echo " zostal wylogowany."; 
  session_destroy(); 
?> 
    <div><a href="index.php">Go to index page</a></div>
</BODY> 
</HTML> 