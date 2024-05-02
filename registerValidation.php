<?php
    $firstname = $_POST["fname"];
    $lastname = $_POST["lname"];
    $username = $_POST["username"];
    $password = $_POST["password"];
    $email = $_POST["email"];
    $contact = $_POST["contact"];
    $department = $_POST["department"];

    // echo "$name";
    // echo "<br>";
    // echo "$password";
    // echo "<br>";
    // echo "$email";
    // echo "<br>";
    // echo "$contact";
    // echo "<br>";
    // echo "$department";

    $conn = mysqli_connect("localhost","root","") or die("Couldn't connect to database");
    mysqli_select_db($conn,"PersonnelCareerManagement") or die("Database not connected");
    
    $query = "insert into emplogin(firstname, lastname, username, password, email, contact, department) values ('{$firstname}','{$lastname}','{$username}','{$password}','{$email}','{$contact}','{$department}')";
    $result = mysqli_query($conn,$query) or die("Incorrect query");

    // $query = "insert into emplogin(username, password, email, contact, department) values ('{$username}','{$password}','{$email}','{$contact}','{$department}')";
    // $result = mysqli_query($conn,$query) or die("Incorrect query");
    mysqli_close($conn);

    header("Location: login.php");
?>