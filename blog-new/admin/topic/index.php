<?php
include("../../path.php");
include(ROOT_PATH . '/app/controllers/topics.php');
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

    <title>Manage Post Topic | Admin Dashboard</title>
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

                <!-- thread table -->
                <div class="row my-3">
                    <section class="p-4 p-md-5 mb-4 rounded bg-white">
                        <h3>Post Categories</h3>
                        <hr />
                        <table class="table h6">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Category Name</th>
                                    <th scope="col" colspan="2">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($topics as $key => $topic) : ?>
                                    <tr>
                                        <td scope="row">
                                            <?php echo $key + 1 ?>
                                        </td>

                                        <td><?php echo $topic['name'] ?></td>
                                        <td>
                                            <a href="edit.php?id=<?php echo $topic['id']; ?>" class="badge bg-warning text-decoration-none">
                                                Edit
                                            </a>
                                        </td>
                                        <td>
                                            <a href="index.php?del_id=<?php echo $topic['id'] ?>" class="badge bg-danger text-decoration-none">
                                                Delete
                                            </a>
                                        </td>
                                    </tr>
                                <?php endforeach; ?>

                            </tbody>
                        </table>

                    </section>
                </div>

            </main>
        </div>
    </div>


    <!-- admin Footer  -->

    <?php include(ROOT_PATH . "/app/includes/adminFooter.php"); ?>

</body>

</html>