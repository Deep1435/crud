<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
</head>
<body>
    <h2>Login Page</h2>
        Username:
        <input type="text" placeholder="enter the username">
        <br>
        <br>
        Password:
        <input type="text" placeholder="enter the password">
        <br>
        <br>
        <input type="button" value="login" name="login">
        <?php
            include "./connect.php";
            if(isset($_POST['login'])){
                $username = $_POST['username'];
                $password = $_POST['password'];
                
                $sql = "INSERT INTO `remind` ('username', 'password') VALUES ('$username', '$password')";
                if($result){
                    header("location:read.php");

                
            }
        }

        ?>

        
</body>
</html>