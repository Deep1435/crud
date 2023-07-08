<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insert</title>
    <style>
        .contanier{
            background-color:#e0b1d8;
            length:auto;
            width: 30%;

        }
        .submit-btn{
            background:#baccce;
        }
      
    </style>
</head>
<body>
    <center>
    <div class="contanier">             
    <h2 style="color: brown">Registration Page</h2>
       <form action="" method="post">
        Name:- <input type="text"  name="name">
        <br>
        <br>
        Email:- <input type="email" name="email">
        <br>
        <br>
        Phone:- <input type="text" name="phone">
        <br>
        <br>
        <input type="submit"  name="submit" class="submit-btn">
        <input type="button" value="login" onclick="log()" class="submit-btn">
       </form>
       </div>
       </center>
       <?php
            if(isset($_POST['submit'])){
                $name = $_POST['name'];
                $email = $_POST['email'];
                $phone = $_POST['phone'];

                include "./connect.php";
                $sql = "INSERT INTO `remind` (`name`,`email`,`phone`) VALUES ('$name', '$email', '$phone')";
                $result = mysqli_query($conn, $sql );

                if($result){
                    header("location:read.php");
                }
                

            }
       ?>
       <script>
                function log(){
                    window.location.href="login.php";
                } 
       </script>
</body>
</html>