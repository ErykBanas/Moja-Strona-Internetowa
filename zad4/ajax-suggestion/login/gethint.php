<?php

require_once './users.php';//array of users (users[]), note: user is an object

$q = $_GET['q'];

$matches = array();
 
if ($q !== "") {
    $q = strtolower($q);
    $len=strlen($q);
    foreach($users as $user) {
//        if (stristr($q, substr($user->login, 0, $len))) {
//            $matches[] = $user;
//        }
        if (stripos($user->login, $q) === 0) {
            $matches[] = $user;
        }
    }
}

echo json_encode($matches);

?>