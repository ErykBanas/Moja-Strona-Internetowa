<?php
// Array with names
//$names[] = "Anna";
//$names[] = "Brittany";
//$names[] = "Cinderella";
//$names[] = "Diana";
//$names[] = "Eva";
//$names[] = "Fiona";
//$names[] = "Gunda";
//$names[] = "Hege";
//$names[] = "Inga";
//$names[] = "Johanna";
//$names[] = "Kitty";
//$names[] = "Linda";
//$names[] = "Nina";
//$names[] = "Ophelia";
//$names[] = "Petunia";
//$names[] = "Amanda";
//$names[] = "Raquel";
//$names[] = "Cindy";
//$names[] = "Doris";
//$names[] = "Eve";
//$names[] = "Evita";
//$names[] = "Sunniva";
//$names[] = "Tove";
//$names[] = "Unni";
//$names[] = "Violet";
//$names[] = "Liza";
//$names[] = "Elizabeth";
//$names[] = "Ellen";
//$names[] = "Wenche";
//$names[] = "Vicky";

require_once 'names.php';//array of names

$q = $_GET['q'];

$hint = "";
 
if ($q !== "") {
    $q = strtolower($q);
    $len=strlen($q);
    foreach($names as $name) {
        if (stristr($q, substr($name, 0, $len))) {
            if ($hint === "") {
                $hint = $name;
            } else {
                $hint .= ", $name";
            }
        }
    }
}

echo $hint === "" ? "brak sugestii" : $hint;

?>