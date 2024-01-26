<!-- connect to db -->
<?php
    $conn = mysqli_connect('localhost', 'root', '', 'food-recipies');

    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }
?>
