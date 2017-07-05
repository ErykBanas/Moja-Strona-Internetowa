<!DOCTYPE html>
<?php
session_start();
if(empty($_SESSION['logged_in'])){
    header('Location: login.php?action=not_yet_logged_in');
}
?>

<html lang="pl">
	<head>
    	
        <META HTTP-EQUIV="Content-Type" CONTENT="text/html; charset=utf-8">
        <META NAME="Author" CONTENT="Eryk Banaś">
        <meta name="description" content="" />
        <meta name="keywords" content="" />
		<link type="text/css" rel="stylesheet" href="stylesheet.css"/>
		<title>Eryk Banaś</title>
	</head>
	<body>
          <div id="header">
        
          <h1 id="name">Eryk Banaś <img src="piorun.png" alt="" width="55" height="55"/></h1>
            <div id="nav">
            		
			<ul class="menu">
				<li class="menu"><a target="ramka" href="p0.php">Home page</a></li>
				<li class="menu"><a target="ramka" href="p1.php">Project 1</a></li>
				<li class="menu"><a target="ramka" href="p2.php">Project 2</a></li>
				<li class="menu"><a target="ramka" href="p3.php">Project 3</a></li>
				<li class="menu"><a target="ramka" href="p4.html">Project 4</a></li>
				<li class="menu"><a target="ramka" href="p5.php">Project 5</a></li>
				<li class="menu"><a target="ramka" href="contact.html">Contact</a></li>
			</ul>
            </div>
        </div>
        
        
        <div class="left" ></div>
        
        
        <IFRAME id="ramka" SRC="p0.php" NAME="ramka" >Twoja przeglądarka nie akceptuje ramek! Moja główna strona: "volt.iem.pw.edu.pl/~banase/p0.html" lub projekt nr1: "volt.iem.pw.edu.pl/~banase/p1.html"
        
        </IFRAME>
        
        
        <div class="right"><div id="valid">
           <!-- <img id="h5c3" src="http://www.darrenrector.com/wp-content/uploads/2015/07/html5-css3.png" alt="logo HTML 5">-->
            <img id="h5c3" src="html5css3.png" alt="logo HTML 5">
            <br>
    <a href="http://jigsaw.w3.org/css-validator/check/referer">
        <img class = "w3c" style="border:0;width:88px;height:31px"
            src="http://jigsaw.w3.org/css-validator/images/vcss"
            alt="Poprawny CSS!" />
    </a><br>
        <a href="http://jigsaw.w3.org/css-validator/check/referer">
    <img class = "w3c" style="border:0;width:88px;height:31px"
        src="http://jigsaw.w3.org/css-validator/images/vcss-blue"
        alt="Poprawny CSS!" />
    </a>
            <br>
            <a target="_blank"  href="https://github.com/ErykBanas/BOOM">
        <img id="git" src="Gh.png"
            alt="Link do mojego GitHub!" /><br>View the source at GitHub!
    </a>
            <a>
    <a href="http://validator.w3.org/check?uri=referer"><img
      src="http://www.w3.org/Icons/valid-html401" alt="Valid HTML 4.01 Strict" height="31" width="88"></a>
  </a>
            <!--http://coderion.pl/img/html5css3.png-->
</div></div>

        <div id="footer">
            
            
            
        <h4>All rights reserved. Copyright 2016 by Eryk Banaś</h4> </div>

	</body>
</html>
