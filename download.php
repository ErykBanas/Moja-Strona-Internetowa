<?php
    require_once "directory.php";//$target_dir
    $fileName = basename($_GET["file"]);
    $filePath = $target_dir.$fileName;
    
    
    
    header("Content-Description: File Transfer");
    header("Content-Type: " . mime_content_type( $filePath ));//header('Content-Type: application/octet-stream');
    header('Content-Disposition: attachment; filename="'.$fileName.'"');//header('Content-Disposition: attachment; filename="'.basename($file).'"');
    header("Expires: 0");
    //header("Cache-Control: must-revalidate");
    header("Cache-Control: public");
    //header("Content-Transfer-Encoding: binary");
    header("Pragma: public");
    header("Content-Length: " . filesize($file));
    
    
    // read the file from disk
    readfile($filePath);
    //exit();
?>