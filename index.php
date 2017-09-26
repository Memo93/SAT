<html>
<head>
    <title>Sistema de Administración de Tajos</title>
    <link rel="stylesheet" type="text/css" href="style.css"
</head>
<body>
<h1>
    <?php
    echo "New User";
    ?>
</h1>

<form action="registrar.php" method="post">
    <label>User Name</label>
    <input type="text" name="user_name"/><br>
    <br><label>Password</label>
    <input type="text" name="password"><br>
    <br><input type="submit" value="Submite"/>

</form>

</body>
</html>