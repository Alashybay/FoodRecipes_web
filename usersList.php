<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/style.css">
    <script src="app.js"></script>
    <title>Users List</title>
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
                    <h2>Users List</h2>
                    <p>Modify and see users</p>
                </div>
            </div>

            <?php include('partials/searchBar.php') ?>

            <div class="bottom">
                <table>
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Full Name</th>
                            <th>Email</th>
                            <th>Role</th>
                            <th>Action</th> 
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            foreach ($users as $user) {
                                echo "<tr>";
                                echo "<td>{$user['id']}</td>";
                                $full_name = $user['name'] . " " . $user['surname']; 
                                echo "<td>{$full_name}</td>";
                                echo "<td>{$user['email']}</td>";
                                if ($user['is_admin'] == 1) {
                                    echo "<td>Admin</td>";
                                } else {
                                    echo "<td>Guest</td>";
                                }
                                echo "<td>";
                                echo "<button class='table-btn delete' onclick='deleteUser({$user['id']})'>Delete</button>";
                                echo "<button class='table-btn updt' onclick='updateUserRole({$user['id']})'>Update Role</button>";
                                echo "</td>"; 
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
