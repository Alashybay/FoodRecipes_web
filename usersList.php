<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/style.css">
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
                            <th>Recipes Added</th>
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
                                echo "<td>{$user['recipes_added']}</td>";
                                echo "<td>";
                                echo "<button onclick=\"confirmDelete({$user['id']})\">Delete</button>";
                                echo "<button onclick=\"updateUserRole({$user['id']})\">Update Role</button>";
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

    <script>
        function confirmDelete(userId) {
            var confirmation = confirm("Are you sure you want to delete this user?");
            if (confirmation) {
                // Perform AJAX request to deleteUser.php
                var xhr = new XMLHttpRequest();
                xhr.onreadystatechange = function() {
                    if (xhr.readyState == 4 && xhr.status == 200) {
                        // Handle the response if needed
                        alert(xhr.responseText);
                        // Reload the page or update the user list
                        location.reload();
                    }
                };
                xhr.open("GET", 'deleteUser.php?id=' + userId, true);
                xhr.send();
            } else {
                alert("User not deleted.");
            }
        }

        function updateUserRole(userId) {
            if (userId == <?php echo $user_id; ?>) {
                alert("You cannot change your own role.");
                return;
            }
            var confirmation = confirm("Are you sure you want to update this user's role?");
            if (confirmation) {
                // Perform AJAX request to updateUserRole.php
                var xhr = new XMLHttpRequest();
                xhr.onreadystatechange = function() {
                    if (xhr.readyState == 4 && xhr.status == 200) {
                        // Handle the response if needed
                        alert(xhr.responseText);
                        // Reload the page or update the user list
                        location.reload();
                    }
                };
                xhr.open("GET", '/utils/updateUserRole.php?id=' + userId, true);
                xhr.send();
            } else {
                alert("User role not updated.");
            }
        }
    </script>
</body>
</html>
