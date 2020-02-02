<?php
define('dbserver','localhost');
define('dbname','hackthon');
define('dbuser','root');
define('dbpassword','');

function connect_db(){

    $conn = new mysqli(dbserver,dbuser , dbpassword,dbname) ;
    if($conn->connect_error){

       die('<h1 style="color:red;text-align:center;margin-top:50px;"><p style="display:inline-block;border:2px dashed red;padding:15px; ">Database Connection Failed !!!</p></h1>');
    }
    else{
        return $conn;
    }
}
$con=connect_db();

?>