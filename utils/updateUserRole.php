<?php
include_once "php/conn.php"; // Include your database connection file

if(isset($_POST['submit'])) { // Check if form is submitted
    $name = $_POST['name'];
    $surname = $_POST['surname'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql = "UPDATE users SET name = '$name', surname = '$surname', email = '$email', password = '$password' WHERE id = '$user_id'";
    $result = mysqli_query($conn, $sql);
    if ($result) {
        echo "<script>alert('Changes saved'); window.location.href = 'home.php';</script>";
    } else {
        echo "<script>alert('Changes failed');</script>";
    }
}



?>
