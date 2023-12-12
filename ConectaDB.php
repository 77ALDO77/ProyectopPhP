<?php
function getConexion(){
    $hostname = "127.0.0.1";
    $username = "root";
    $password = ""; 
    $database ="technogame"; 
    $port="3306";
    $cn = mysqli_connect($hostname,$username,$password,$database,$port)or die("Error al conectar");
    return $cn;
}
?>