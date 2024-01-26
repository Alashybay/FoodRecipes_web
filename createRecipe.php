<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/style.css">
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
    ?>
    <?php include('partials/header.php') ?>
    <div class="container-create">
        <div class="box form-box-create">
            <?php
                if(isset($_POST['submit'])){
                    $title = $_POST['title'];
                    $description = $_POST['description'];
                    $category = $_POST['category'];
                    $steps = $_POST['steps'];
                    $images = $_POST['images'];
                    $user_id = $_SESSION['id'];
                    

                    if (empty($title) || empty($description) || empty($steps) || empty($images) || empty($category_id) || empty($user_id)){
                        echo "<script>alert('Please fill in all fields');</script>";
                    } else {
                        $sql = "INSERT INTO food_recipes (title, description, category, steps, images) VALUES ('$title', '$description', '$category', '$steps', '$images')";
                        $result = mysqli_query($conn, $sql);

                        if ($result) {
                            echo "<script>alert('Recipe created successfully'); window.location.href = 'home.php';</script>";
                            exit();
                        } else {
                            echo "<script>alert('Recipe creation failed');</script>";
                        }
                    }   
                }
            ?>
            <div class="close-link">
                <a href="home.php">close</a>
            </div>
            <header> 
                <h3>Create your recipe!</h3> 
            </header>
            <text>
                <p>Fill the form and share your recipe with us!</p>
            </text>
            <form action="" method="POST">
                <div class="field input">
                    <label for="title">Title</label>
                    <input type="text" name="title" id="title" autocomplete="off" required>
                </div>

                <div class="field input">
                    <label for="description">Description</label>
                    <input type="text" name="description" id="description" autocomplete="off" required>
                </div>

                <div class="field input">
                    <label for="category">Category</label>
                    <select name="category" id="category" autocomplete="off" required>
                        <option value="0">Select category</option>
                        <?php
                            $sql = "SELECT * FROM recipe_categories";
                            $result = mysqli_query($conn, $sql);
                            while ($row = mysqli_fetch_assoc($result)) {
                                echo "<option value='".$row['id']."'>".$row['title']."</option>";
                            }
                        ?>
                    </select>
                </div>

                <div class="field input">
                    <label for="steps">Steps</label>
                    <input type="text" name="steps" id="steps" autocomplete="off" required>
                </div>
                
                <div class="field input">
                    <label for="images">Images</label>
                    <input type="text" name="images" id="images" autocomplete="off" required>
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
