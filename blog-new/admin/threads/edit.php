<?php
include("../../path.php");
include(ROOT_PATH . '/app/controllers/threads.php');
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

    <title>Edit Thread | Admin Dashboard</title>
</head>

<body>

    <!-- admin Header  -->

    <?php include(ROOT_PATH . "/app/includes/adminHeader.php"); ?>

    <div class="container-fluid">
        <div class="row">
            <!-- Sidebar -->
            <?php include(ROOT_PATH . "/app/includes/adminSidebar.php"); ?>

            <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">

                <div class="p-4 p-md-5 mb-4 rounded bg-white my-3">

                    <h3 class="display-6 mb-3 text-center">Edit A Discussion Thread</h3>
                    <!-- helpers connection-->
                    <?php include(ROOT_PATH . "/app/helpers/formErrors.php") ?>

                    <div class="form-create">
                        <form action="edit.php" method="post" enctype="multipart/form-data">

                            <input type="hidden" name="id" value="<?php echo $id; ?>">

                            <div class="form-floating">
                                <input type="text" class="form-control" id="floatingInput" placeholder="Thread Title" name="title" value="<?php echo $title; ?>">
                                <label for="floatingInput">Thread Title</label>
                            </div>

                            <div class="mt-4">
                                <textarea class="form-control" name="body" id="body" placeholder="Thread Content">
                                    <?php echo $body; ?>
                                </textarea>
                            </div>

                            <div class="mt-5">
                                <label for="thread_topic_id">Discussion Topic</label>

                                <select name="thread_topic_id" class="form-select mb-3">
                                    <option value="">Select Thread Topic</option>
                                    <?php foreach ($thread_topics as $key => $topic) : ?>

                                        <!-- checking the selection -->
                                        <?php if (!empty($thread_topic_id) && $thread_topic_id == $topic['id']) : ?>
                                            <option value="<?php echo $topic['id']; ?>" selected>
                                                <?php echo $topic['name']; ?>
                                            </option>
                                        <?php else : ?>
                                            <option value="<?php echo $topic['id']; ?>">
                                                <?php echo $topic['name']; ?>
                                            </option>
                                        <?php endif; ?>


                                    <?php endforeach; ?>

                                </select>

                            </div>
                            <div class="checkbox mt-4 mb-3">
                                <?php if (empty($published)) : ?>
                                    <label>
                                        <input type="checkbox" name="published"> Publish Thread
                                    </label>
                                <?php else : ?>
                                    <label>
                                        <input type="checkbox" name="published" checked>
                                        Publish Thread
                                    </label>
                                <?php endif; ?>
                            </div>

                            <button class="w-100 btn btn-primary" name="update-thread" type="submit">
                                Update Thread
                            </button>
                        </form>
                    </div>

                </div>


            </main>
        </div>
    </div>


    <!--Ckeditor-->
    <script src="https://cdn.ckeditor.com/ckeditor5/32.0.0/classic/ckeditor.js"></script>
    <!--custom scrip-->
    <script src="../../assets/js/scripts.js"></script>

    <!-- admin Footer  -->

    <?php include(ROOT_PATH . "/app/includes/adminFooter.php"); ?>
</body>

</html>