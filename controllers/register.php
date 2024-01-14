<!-- <?php
    session_start();

    // work only if post method
    if($_SERVER["REQUEST_METHOD"] === "POST") {
        // inject conn

        // reset util vars
        if(isset($_SESSION['error'])) {
            unset($_SESSION['error']);
        }
        if(isset($_SESSION['message'])) {
            unset($_SESSION['message']);
        }

         // get data
        $email = $_POST['email'];
        $name = $_POST['name'];

        // remaing data

        // chcek if user eexits
        // $sql = "SELECT * FROM users WHERE email = {$email}";
        // $result = mysqli_count($conn, $sql);

        // if($result > 0) {
            // tell users exists error
            $_SESSION['error'] = "User exits";
        // }

        // registr query

        // $sql = "INSERT INTO asdasdas"

        // everything is ok tell user
        $_SESSION['message'] = "User registered {$name} {$email}";

        header('Location: /food-recipies/registration.php');
    }

    // redirect to registrae page
    header('Location: /food-recipies/registration.php'); -->