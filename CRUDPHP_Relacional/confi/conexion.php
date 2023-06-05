<?php


$host = "localhost";
$user = "root";
$pass = "";
$db ="recordatorio";

$conexion = new mysqli($host,$user,$db);

if (!$conexion){
    echo 'Conexion Fallida';
}