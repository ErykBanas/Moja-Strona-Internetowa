<?php
// STEP 1. Start the PHP session.
// should be the first to start, to prevent 'headers already sent' errors
session_start();
 
// STEP 2. Check if a user is NOT YET logged in by checking the session value
if(empty($_SESSION['logged_in'])){
 
    // if the session value is empty, he is not yet logged in
    // redirect him to login page
    header('Location: login.php?action=not_yet_logged_in');
}
?><!DOCTYPE HTML>

<html lang="pl">
	<head>
    	
        <META HTTP-EQUIV="Content-Type" CONTENT="text/html; charset=utf-8">
        <META NAME="Author" CONTENT="Agnieszka Breśka">
        <link rel="shortcut icon" href="AB.ico" type="image/x-icon" >
		<link type="text/css" rel="stylesheet" href="s.css" >
		<title>Breśka Agnieszka</title>
	</head>
	<FRAMESET ROWS=" 11%,*">
	       <FRAME SRC="menu3.html" SCROLLING="no">
	       <FRAME SRC="zalozenia3.html" NAME="CV" >
            <NOFRAMES>
                <BR><BR><BR>
                <CENTER><FONT SIZE=6>
                    Przykro mi...
                <BR><BR><BR>
                    <B>Twoja przeglądarka nie akceptuje ramek!</B>
                </FONT></CENTER>
            </NOFRAMES>		
    </FRAMESET>
</html>