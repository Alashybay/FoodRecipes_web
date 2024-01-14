
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel= stylesheet href="styles/style.css">
    <title>Account Page</title>
    
</head>
<body>
    <?php include('partials/navbar.php') ?>
    <div class="container-account">
        <div class="box form-box-account">
            <header> 
                <h3>Welcome, USER!</h3> 
            </header>
            <text>
                <p>Here you can change your personal information</p>
            </text>
            <form action="" method="post">
                <div class="field input">
                    <label for="name">Name</label>
                    <input type="text" name="name" id="name" autocomplete="off">
                </div>

                <div class="field input">
                    <label for="surname">Surname</label>
                    <input type="text" name="surname" id="surname" autocomplete="off">
                </div>

                <div class="field input">
                    <label for="email">Email</label>
                    <input type="text" name="email" id="email" autocomplete="off">
                </div>
                
                <div class="field input">
                    <label for="password">Password</label>
                    <input type="password" name="password" id="password" autocomplete="off">
                </div>

                <div class="field">
                    <input type="submit" class="btn" name="submit" value="Save Changes" required>
                </div>
            </form>
        </div>
    </div>
    <?php include('partials/footer.php') ?>
</body>
</html>
