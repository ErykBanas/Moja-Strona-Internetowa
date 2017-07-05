<?php
require_once 'Osoba.php';
require_once 'Student.php';
?>
<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8" />
    <meta name="author" content="Eryk Banas" />
    <meta name="description" content="Programowanie internetowe -- Eryk Banas" />
    <meta name="keywords" content="Programowanie internetowe" />
    <title>object-oriented | Programowanie Internetow Lab | Eryk Banas</title>
    <link rel="stylesheet" type="text/css" href="mainStyle.css" />
    <link rel="stylesheet" type="text/css" href="purecss/forms.css" /><!-- purecss.io -->
    <link rel="stylesheet" type="text/css" href="purecss/buttons.css" /><!-- purecss.io -->
    <link rel="stylesheet" type="text/css" href="purecss/tables.css" /><!-- purecss.io -->
</head>
<body>
    <div id="wrapper">
        <header class="textAlignCenter">
            <h1>Programowanie Internetowe</h1>
        </header>
        <section>
            <h2>object-oriented</h2>
            <article class="border-1px-solid-black padding-1em">
                <section>
                    <h2>Tworzenie obiektów</h2>
                    <p>
                        <?php
                            $osoba = new Osoba( "Jan", "Kowalski", "12345678901"); // Tworzenie nowego obiektu typu Osoba.
                        ?>
                    </p>
                    <!--<h4>Student</h4>-->
                    <p>
                        <?php
                            $student = new Student( "Andrzej", "Nowak", "64128256512", 4.5); // Tworzenie nowego studenta razem ze średnią.
                        ?>
                    </p>
                </section>
                <section>
                    <h2>Metoda printMe()</h2>
                    <p><?php $osoba->printMe(); ?></p>
                    <p><?php $student->printMe(); ?></p>
                </section>
                <section>
                    <h2>print_r()</h2>
                    <p>
                        <?php
                            echo "<pre>";
                            print_r($osoba); // Prints human-readable information about a variable.
                            echo "</pre>";
                            //echo "<pre>";
                            //var_dump($osoba);
                            //echo "</pre>";
                        ?>
                    </p>
                    <p>
                        <?php 
                            echo "<pre>";
                            print_r($student); 
                            echo "</pre>";
                            //echo "<pre>";
                            //var_dump($student); 
                            //echo "</pre>";
                        ?>
                    </p>
                </section>
                <section>
                    <h2>Serializacja</h2>
                    <p>
                        <?php 
                            $osoba_serialized = serialize($osoba); // Generuje przechowywalną reprezentację wartości! Dzięki temu możemy przechowywać i przekazywać wartości PHP nie tracąc ich typu i struktury!
                            echo $osoba_serialized;
                        ?>
                    </p>
                    <p>
                        <?php 
                            $student_serialized = serialize($student);
                            echo $student_serialized;
                        ?>
                    </p>
                </section>
                <section>
                    <h2>Deserializacja</h2>
                    <p>
                        <?php 
                            $new_osoba = unserialize($osoba_serialized); // W tym momencie zamieniamy znów zserializowany string na wartość PHP!
                            echo "<pre>";
                            print_r($new_osoba);
                            echo "</pre>";
                            $new_osoba = null;
                        ?>
                    </p>
                    <p>
                        <?php 
                            $new_student = unserialize($student_serialized);
                            echo "<pre>";
                            print_r($new_student);
                            echo "</pre>";
                            $new_student = null;
                        ?>
                    </p>
                </section>
                <section>
                    <h2>Destrukcja</h2>
                    <p>
                        <?php 
                            $osoba = null; // Zerujemy tu wcześniej przypisywane zmienne!
                        ?>
                    </p>
                    <p>
                        <?php 
                            $student = null;
                        ?>
                    </p>
                </section>
            </article>
        </section>
        <footer class="textAlignCenter">
            <p>
                Copyright &copy; Eryk Banas &bull; Strona wykonana wramach zajęć: Programowanie internetowe.
            </p>
            <p>
                <a href="http://validator.w3.org/check?uri=referer" target="_blank">
                    <img src="http://www.w3.org/Icons/w3c_home.png" 
                         alt="Valid HTML 5"  
                         height="31" width="88" />
                </a>
                <a href="http://jigsaw.w3.org/css-validator/check/referer" target="_blank">
                    <img style="border:0;width:88px;height:31px"
                         src="http://jigsaw.w3.org/css-validator/images/vcss"
                         alt="Poprawny CSS!" />
                </a>
            </p>
            <p>
                <a href="javascript:void(0)" 
                   onclick="window.open( 'view-source:' + location.href )" 
                   title="Źródło HTML" >Źródło HTML</a>
                <a href="javascript:void(0)" 
                   onclick="window.open( 'view-source:' + location.href.substring(0, location.href.lastIndexOf('/zad4/')) + '/mainStyle.css' )" 
                   title="Styl głowny" >Źródło CSS</a>
                <a href="javascript:void(0)" 
                   onclick="window.open( 'view-source:' + location.href.substring(0, location.href.lastIndexOf('/zad4/')) + '/purecss/forms.css' )" 
                   title="Styl formularzy (forms)" >Źródło CSS</a>
                <a href="javascript:void(0)" 
                   onclick="window.open( 'view-source:' + location.href.substring(0, location.href.lastIndexOf('/zad4/')) + '/purecss/buttons.css' )"
                   title="Styl przycisków (buttons)">Źródło CSS</a>
            </p>
        </footer>
    </div>
</body>
</html>