<?php
include("../../path.php");
include(ROOT_PATH . '/app/controllers/users.php');
adminOnly();
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
    <!--Custom CSS Styling-->
    <link rel="stylesheet" href="../../assets/css/style.css">


    <title>Edit User | Admin Dashboard</title>
</head>

<body>

    <!-- admin Header  -->

    <?php include(ROOT_PATH . "/app/includes/adminHeader.php"); ?>

    <div class="container-fluid">
        <div class="row h-100">
            <!-- Sidebar -->
            <?php include(ROOT_PATH . "/app/includes/adminSidebar.php"); ?>

            <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
                <div class="p-4 p-md-5 mb-4 rounded bg-white my-3">

                    <h3 class="display-6 mb-3 text-center">Edit A User</h3>
                    <!-- helpers connection-->
                    <?php include(ROOT_PATH . "/app/helpers/formErrors.php") ?>
                    <!-- form -->
                    <div class="form-create">
                        <form action="edit.php" method="post">

                            <input type="hidden" name="id" value="<?php echo $id; ?>">

                            <div class="form-floating">
                                <input type="text" class="form-control" id="floatingInput" placeholder="Username" name="username" value="<?php echo $username; ?>">
                                <label for="floatingInput">User Name</label>
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

                            <div class="checkbox mt-4 mb-3">
                                <?php if (isset($admin) && $admin === 1) : ?>
                                    <label>
                                        <input type="checkbox" name="admin"> Admin
                                    </label>
                                <?php else : ?>
                                    <label>
                                        <input type="checkbox" name="admin" checked>
                                        Admin
                                    </label>
                                <?php endif; ?>
                            </div>
                            <button class="w-100 btn btn-primary" name="update-user" type="submit">
                                Update User
                            </button>
                        </form>
                    </div>

                </div>

            </main>
        </div>
    </div>



    <!-- admin Footer  -->

    <?php include(ROOT_PATH . "/app/includes/adminFooter.php"); ?>
</body>

</html>