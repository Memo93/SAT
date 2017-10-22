<html>
<head>
    <title>Sistema de Administración de Se Mamo</title>
</head>
<body bgcolor="white">
<?php
if ($_SERVER["REQUEST_METHOD"]=='POST'){
    $name=$_POST['name'];
    $fullname=$_POST['fullname'];
    $email=$_POST['email'];
    $username=$_POST['username'];
    $pass=$_POST['password'];

    if (!empty($name) and !empty($fullname) and !empty($email) and !empty($user_name) and !empty($password)) {

        $mysqli = new mysqli("localhost", "memo", "HoffvjNzPBsQ4TZX", "sat");

        $query = "INSERT INTO user (name, full_name, email, user_name, password) VALUES ('$name','$fullname','$email','$username','$pass')";

        $mysqli->query($query);
        printf("New user id is %d.", $mysqli->insert_id);
    } else{
        echo "Error formulario incompleto";
    }

}
?>
<form action="<?php echo $_SERVER['PHP_SELF'];?>" method="POST">
    Name:<input type="text" placeholder="Name"name="name"/><br>
    <br> Full Name:<input type="text" placeholder="Full Name" name="fullname"/><br>
    <br> Email: <input type="text" placeholder="Email"name="email"/><br>
    <br> User Name: <input type="text" placeholder="User Name"name="username"/><br>
    <br> Password: <input type="password" placeholder="Password" name="password"/><br>
    <br><input  type="submit" value="Create"/>
</form>
</body>
</html>