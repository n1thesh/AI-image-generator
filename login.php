<?php
session_start();

include("db.php");

if ($_SERVER['REQUEST_METHOD'] == "POST") 
{
    $gmail = $_POST['mail'];
    $password = $_POST['pass'];

    if (!empty($gmail) && !empty($password) && !is_numeric($gmail))
    {
        $query = "select * from form where email='$gmail'limit 1";
        $result= mysqli_query($con, $query);

        if($result)
        {
            if($result && mysqli_num_rows($result)>0)
            {
                $user_data=mysqli_fetch_assoc($result);

                if($user_data['pass']==$password)
                {
                    header("location: home.php");
                    die;

                }
            }
        }
        echo "<script type='text/javascript'>alert('wrong user name or password')</script>";

    }
    else
    {
        echo "<script type='text/javascript'>alert('wrong user name or password')</script>";
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form and Registration </title>
    <link rel="stylesheet" href="login.css">
</head>
<body>
    <div class="login">
        <h1>Login</h1>
        <h4>its only take a minute</h4>
        <form method="POST">
            <label>E-mail</label>
            <input type="email" name="mail" required>
            <label for="pass">Password</label>
            <input type="password" id="pass" name="pass" autocomplete="new-password" required>
            <input type="submit" name="" value="Submit">
        </form>
        <p>not have an Account? <a href="./signup.php">Sign up here</a></p>
    </div>

</body>
</html>