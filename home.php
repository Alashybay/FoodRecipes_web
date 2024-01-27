
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/style.css">
    <script src="app.js"></script>
    <title>Home</title>
</head>
<body>
   <div>
        <?php include_once "utils/session.php"; 
            if (!isset($_SESSION['id'])) {
                header("Location: index.php");
            }
            include_once "php/conn.php";
        
            $user_id = $_SESSION['id'];
            $sql = "SELECT * FROM users WHERE id = '$user_id'";
            $result = mysqli_query($conn, $sql);
            $row = mysqli_fetch_assoc($result);
            $name = $row['name'];
        

            include('partials/header.php') 
        ?>

        <main>
            <div class="main-box top">
                <div class="top">
                    <div>
                        <?php echo "<h2>Welcome, $name!</h2>"; ?>

                        <p>Explore our recipes and categories below:</p>
                    </div>
                </div>

                <?php include('partials/searchBar.php') ?>

                <div class="bottom" id="recipes">


                </div>
            </div>
        </main>

        <?php include('partials/footer.php') ?>
    </div>
</body>
</html>
