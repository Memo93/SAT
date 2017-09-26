<html>
<head>
    <title>Sistema de Administración de Tajos</title>
</head>
<body>
<h1>
    <?php
    echo "New User";
    ?>
</h1>

<form action="registrar.php" method="post">
    <label>User Name</label>
    <input type="text" name="user_name" id="user_name"/><br>
    <br><label>Password</label>
    <input type="text" name="password" id="pass"><br>
    <br><input type="submit" value="Submite"/>

</form>

</body>
</html>