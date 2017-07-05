<?php
session_start();
if(empty($_SESSION['logged_in'])){
    header('Location: login.php?action=not_yet_logged_in');
}
?><!DOCTYPE HTML>
<html lang="pl">
	<head>
    	
        <META HTTP-EQUIV="Content-Type" CONTENT="text/html; charset=utf-8">
        <META NAME="Author" CONTENT="Agnieszka Breśka">
        <link rel="shortcut icon" href="AB.ico" type="image/x-icon" />
		<link type="text/css" rel="stylesheet" href="stylesheet.css"/>
        <script src="formularz.js"></script> 
        
		<title>Agnieszka Breśka</title>
	</head>
            <body>
            	<?php
            
            echo "Wypełnienie Formularza:";
            echo "<br>Imię: ";
            echo $_SESSION['name'];
            echo "<br>Nazwisko: ";
    echo    $_SESSION['surname'];
            echo "<br>Wiek: ";
        echo $_SESSION['age'] ;
            echo "<br>PESEL: ";
echo    $_SESSION['pesel'];
            echo "<br>Płeć: ";
    echo    $_SESSION['sex'];
            echo "<br>Kierunek studiów: ";
    echo    $_SESSION['studies'];
            echo "<br>Komentarz: ";
    echo    $_SESSION['comment'];
?>
            <FORM ACTION="form.php" METHOD="post" onsubmit="form.php" >
            <INPUT TYPE="submit" VALUE="Wyślij" >
                </FORM>
            <br>
            <p>
    <a href="http://validator.w3.org/check?uri=referer"><img
      src="http://www.w3.org/Icons/valid-html401" alt="Valid HTML 4.01 Strict" height="31" width="88"></a>
  </p><br>
    <div id="pi"> 
        <h4>Programowanie internetowe</h4> </div>
    </body>
</html>