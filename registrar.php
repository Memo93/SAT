<?php
$mysqli= new mysqli("localhost","memo","HoffvjNzPBsQ4TZX","sat");
//chech connection
if ($mysqli->connect_errno){
    die("Connect failed: ".$mysqli->connect_error);
}

//Insert user name and password
$name= $_GET['username'];
$password = $_GET['password'];

$sql= ($mysqli->query("INSERT INTO user (name,password) VALUES ('$name','$password')"));
$mysqli->close();


