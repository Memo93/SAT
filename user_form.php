<html lang="en">
<head>

    <link rel="stylesheet" href="style.php" media="screen">

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css"
          integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>

    <title>Sistema de Administración de Se Mamo</title>
</head>
<body>
    <div class="container">
        <div class="container-body">
        <h1>Insert a New User</h1>
        <p class="lead">
            In this part of the form you create a new user for use the SAT (Blade Management System).
        </p>
        </div>
    </div>
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
    } else {

        printf("Incomplete Form");
    }

}
?>

<form action="<?php echo $_SERVER['PHP_SELF'];?>" method="POST">
    <div class="container">
    <h5>Name:</h5>
    <input type="text" placeholder="Name"name="name"/><br>
    <br><h5>Full Name:</h5>
    <input type="text" placeholder="Full Name" name="fullname"/><br>
    <br><h5>Email:</h5>
    <input type="text" placeholder="Email"name="email"/><br>
    <br><h5>User Name:</h5>
    <input type="text" placeholder="User Name"name="username"/><br>
    <br><h5>Password:</h5>
    <input type="password" placeholder="Password" name="password"/><br>
    <br><button type="submit" class="btn btn-primary">Crete User</button>
    </div>
</form>
</body>
</html>