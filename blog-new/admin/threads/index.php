<?php
include("../../path.php");
include(ROOT_PATH . '/app/controllers/threads.php');

adminOnly();
// Grab the User's data
$users = selectAll('users');
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
    <link rel="stylesheet" href="../../assets/css/style.css">

    <title>Manage Threads | Admin Dashboard</title>
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
                        <h3>Threads</h3>
                        <hr />
                        <table class="table h6">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Post Title</th>
                                    <th scope="col">Category</th>
                                    <th scope="col">Author</th>
                                    <th scope="col">Published</th>
                                    <th scope="col" colspan="3">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($threads as $key => $thread) : ?>
                                    <tr>
                                        <td scope="row">
                                            <?php echo $key + 1; ?>
                                        </td>

                                        <td>
                                            <a href="<?php echo Base_URL . 'thread.php?id=' . $thread['id']; ?>" class="text-decoration-none">
                                                <h6 class="text-dark">
                                                    <?php echo $thread['title'] ?>
                                                </h6>
                                            </a>
                                        </td>

                                        <?php foreach ($thread_topics as $key => $topic) :  ?>
                                            <?php if ($thread['thread_topic_id'] == $topic['id']) : ?>
                                                <td>
                                                    <?php echo $topic['name'] ?>
                                                </td>
                                            <?php endif; ?>
                                        <?php endforeach; ?>

                                        <?php foreach ($users as $key => $user) :  ?>
                                            <?php if ($thread['user_id'] == $user['id']) : ?>
                                                <td>
                                                    <?php echo ucfirst($user['username']); ?>
                                                </td>
                                            <?php endif; ?>
                                        <?php endforeach; ?>

                                        <td>
                                            <?php echo date('F j, Y', strtotime($thread['created_at'])); ?>
                                        </td>
                                        <td>
                                            <a href="edit.php?id=<?php echo $thread['id']; ?>" class="badge bg-warning text-decoration-none">
                                                Edit
                                            </a>
                                        </td>
                                        <td>
                                            <a href="index.php?del_id=<?php echo $thread['id'] ?>" class="badge bg-danger text-decoration-none">
                                                Delete
                                            </a>
                                        </td>
                                        <?php if ($thread['published']) : ?>
                                            <td>
                                                <a href="edit.php?published=0&t_id=<?php echo $thread['id'] ?>" class="badge bg-info text-decoration-none">
                                                    Unpublish
                                                </a>
                                            </td>

                                        <?php else : ?>
                                            <td>
                                                <a href="edit.php?published=1&t_id=<?php echo $thread['id'] ?>" class="badge bg-success text-decoration-none">
                                                    Publish
                                                </a>
                                            </td>
                                        <?php endif; ?>
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