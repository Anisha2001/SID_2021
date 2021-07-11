<?php

// Defining the constants

define("DB_NAME","registereddata");
define("DB_USER","root");
define("DB_PASSWORD","");
define("DB_HOST","localhost");


try {
    //connection variable...
    $con = new mysqli(DB_HOST,:DB_USER,DB_PASSWORD,DB_NAME);
    //encoded language
    mysqli_set_charset($con, charset:"UTF-8")
} catch (Exception $ex) {
    print"An exception occured. Message",$ex->getMessage();    
}catch(Error $ex){
    print"System is busy. Please try later.";
}
