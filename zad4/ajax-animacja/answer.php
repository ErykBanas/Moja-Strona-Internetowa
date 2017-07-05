<?php
    sleep(1);// 1 sekunda
    
    switch($_SERVER['REQUEST_METHOD'])
    {
        case 'GET': 
            $the_request = &$_GET;
            break;
        case 'POST': 
            $the_request = &$_POST;
            break;
        default:
            $the_request = &$_REQUEST;
            break;
    }
    
    $a = $the_request['a'];
    $b = $the_request['b'];
    
    echo $a + $b;//response
    //exit($a + $b);//not working
    //return $a + $b;//not working
?>