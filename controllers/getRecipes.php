<?php
    header('Content-Type: application/json');
    include("../php/conn.php");

    $sql = "SELECT * FROM food_recipes";
    $result = mysqli_query($conn, $sql);

    if (!$result) {
        die('Error: ' . mysqli_error($conn));
    }

    $food_recipes = mysqli_fetch_all($result, MYSQLI_ASSOC);

    echo json_encode($food_recipes);
?>
