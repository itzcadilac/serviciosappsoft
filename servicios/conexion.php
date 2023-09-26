<?php
$hostname='localhost';
$database='novoex_app';
$username='novoex_app';
$password='jhan1632.';

$conexion=new mysqli($hostname,$username,$password,$database);
if($conexion->connect_errno){
    echo "El sitio web está experimentado problemas";
}
?>