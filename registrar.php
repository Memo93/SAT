<?php
$conexion= new mysqli("localhost","memo","HoffvjNzPBsQ4TZX","sat");
//chech connection
if ($conexion->connect_errno){
    die("Connect failed: ".$conexion->connect_error);
}

//Insert user name and password
$name= $_GET['username'];
$password = $_GET['password'];

$sql=mysqli_query($conexion,"INSERT INTO user (name,password) VALUES ('$name','$password')");
$conexion->close();


