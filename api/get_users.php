<?php 
    // connect to db
    require_once('../db/conn.php');

    //auth logic
    if(!isAdmin()) {
        http_response_code(403);
        die();
    }

    // get users
    $sql = "SELECT * FROM users";
    $result = mysqli_query($conn, $sql);

    if(!isset($result)) {
        return json_encode([
            "message" => "Users not found"
        ]);
    }

    // get users
    $users = mysqli_fetch_assoc($result);
    echo json_encode($users);
?> 