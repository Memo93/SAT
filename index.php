<html>
<head>
    <title>Sistema de Administración de Tajos</title>
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
</head>
<body>
<h1>
    <?php
    echo "New User";
    ?>
</h1>

<form action="access.php" method="get">
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
</body>
</html>