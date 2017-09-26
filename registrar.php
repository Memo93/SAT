<?php
$mysqli= new mysqli("localhost","memo","HoffvjNzPBsQ4TZX","sat");
//chech connection
if ($mysqli->connect_errno){
    die("Connect failed: ".$mysqli->connect_error);
}
//Insert user name and password
/*$name= mysqli_real_escape_string($link,$_POST['name']);
$password=mysqli_real_escape_string($link,$_POST['password']);
*/
//mysqli_query("INSERT INTO user(name,password) values ('Guillermo','123')");
$sql="INSERT INTO USER (USERID,NAME, PASSWORD) VALUES (
    '1',
    '$_POST[name]',
    '$_POST[password]',
    )";

/*if(mysqli_query($link, $sql)){
    echo "Records added successfuly.";
} else{
    echo "ERROR: Could not able to execute $sql.".mysqli_error($link);
}*/