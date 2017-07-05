<?php

require_once "directory.php";//$target_dir

function moveUploadedFileTmp( $fileToUpload ) {
    global $target_dir;
    $target_file = $target_dir . basename( $_FILES[ $fileToUpload ]["name"] );
    if (move_uploaded_file( $_FILES[ $fileToUpload ]["tmp_name"], $target_file )) {
    								   // Przenosi upload-owany plik i zapisuje go w jako $target_file (którego odpowiednia definicja była już wcześniej
    								   // sprecyzowana - powyżej) Nie ważne, skąd te "name" i "tmp_name" się tu pobrały :P
        chmod ( $target_file , 0777 ); // Plik zapisany w katalogu z tymczasowymi uprawnieniami 777! Zatem funkcja ta zmienia "tryb", inaczej uprawnienia
        							   // na 777!
        echo "<br>The file ". basename( $_FILES[ $fileToUpload ]["name"]). " has been uploaded.";
    } else {
        echo "<br>Sorry, there was an error uploading your file.";
    }
}

if (isset($_POST["submit"])) {
	// isset — Determine if a variable is set and is not NULL
    if ( isset($_FILES["fileToUpload_1"]) && $_FILES["fileToUpload_1"]["size"] != 0 ) { // Sprawdzanie, czy rozmiar pobieranego pliku jest niezerowy!
    																					// oraz czy wybralismy w ogóle jakis plik do załadowania!
        moveUploadedFileTmp("fileToUpload_1");
    }
    if ( isset($_FILES["fileToUpload_2"]) && $_FILES["fileToUpload_2"]["size"] != 0 ) {
        moveUploadedFileTmp("fileToUpload_2");
    }
    if ( isset($_FILES["fileToUpload_3"]) && $_FILES["fileToUpload_3"]["size"] != 0 ) {
        moveUploadedFileTmp("fileToUpload_3");
    }
}

header('Location: index.php');

?>