<?php
$database_connection = new mysqli("localhost","root","","userinterface");
if (!$database_connection) {
  die("mysqli_error");
}
if (isset($_POST['submit'])) {
  $firstname = $_POST['firstname'];
  $lastname = $_POST['lastname'];
  $address = $_POST['address'];
  $gender = $_POST['gender'];
  $phone_no = $_POST['phone'];
  $email = $_POST['email'];

  $mysqliQuery = "INSERT INTO `user_info`(`firstname`, `lastname`, `address`, `gender`, `phone_no`,`email`)
   VALUES('$firstname', '$lastname', '$address', '$gender', '$phone_no', '$email')";
   $result = mysqli_query($database_connection, $mysqliQuery);
   if ($result) {
    echo "data inserted successfully";
   } else {
    echo("Error description: " . $database_connection -> error);
   }
  }
?>

<!DOCTYPE html>
<html>

<head>
  <title>Form Validation</title>
  <link rel="stylesheet" href="style.css">
</head>
<!-- form validation using javascript -->

<body>
  <h1>User Information Form</h1>
  <form id="userForm" method="post" onsubmit="return validateForm()">
    <label for="firstname">First Name:</label>
    <input type="text" id="firstname" name="firstname" />
    <br /><br />

    <label for="lastname">Last Name:</label>
    <input type="text" id="lastname" name="lastname" /> <br /><br />

    <label for="address">Address:</label>
    <input type="text" id="address" name="address" /> <br /><br />

    <label for="gender">Gender:</label>
    <select name="gender" id="gender">
      <option value="">Select</option>
      <option value="Male">Male</option>
      <option value="Female">Female</option>
      <option value="Other">Other</option>
    </select>
    <br /><br />

    <label for="phone">Phone Number:</label>
    <input type="tel" id="phone" name="phone"> <br><br>

    <label for="email">Email:</label>
    <input type="email" id="email" name="email"> <br><br>

    <button type="submit" name="submit">Submit</button>
    <script src="app.js"></script>
  </form>

</body>

</html>