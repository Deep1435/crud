<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>update</title>
    <style>
        .container{
            background:#aee0c957;
            width:30%;
        }
        .update-btn{
            background:#0000ff57;

        }
        .submit-btn{
            background:white;
        }
    </style>
</head>
<body>
<?php
    include "./connect.php";

    if (isset($_POST['update'])) {
        $id = $_POST['id'];
        $name = $_POST['name'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];

        $sql = "UPDATE `remind` SET `name`='$name', `email`='$email', `phone`='$phone' WHERE `id`='$id'";

        $result = $conn->query($sql);
        if ($result === TRUE) {
            echo "Record updated successfully";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    }

    if (isset($_GET['id'])) {
        $id = $_GET['id'];
        $sql = "SELECT * FROM `remind` WHERE `id` = '$id'";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $name = $row['name'];
                $email = $row['email'];
                $phone = $row['phone'];
                $id = $row['id'];
            }
        }
    }
?>
<div class="container">
<center>
    <h3>Update the form</h3>
    <form action="" method="post">
        <input type="hidden" name="id" value="<?php echo $id; ?>">
        <br>
        <br>
        Name: <input type="text" name="name" value="<?php echo $name; ?>">
        <br>
        <br>
        Email: <input type="text" name="email" value="<?php echo $email; ?>">
        <br>
        <br>
        Phone: <input type="text" name="phone" value="<?php echo $phone; ?>">
        <br>
        <br>
        <input type="submit" value="update" name="update" class="update-btn" onclick="update()">
    </form>
</center>
</div>
<script>
    function update(){
        window.location.href="read.php";
    }
</script>
</body>
</html>
