<html>

<title>Menú</title>
<style>
h1{
color:dodgerblue;
font-family: "Times New Roman";
font-style: inherit;
font-size: 250%;
}

h2{
color: brown;
font-family: "Times New Roman";
font-style: inherit;
font-size: 100%;
}
</style>

<form action="create_user.php" method="get">
<h2>
<label>Name</label><br>
<input type="text"  placeholder="Name" name="name"/><br>
<br><label>Full Name</label><br>
<input type="text"  placeholder="Full Name" name="fullname"/><br>
<br><label>Email</label><br>
<input type="text"  placeholder="Email" name="email"/><br>
<br><label>User Name</label><br>
<input type="text" placeholder="User Name" name="username"><br>
<br><label>Password</label><br>
<input type="password" placeholder="Password" name="password"><br>
<br><input type="submit" value="Submite"/>
</h2>
</form>
</html>

<?php
$mysqli= new mysqli("localhost","memo","HoffvjNzPBsQ4TZX","sat");
//chech connection

if ($mysqli->connect_errno){
    die("Connect failed: ".$mysqli->connect_error);
}

$name=$_POST['name'];

$sql= $mysqli->query("INSERT INTO user (name,full_name,email,user_name,password) VALUES ('$name','$fullname','$email','$user_name', '$password')");
printf("New user id is %d.",$mysqli->insert_id);

//Insert user name and password
/*if(empty($name) and empty($fullname)and empty($email)and empty($email)and empty($user_name)and empty($password)){
    trigger_error("It's necessary to insert the name, the full name, the email, the user name and the password");}

else{
        $sql= $mysqli->query("INSERT INTO user (name,full_name,email,user_name,password) VALUES ('$name','$fullname','$email','$user_name', '$password')");
        printf("New user id is %d.",$mysqli->insert_id);
}*/





