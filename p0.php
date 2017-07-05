<?php
// STEP 1. Start the PHP session.
// should be the first to start, to prevent 'headers already sent' errors
session_start();
 
// STEP 2. Check if a user is NOT YET logged in by checking the session value
// Zatem jeśli zmienna w "empty" istnieje, to "empty" zwraca FALSE i przez to nie wchodzimy do if-a!
if(empty($_SESSION['logged_in'])){
 
    // if the session value is empty, he is not yet logged in
    // redirect him to login page
    // A co najlepsze nie wychodzimy przy tym ze strony host-a!
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
		<title>Banaś Eryk</title>
	</head>
	<body>
        <h1 id="meet">Witaj</h1>
        <br>
    <h2>Nazywam się <i>Eryk Banaś</i> i studiuję Informatykę na wydziale Elektrycznym Politechniki Warszawskiej.</h2>
        <br>
        <ol>
       <li> <h3>Moje ulubione marki samochodów:</h3>
        <UL class="lista">
            <LI>Audi</LI>
            <LI>BMW</LI>
            <LI>Koenigsegg</LI>
        </UL></li>
        <li><h3>Natomiast mój ulubiony model? - Audi RS6-R ABT</h3>
        <!-- http://www.car-logos.net/wp-content/uploads/2013/11/ABT_Spotrsline.jpg 
        https://signup.leagueoflegends.com/theme/signup_theme/img/signup_logo2_clean.png
        Mogę dodać w sumie też logo z dysku twardego!
        -->
    <a id="lol" target="_blank" title="Oficjalna Strona ABT" href="http://www.abt-sportsline.de/"><img src="ABT-Logo.png"/></a>
        <h4>So... what's that?</h4>
    
  
        <p class="tekst">When you read 730 hp/537 kW, you may first think of an Italian super-sports-car or a big truck but not of a roadworthy family or business estate. But ABT Sportsline is still able to surprise its target group and at the Geneva Motor Show 2014 will present its latest Audi RS6 model, the 320 kph ABT RS6-R. “Mind you, the R stands for racy, not for rough or rude,” says CEO Hans-Jürgen Abt: “As with the normal Audi RS6, ours also provides the utmost comfort, sumptuousness and usefulness, limited to 25 cars worldwide.“
        </p>      
		<p class="tekst"> To turn this high-performance car into a refined gem, ABT uses ABT Power. This kit includes the ABT Engine Control unit, a specially developed software and a specially adapted stainless steel exhaust system – that makes for a superb sound and an even more attractive look with its two double end pipes.
        </p>
        <p class="tekst">But power isn’t everything. In order to make the Avant even more of a sports car, the engineers used an ABT height adjustable spring kit. Dunlop high-performance tyres specially selected for the RS6-R complete this dynamic set-up. This inviting features may make it hard for some people to accept that this racy ABT in Geneva can only be viewed while it is standing still. But that may be just as well, because it makes for a better appreciation of the extensive body kit and the lavish 22-inch ABT DR alloy wheels. Selected parts made of exposed red carbon is what all body components have in common: they can be found on the front lip with its blades, air inlet covers including flics, side skirt attachments with side blades and the rear skirt. Mirror caps, fender inserts and a rear spoiler complete the imposing look.  
        </p>
        <p class="tekst">And since passengers would find it difficult to see their car in the rear-view mirror, ABT also “decorated” the interior with letterings and embroidery that are as discreet as they are tasteful. Carbon-shift paddels and LED-shifting lights on the steering wheel help finding the perfect gear shift moment.
		</p>
    </li>
    </ol>
    <br>
    <MARQUEE LOOP="5" BEHAVIOR="slide">
        <img src="slide_RS6R.png" alt="tu powninien być obrazek ale twoja przeglądarka ich nie obsługuje :("/>
    </MARQUEE>
        <br><br>
        <FIELDSET>
            <LEGEND>Źródło:</LEGEND>
            <a target="_blank" href="http://www.abt-performance.de/RS6-R/en/"><img src="logo.png" alt="abt-performance.de"/></a>
        </FIELDSET>
<br>
        </body>
    
</html>
    