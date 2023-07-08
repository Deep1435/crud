<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>delete</title>
</head>
<body>
        <?php
            include "./connect.php";
          

// sql to delete a record
$sql = "DELETE FROM remind WHERE id='" . $_GET["id"] . "'";

if ($conn->query($sql) === TRUE) {
  echo "Record deleted successfully";
} else {
  echo "Error deleting record: " . $conn->error;
}

$conn->close();
        ?>
        <script>
            function deleteRow(id){
                if(confirm("are you sure you want to delete the record")){
                    window.location.href = "view.php?id=" +id;
                }
            }
        </script>
</body>
</html>