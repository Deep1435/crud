<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>read</title>
    <style>
        table,tr,th,td{
            border: 1px solid black;
            background-color: #c7b8d54a;
        }
        .update-btn{
            background:#0000ff57;

        }
        .delete-btn{
            background:#ff00007d;
        }
    </style>
</head>
<body>

    <?php
        include "./connect.php";
        $sql = "SELECT * FROM remind";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            echo "<table>
            <tr>
                <th>id</th>
                <th>name</th>
                <th>email</th>
                <th>phone</th>
                <th>action</th>
            </tr>";

            while ($row = $result->fetch_assoc()) {
                echo "<tr>
                    <td>" . $row["id"] . "</td>
                    <td>" . $row["name"] . "</td>
                    <td>" . $row["email"] . "</td>
                    <td>" . $row["phone"] . "</td>
                    <td>
                        <button class='update-btn' onclick='updateRow(" . $row["id"] . ")'>Update</button>
                        <button class='delete-btn' onclick='deleteRow(" . $row["id"] . ")'>Delete</button>
                    </td>
                </tr>";
            }
            echo "</table>";
        } else {
            echo "0 results";
        }
        $conn->close();
    ?>

    <script>
        function updateRow(id) {
            window.location.href = "update.php?id=" + id;
        }

        function deleteRow(id) {
            window.location.href = "delete.php?id=" + id;
        }
    </script>
</body>
</html>
