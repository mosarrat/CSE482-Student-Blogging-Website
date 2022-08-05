<?php include('path.php');

include(ROOT_PATH . '/app/controllers/users.php');
guestsOnly();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/svg+xml" href="assets/images/favicon.ico" />
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="assets/css/style.css">
    <title>Sign Up | NSUer's Blog</title>
</head>

<body>

    <!--header connection-->
    <?php
    include(ROOT_PATH . "/app/includes/header.php");
    include(ROOT_PATH . "/app/includes/messages.php");
    ?>

    <main class="form-signin">
        <form action="signup.php" method="POST" class="mt-5">
            <h1 class="h3 mb-3 fw-normal">Please Sign up</h1>

            <?php include(ROOT_PATH . "/app/helpers/formErrors.php") ?>

            <div class="form-floating">
                <input type="text" class="form-control" id="floatingInput" placeholder="username" name="username" value="<?php echo $username; ?>">
                <label for="floatingInput">Username</label>
            </div>
            <div class="form-floating mt-2">
                <input type="email" class="form-control" id="floatingInput" placeholder="name@northsouth.edu" pattern="[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@northsouth.edu$" name="email" value="<?php echo $email; ?>" aria-describedby="emailHelp">
                <label for="floatingInput">Email address</label>
                <small id="emailHelp" class="form-text">Please use @northsouth.edu mail address.</small>
            </div>
            <div class="form-floating mt-2">
                <input type="password" class="form-control" id="floatingPassword" placeholder="Password" name="password" value="<?php echo $password; ?>">
                <label for="floatingPassword">Password</label>
            </div>
            <div class="form-floating mt-2 mb-3">
                <input type="password" class="form-control" id="floatingPassword" placeholder="Password Confirmation" name="passwordConf" value="<?php echo $passwordConf; ?>">
                <label for="floatingPassword">Password Confirmation</label>
            </div>

            <button class="w-100 btn btn-lg btn-primary" type="submit" name="signup-btn">
                Sign up
            </button>
            <div>
                <p class="mt-3">
                    Already have an account? <a href="<?php echo Base_URL . 'login.php' ?>" class="text-decoration-none">Login</a>
                </p>
            </div>

        </form>
    </main>


    <!--custom scrip-->
    <script src="assets/js/Validation.js"></script>
</body>

</html>