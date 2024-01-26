<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/style.css">
    <title>Requests List</title>
</head>
<body>
    <?php 
        include_once "utils/session.php"; 
        if (!isset($_SESSION['id']) || $_SESSION['is_admin'] != 1) {
            header("Location: home.php");
        }
        
        include_once "php/conn.php";
    
        $user_id = $_SESSION['id'];
        $sql = "SELECT * FROM users WHERE id = '$user_id'";
        $result = mysqli_query($conn, $sql);
        $row = mysqli_fetch_assoc($result);
        $name = $row['name'];
    
        include('partials/header.php'); 

        // Get all users
        $sql = "SELECT * FROM users";
        $result = mysqli_query($conn, $sql);
        $users = mysqli_fetch_all($result, MYSQLI_ASSOC);
        $full_name = $row['name'] . " " . $row['surname'];
    ?>

    <main>
        <div class="main-box top">
            <div class="top">
                <div>
                    <h2>Requests List</h2>
                    <p>Modify and see requests</p>
                </div>
            </div>

            <?php include('partials/searchBar.php') ?>

            <div class="bottom">
                <table>
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Full Name</th>
                            <th>Request</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            // diaply only if is_reviewd is false 
                            $sql = "SELECT * FROM requests WHERE is_reviewed = 0";
                            $result = mysqli_query($conn, $sql);
                            $requests = mysqli_fetch_all($result, MYSQLI_ASSOC);
                            foreach ($requests as $request) {
                                echo "<tr>";
                                echo "<td>" . $request['id'] . "</td>";
                                echo "<td>" . $request['name'] . "</td>";
                                echo "<td>" . $request['request'] . "</td>";
                                echo "<td><a href='php/deleteRequest.php?id=" . $request['id'] . "'>Delete</a></td>";
                                echo "</tr>";
                            }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </main>

    <?php include('partials/footer.php') ?>

</body>
</html>
