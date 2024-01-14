<!-- <?php 
    // connect to db
    // require_once('../db/conn.php');

    //auth logic
    // if not admin return 403 Forbidden

    // get users
    // $sql = "SELECT * FROM users WHERE id = 1";
    // $result = mysqli_query($conn, $sql);

    // if(!isset($result)) {
    //     return json_encode([
    //         "message" => "Users not found"
    //     ]);
    // }

    // // get users
    // $users = mysqli_fetch_assoc($result);

    $users = [
        [
            'name' => 'user 1'
        ]
        ];

    echo json_encode([
        'users' => $users
    ]); -->