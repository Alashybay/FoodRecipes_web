<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/style.css">
    <script src="js/app.js"></script>
    <title>Create recipe</title>
</head>
<body>
    <?php 
        include_once "utils/session.php";
        include_once "php/conn.php";

        if (!isset($_SESSION['id'])) {
            header("Location: index.php");
            exit();
        }
        // get current user 
        $user_id = $_SESSION['id'];
        $sql = "SELECT * FROM users WHERE id = '$user_id'";
        $result = mysqli_query($conn, $sql);
        $row = mysqli_fetch_assoc($result);
        $name = $row['name'];
        $surname = $row['surname'];

        $full_name = $name . " " . $surname;

        if (isset($_POST['submit'])) {
            $title = $_POST['title'];
            $description = $_POST['description'];
            $category_name = $_POST['category_name'];
            $additional_info = $_POST['additional_info'];
            $author = $full_name;

            if (strlen($description) < 20) {
                echo "<script>alert('Description should be at least 20 characters long');</script>";

            } else {
                if (empty($title) || empty($description) || empty($additional_info) || empty($category_name)) {
                    echo "<script>alert('Please fill in all fields');</script>";
                } else {
                    $sql = "INSERT INTO food_recipes ( title, description, category_name, additional_info, author) VALUES ('$title', '$description', '$category_name', '$additional_info', '$author')";
                    $result = mysqli_query($conn, $sql);
                    if ($result) {
                        echo "<script>alert('Recipe created'); window.location.href = 'home.php';</script>";
                    } else {
                        echo "<script>alert('Recipe creation failed');</script>";
                    }
                }
            }
        }
    ?>
    <?php include('partials/header.php') ?>
    <div class="container-create">
        <div class="box form-box-create">
            <div class="close-link">
                <a href="home.php">close</a>
            </div>
            <header> 
                <h3>Create your recipe!</h3> 
            </header>
            <text>
                <p>Fill the form and share your recipe with us!</p>
            </text>
            <form  method="POST" enctype="multipart/form-data">

                <div class="field input">
                    <label for="title">Title</label>
                    <input type="text" name="title" id="title" autocomplete="off" required>
                </div>

                <div class="field input">
                    <label for="description">Description</label>
                    <input type="text" name="description" id="description" autocomplete="off" required>
                </div>

                <div class="field input">
                    <label for="category_name">Category</label>
                    <select name="category_name" id="category_name" autocomplete="off" required>
                        <option value="0">Select category</option>
                        <?php
                            $sql = "SELECT * FROM recipe_categories";
                            $result = mysqli_query($conn, $sql);
                            while ($row = mysqli_fetch_assoc($result)) {
                                echo "<option value='".$row['title']."'>".$row['title']."</option>";
                            }
                        ?>
                    </select>
                </div>

                <div class="field input">
                    <label for="additional_info">additional info.</label>
                    <input type="text" name="additional_info" id="additional_info" autocomplete="off" required>
                </div>

                <div class="field">
                    <input type="submit" class="btn" name="submit" value="Create" required>
                </div>
            </form>
        </div>
    </div>
    <?php include('partials/footer.php') ?>
</body>
</html>
