
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/style.css">
    <title>My List</title>
</head>
<body>
    <?php include('partials/navbar.php') ?>

    <main>
        <div class="main-box top">
            <div class="top">
                <div>
                    <h2>My List</h2>
                    <p>Explore your saved recipies here:</p>
                </div>
            </div>

            <?php include('partials/searchBar.php') ?>

            <div class="bottom">
                <?php 
                $title = "Recipe 1";
                $description = "Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, voluptatum. dasfasdf. asdfa . afsf s sadshflkjha sfaskjdfhla falsdjfhlaskdj asdfjasdfkl kjashf";
                $image = "https://i.pinimg.com/236x/42/67/4e/42674e4d96d3e11c6c3508fc19567470.jpg";
                $category_name = " Dessert";
                $steps = " Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, voluptatum. askdfhlakjhflaksjdhflaksdfh laskhdfkl ajshfl";
                $author = " John Doe";        
                include('partials/recipeCard.php') ?>

            </div>
        </div>
    </main>

    <?php include('partials/footer.php') ?>
</body>
</html>