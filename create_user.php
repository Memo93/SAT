<?php
$mysqli= new mysqli("localhost","memo","HoffvjNzPBsQ4TZX","sat");

//chech connection
if ($mysqli->connect_errno){
    die("Connect failed: ".$mysqli->connect_error);
}?>

<?php
/*if(empty($_POST)){*/?>
<!DOCTYPE html>
<html>
<title>New User</title>
<body bgcolor=white ></body>

<style>
h1{
color:dodgerblue;
font-family: "Times New Roman";
font-style: inherit;
font-size: 250%;
text-align: center;
background-color: blueviolet;
outline: double;
}

h2{
color: darkred;
font-family: "Times New Roman";
font-style: inherit;
font-size: 100%;
text-align: center;
}
</style>
<h1>
<?php
echo "New User";
?>
</h1>
<h2><!-- Create the form for insert information -->
<form method="post" action="">
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
<br><input type="submit" value="Create User" name="btncreateuser" />
</h2>
</form>
<?php
//decision to know if the button is empty
    if(!empty($_POST['btncreateuser'])){

        echo "Welcome";
    }
    /*if (empty($name) and empty($fullname) and empty($email) and empty($user_name) and empty($password)) {
        echo "bien";
    }*/
    //to know if the form is empty

    elseif (!empty($name) and !empty($fullname) and !empty($email) and !empty($user_name) and !empty($password)) {
    $sql = $mysqli->query("INSERT INTO user (name,full_name,email,user_name,password) VALUES ('name','fullname','email','user_name', 'password')");
    printf("New user id is %d.", $mysqli->insert_id);
}
?>
</html>

<!--/*if(isset($_POST["btncreateuser"])){
    echo"lo apreto";
} elseif (empty($name) and empty($fullname) and empty($email) and empty($user_name) and empty($password)) {
        echo "vacidos";
    } if (isset($_POST["btncreateuser"])) {
    echo "good";
        $sql = $mysqli->query("INSERT INTO user (name,full_name,email,user_name,password) VALUES ('name','fullname','email','user_name', 'password')");
        printf("New user id is %d.", $mysqli->insert_id);
    }*/











