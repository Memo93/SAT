<?php
$mysqli= new mysqli("localhost","memo","HoffvjNzPBsQ4TZX","sat");
//chech connection
if ($mysqli->connect_errno){
    die("Connect failed: ".$mysqli->connect_error);
}

//Insert user name and password
$name= $_GET['name'];
$fullname = $_GET['fullname'];
$email= $_GET['email'];
$user_name= $_GET['username'];
$password = $_GET['password'];

if(empty($name) and empty($fullname)and empty($email)and empty($email)and empty($user_name)and empty($password)){
    trigger_error("It's necessary to insert the name, the full name, the email, the user name and the password");}

else{
        $sql= $mysqli->query("INSERT INTO user (name,password) VALUES ('$name','$password')");
        printf("New user id is %d.",$mysqli->insert_id);
}





