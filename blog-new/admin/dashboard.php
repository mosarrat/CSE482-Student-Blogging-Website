<?php
include("../path.php");
include(ROOT_PATH . '/app/controllers/posts.php');

// table names
$posts = 'posts';
$post_categories = 'topics';
$users = 'users';
$threads = 'threads';
$thread_categories = 'thread_topics';

// Grab the User's data
$comments = selectAll('post_comments');


// adminOnly();
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
    <link rel="stylesheet" href="../assets/css/style.css">

    <title>Admin Dashboard</title>
</head>

<body>

    <!-- admin Header  -->

    <?php include(ROOT_PATH . "/app/includes/adminHeader.php"); ?>

    <div class="container-fluid">
        <div class="row h-100">
            <!-- Sidebar -->
            <?php include(ROOT_PATH . "/app/includes/adminSidebar.php"); ?>

            <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">

                <?php include(ROOT_PATH . "/app/includes/messages.php") ?>

                <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                    <h1 class="h2">Dashboard</h1>
                </div>

                <!-- show cards -->
                <div class="row">

                    <div class="col-xl-3 col-md-6">
                        <div class="card bg-primary text-white mb-4">
                            <div class="card-body">
                                <h3>Total Users</h3>
                                <h5 class="card-title">
                                    <?php echo countRows($users); ?>
                                </h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6">
                        <div class="card bg-success text-white mb-4">
                            <div class="card-body">
                                <h3>Total Posts</h3>
                                <h5 class="card-title">
                                    <?php echo countRows($posts); ?>
                                </h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6">
                        <div class="card bg-warning text-white mb-4">
                            <div class="card-body">
                                <h3>Total Post Topic</h3>
                                <h5 class="card-title">
                                    <?php echo countRows($post_categories); ?>
                                </h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6">
                        <div class="card bg-info text-white mb-4">
                            <div class="card-body">
                                <h3>Total Threads</h3>
                                <h5 class="card-title">
                                    <?php echo countRows($threads); ?>
                                </h5>
                            </div>
                        </div>
                    </div>



                </div>




            </main>
        </div>
    </div>


    <!-- admin Footer  -->

    <?php include(ROOT_PATH . "/app/includes/adminFooter.php"); ?>

</body>

</html>