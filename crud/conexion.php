<?php
function conectar(){
    $host="crud-php";
    $user="root";
    $pass="root";

    $bd="crud";

    $con=new mysqli($host,$user,$pass,$bd);

    return $con;
}
?>
