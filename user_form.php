<html lang="en">
<style>

</style>
<head>

    <link rel="stylesheet" href="style.php" media="screen">

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css"
          integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>

    <title>Sistema de Administración de Tajos</title>
</head>
<body>

<nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">
    <a class="navbar-brand" href="index.php"> SAT</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault"
            aria-controls="navbarsExampleDefault" aria-expanded="true" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="navbar-collapse collapse" id="navbarsExampleDefault" style>
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="user_form.php">
                    Create User
                    <span class="sr-only">(Current)</span>
                </a>
            </li>
        </ul>
        <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
        </form>
    </div>
</nav>
<fieldset>
    <main role="main" class="container">
       <br><br><div class="container-body">
            <div class="row justify-content-md-center">
                <div class="col-md-auto">
                    <h1>Insert a New User</h1>
                </div>
            </div>
        </div>
    </main>
</fieldset>
<?php
if ($_SERVER["REQUEST_METHOD"]=='POST'){
    $name=$_POST['name'];
    $full_name=$_POST['full_name'];
    $email=$_POST['email'];
    $username=$_POST['username'];
    $pass=$_POST['password'];

    if (!empty($name) and !empty($full_name) and !empty($email) and !empty($username) and !empty($pass)) {

        $mysqli = new mysqli("localhost", "memo", "Jh7MihgxllG8bWS2", "sat");

        $query = "INSERT INTO user (name, full_name, email, user_name, password) VALUES ('$name','$full_name','$email','$username','$pass')";

        $mysqli->query($query);
        printf("New user id is %d.", $mysqli->insert_id);
    } else {

        printf("Incomplete Form");
    }

}
?>

<form action="<?php echo $_SERVER['PHP_SELF'];?>" method="POST">
    <div class="container body">
        <div class="row justify-content-md-center">
    <div class="col-md-auto">
        <h5>Name:</h5>
        <input type="text" placeholder="Name"name="name"/><br>
    </div>
            <div class="w-100"></div>
     <div class="col-md-auto">
        <br><h5>Full Name:</h5>
        <input type="text" placeholder="Full Name" name="full_name"/><br>
     </div>
            <div class="w-100"></div>
     <div class="col-md-auto">
         <br><h5>Email:</h5>
        <input type="text" placeholder="Email"name="email"/><br>
     </div>
            <div class="w-100"></div>
    <div class="col-md-auto">
        <br><h5>User Name:</h5>
        <input type="text" placeholder="User Name"name="username"/><br>
    </div>
            <div class="w-100"></div>
    <div class="col-md-auto">
        <br><h5>Password:</h5>
        <input type="password" placeholder="Password" name="password"/><br>
    </div>
            <div class="w-100"></div>
    <br><button type="submit" class="btn btn-primary">Create User</button>
    </div>

    </div>
</form>
</body>
</html>