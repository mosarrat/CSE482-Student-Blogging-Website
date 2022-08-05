<?php
include("../../path.php");
include(ROOT_PATH . '/app/controllers/thread-topics.php');
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


    <title>Add Thread Topics | Admin Dashboard</title>
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

                    <h3 class="display-6 mb-3 text-center">Create A Thread Category</h3>
                    <!-- helpers connection-->
                    <?php include(ROOT_PATH . "/app/helpers/formErrors.php") ?>

                    <div class="form-create">
                        <form action="create.php" method="post">

                            <div class="form-floating">
                                <input type="text" class="form-control" id="floatingInput" placeholder="Category Title" name="name" value="<?php echo $name; ?>">
                                <label for="floatingInput">Category Name</label>
                            </div>


                            <div class="mt-4 mb-3">
                                <textarea class="form-control" name="description" id="body">
                                    <?php echo $description; ?>
                                </textarea>
                            </div>

                            <button class="w-100 btn btn-primary" name="add-topic" type="submit">
                                Add Topic
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