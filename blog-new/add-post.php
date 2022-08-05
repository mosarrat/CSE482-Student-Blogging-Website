<?php
include('path.php');
include(ROOT_PATH . '/app/controllers/user-posts.php');

userOnly();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/svg+xml" href="../assets/images/favicon.ico" />
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="assets/css/style.css">
    <title>Create A Blog | NSUer's Blog</title>
</head>

<body>

    <!--header connection-->
    <?php
    include(ROOT_PATH . "/app/includes/header.php");
    include(ROOT_PATH . "/app/includes/messages.php");
    ?>

    <main class="container">
        <div class="p-4 p-md-5 mb-4 rounded bg-white my-3">

            <h3 class="display-6 mb-3 text-center">Create A Blog Post</h3>
            <!-- helpers connection-->
            <?php include(ROOT_PATH . "/app/helpers/formErrors.php") ?>

            <div class="form-create">
                <form action="add-post.php" method="post" enctype="multipart/form-data">
                    <div class="form-floating">
                        <input type="text" class="form-control" id="floatingInput" placeholder="Post Title" name="title" value="<?php echo $title; ?>">
                        <label for="floatingInput">Post Title</label>
                    </div>
                    <div class="mt-4">
                        <label for="formFile" class="form-label">Post Cover Photo</label>
                        <input class="form-control" type="file" id="formFile" name="image">
                    </div>

                    <div class="mt-4">
                        <textarea class="form-control" name="body" id="body" placeholder="Post Content">
                            <?php echo $body; ?>
                        </textarea>
                    </div>

                    <div class="mt-5">
                        <label for="topic_id">Category</label>
                        <select name="topic_id" class="form-select mb-3">
                            <option value="">Select topic</option>
                            <?php foreach ($topics as $key => $topic) : ?>

                                <!-- checking the selection -->
                                <?php if (!empty($topic_id) && $topic_id == $topic['id']) : ?>
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
                                <input type="checkbox" name="published"> Publish Post
                            </label>
                        <?php else : ?>
                            <label>
                                <input type="checkbox" name="published" checked>
                                Publish Post
                            </label>
                        <?php endif; ?>
                    </div>
                    <button class="w-100 btn btn-primary" name="create-post" type="submit">
                        Add Post
                    </button>
                </form>
            </div>

        </div>
    </main>

    <!--footer connection-->
    <?php include(ROOT_PATH . "/app/includes/footer.php") ?>

    <!--Ckeditor-->
    <script src="https://cdn.ckeditor.com/ckeditor5/32.0.0/classic/ckeditor.js"></script>
    <!--CK Editor scrip-->
    <script src="assets/js/scripts.js"></script>

</body>

</html>