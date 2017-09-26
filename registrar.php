<?php
$conexion= new mysqli("localhost","memo","HoffvjNzPBsQ4TZX","sat");
//chech connection
if ($conexion->connect_errno){
    die("Connect failed: ".$conexion->connect_error);
}
//Insert user name and password

$name= (isset($_POST['user_name']) ? $_POST['user_name'] : '');
$password = (isset($_POST['password']) ? $_POST['password'] : '');

echo $name;
echo $password;
$query= "INSERT INTO user (name, password) VALUES ('$name','$password')";