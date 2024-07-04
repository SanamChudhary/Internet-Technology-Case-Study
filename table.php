<?php
$database_connection = new mysqli("localhost", "root", "", "userinterface");
if (!$database_connection) {
    die("mysqli_error");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Table</title>
    <style>
        table {
            border-collapse: collapse;
            border: 1px solid black;
        }

        th,
        td {
            border: 1px solid black;
            border-collapse: collapse;
        }
    </style>
</head>

<body>
    <table>
        <tr>
            <th>SN</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Address</th>
            <th>Gender</th>
            <th>Phone Number</th>
            <th>Email</th>
        </tr>

        <?php
        $query = "SELECT * FROM  `user_info`";
        $result = mysqli_query($database_connection, $query);
        if ($result) {
            while ($row = mysqli_fetch_array($result)) {
                $id = $row['id'];
                $firstname = $row['firstname'];
                $lastname = $row['lastname'];
                $address = $row['address'];
                $email = $row['email'];
                $phone_no = $row['phone_no'];
                $gender = $row['gender'];

                echo '<tr>
                <td> ' . $id . ' </td>
                <td> ' . $firstname . ' </td>
                <td> ' . $lastname . ' </td>
                <td> ' . $address . ' </td>
                <td> ' . $email . ' </td>
                <td> ' . $phone_no . ' </td>
                <td> ' . $gender . ' </td>
            </tr>';
            }
        }
        ?>
    </table>

</body>
</html>