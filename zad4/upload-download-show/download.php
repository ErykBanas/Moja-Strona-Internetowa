<?php
    require_once "directory.php";//$target_dir
    $fileName = basename($_GET["file"]); // Podstawowe imię, a więc to, które znajduje się najbardziej po prawej stronie między poszczególnymi ukośnikami.
    									 // Jak w przykładzie tu: http://php.net/manual/en/function.basename.php
    $filePath = $target_dir.$fileName;
    
// Poobserwowac tu jak te poszczególne zawartosci tu działają!

    header("Content-Description: File Transfer"); 	// UWAGA - header musi być wywoływany jeszcze ZANIM jakikolwiek "output" będzie wysyłany, a więc nie mogłoby

// header("Content-Description: File Transfer"); - to opisuje po prostu, co my tu z danym plikiem robimy!
    
    // być np. tagu <html> nawet rozpoczynającego dokument jakis html-owski! Najpierw php z header-em i Schluss!
    header("Content-Type: " . mime_content_type( $filePath ));//header('Content-Type: application/octet-stream');
        // W powyższy sposób opisujemy własnie typ zwracany!
    header('Content-Disposition: attachment; filename="'.$fileName.'"');//header('Content-Disposition: attachment; filename="'.basename($file).'"');
    // If you want the user to be prompted to save the data you are sending, such as a generated PDF file, you can use the » Content-Disposition header
    // to supply a recommended filename and force the browser to display the save dialog.
    header("Expires: 0");
    // PHP scripts often generate dynamic content that must not be cached by the client browser or any proxy caches between the server and the client browser. Many proxies and clients can be forced to disable caching with: 
    //header("Cache-Control: must-revalidate");
    header("Cache-Control: public");
    //header("Content-Transfer-Encoding: binary");
    header("Pragma: public");
    header("Content-Length: " . filesize($file));
        
    // read the file from disk
    readfile($filePath); // Reads a file and writes it to the output buffer.
    //exit();
?>