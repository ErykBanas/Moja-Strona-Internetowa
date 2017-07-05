<!DOCTYPE HTML>
<?php
session_start();
if(empty($_SESSION['logged_in'])){
    header('Location: login.php?action=not_yet_logged_in');
}
if($_GET){  
       $_SESSION['name'] = $_GET['Imie'];
        $_SESSION['surname'] = $_GET['nazwisko'];
        $_SESSION['age'] = $_GET['Wiek'];
        $_SESSION['pesel'] = $_GET['pesel'];
        $_SESSION['sex'] = $_GET['plec'];
        $_SESSION['studies'] = $_GET['studia'];
        $_SESSION['comment'] = $_GET['kom'];

    }
?>
<html lang="pl">
	<head>
    	
        <META HTTP-EQUIV="Content-Type" CONTENT="text/html; charset=utf-8">
        <META NAME="Author" CONTENT="Eryk Banaś">
        <meta name="description" content="" />
        <meta name="keywords" content="" />
        <link rel="shortcut icon" href="AB.ico" type="image/x-icon" />
		<link type="text/css" rel="stylesheet" href="stylesheet.css"/>
        <script src="formularz.js"></script> 
        
		<title>Eryk Banaś</title>
	</head>
	<body id="formularz">
                    
<FORM ACTION="formularz.php" METHOD="get" name="Form1"  ENCTYPE="text/plain" onreset="if (!confirm('Czy na pewno chcesz wyczyścić cały formularz?')) return false" onsubmit="if (sprawdz(this)) return true; return false" >
         <br>
    
    
    Podaj swoje imię: <br>
    <input type="text" maxlength="50" class="SzerokoscNormal" name="Imie" onkeypress="return blockNumbers(event);">(obowiązkowe)	
    <BR><br>
        
        
Podaj swoje nazwisko: <br>
    <INPUT TYPE="text" NAME="nazwisko" onkeypress="return blockNumbers(event);">(obowiązkowe)<BR><br>
        
        

Wprowadź swoją datę urodzenia: <br>
      <input onchange="aktualizacjaWieku()" type="date" name="bday"> (obowiązkowe)<br><br>
Wiek:<br>
        <input type="text" name="Wiek" readonly class="readonly" value="0" style="width:50px">	
        <br><br>
        
 Podaj swój PESEL: <br>
  <INPUT TYPE="text" NAME="pesel" onkeyup="javascript:MaxiRozmiar(11)" onkeypress="javascript:MaxiRozmiar(11); return blockText(event, this);"> <input type=text readonly style="WIDTH: 30px" name="PozostaloLiczb" value="11">(obowiązkowe)
      <br><br>
               
Płeć:<br>
         <SELECT NAME="plec">
                <OPTION>Kobieta
                <OPTION>Męczyzna
        </SELECT>
              <br><br>
        
                    
Na jakim kierunku studiujesz?<br>
            <INPUT TYPE="radio" NAME="studia" VALUE="informatyka">Informatyka<br>
            <INPUT TYPE="radio" NAME="studia" VALUE="elektronika">Elektrotechnika<br>
            <INPUT TYPE="radio" NAME="studia" VALUE="automatyka&robotyka">Automatyka i robotyka<br><br>
   
                
Napisz jakiś komentarz o mojej stronie! <br>   
        <TEXTAREA NAME="kom" COLS="40" ROWS="5" onkeyup="javascript:MaxRozmiar(200)" onkeypress="javascript:MaxRozmiar(200)">             </TEXTAREA><input type=text readonly style="WIDTH: 30px" name="PozostaloZnakow" value="200">
            <br><br>
    

Wyśij mi jakiś plik! (obowiązkowe)
            <br>
        <INPUT TYPE="file" id="file" name="file" accept=".jpg,.tif,.png,.jpeg" > 
            <br><br>
                        
                
Czy zgadzasz się na przetwarzanie danych?<br>
                          
        <INPUT onclick="aktualizacjaWieku()" TYPE="checkbox" NAME="zgoda" VALUE="tak"  CHECKED >Wyrażam zgodę               <br/>
            <br/>
              <br>
            
        <INPUT TYPE="submit" VALUE="Wyślij" >
        <BUTTON TYPE="reset">Wyczyść formularz</BUTTON>
</FORM>
           <br><br>            
            

	<div id="form_container" class="form_container">
        <form name='generator'>
            <input type="text" name="amount" value="4" style="WIDTH: 30px">
          <input type="button" class='button' value="Generuj" onClick="createTable(document.generator.amount.value)">
        </form>
    </div>
            <br>
        <p>
    <a href="http://validator.w3.org/check?uri=referer"><img
      src="http://www.w3.org/Icons/valid-html401" alt="Valid HTML 4.01 Strict" height="31" width="88"></a>
  </p><br>
    <div id="pi"> 
        <h4>Programowanie internetowe</h4> </div>
    </body>
</html>