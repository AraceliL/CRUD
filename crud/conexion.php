<?php
function conectar(){
    $host="localhost";
    $user="root";
    $pass="root";

    $bd="crud";

    $con=new mysqli($host,$user,$pass,$bd);

    return $con;
}
?>
