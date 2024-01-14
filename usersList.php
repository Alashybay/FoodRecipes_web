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
    <?php include('partials/navbar.php') ?>

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
                            <th>Recipes Added</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            // Assume $users is an array containing user data
                            foreach ($users as $user) {
                                echo "<tr>";
                                echo "<td>{$user['id']}</td>";
                                echo "<td>{$user['full_name']}</td>";
                                echo "<td>{$user['recipes_added']}</td>";
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
