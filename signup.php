<?php
session_start();

include("db.php");

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $firstname = $_POST['fname'];
    $lastname = $_POST['lname'];
    $gender = $_POST['gender'];
    $num = $_POST['number'];
    $address = $_POST['add'];
    $gmail = $_POST['mail'];
    $password = $_POST['pass'];
    if (!empty($gmail) && !empty($password) && !is_numeric($gmail)) {
        $query = "INSERT INTO form (fname, lname, gender, cnum, address, email, pass) VALUES ('$firstname','$lastname','$gender','$num','$address','$gmail','$password')";
        mysqli_query($con, $query);  // Corrected the function call

        echo "<script type='text/javascript'>alert('Successfully registered')</script>";
    } else {
        echo "<script type='text/javascript'>alert('Please enter valid information')</script>";
    }
}
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form and Registration </title>
    <link rel="stylesheet" href="signup.css">
</head>
<body>
    <div class="signup">
        <h1>Sign Up</h1>
        <h4>It only takes a minute</h4>
        <form method="POST">
            <label for="fname">First Name</label>
            <input type="text" id="fname" name="fname" required>

            <label for="lname">Last Name</label>
            <input type="text" id="lname" name="lname" required>

            <label for="gender">Gender</label>
            <input type="text" id="gender" name="gender" required>

            <label for="number">Contact Number</label>
            <input type="tel" id="number" name="number" required>

            <label for="add">Place</label>
            <input type="text" id="add" name="add" required>

            <label for="mail">E-mail</label>
            <input type="email" id="mail" name="mail" required>

            <label for="pass">Password</label>
            <input type="password" id="pass" name="pass" autocomplete="new-password" required>



            <input type="submit" value="Submit">
        </form>
        <p>By clicking the Sign Up button, you agree to our <br>
            <a href="#">Terms and Conditions</a> and <a href="#">Privacy Policy</a>
        </p>
        <p>Already have an account? <a href="./login.php">Login here</a></p>
    </div>
</body>
</html>