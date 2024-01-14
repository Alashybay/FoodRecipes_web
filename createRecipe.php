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
    <?php include('partials/navbar.php') ?>
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
                    <input type="category" name="category" id="category" autocomplete="off" required>
                </div>

                <div class="field input">
                    <label for="steps">Steps</label>
                    <input type="text" name="steps" id="steps" autocomplete="off" required>
                </div>
                
                <div class="field input">
                    <label for="images">Images</label>
                    <input type="images" name="images" id="images" autocomplete="off" required>
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