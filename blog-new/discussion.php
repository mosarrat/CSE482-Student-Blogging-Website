<?php
include('path.php');
include(ROOT_PATH . '/app/controllers/threads.php');


/**
 * Get all published threads from threads table by thread topic id
 * 
 */

$threads = array();
$threadTitle = 'Discussion Board';

$thread_topics = selectOne('thread_topics', ['id' => $_GET['id']]);
$thread_topic_id = $thread_topics['id'];
$thread_topic_title = $thread_topics['name'];
$thread_topic_description = $thread_topics['description'];

if (isset($thread_topic_id)) {
    $threads = getThreadsByThreadTopicId($thread_topic_id);
    $threadTitle = $thread_topic_title;
} else {
    $threads = getPublishedThreads();
}



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
    <title> <?php echo $threadTitle; ?> | NSUer's Blog</title>
</head>

<body>

    <!--header connection-->
    <?php include(ROOT_PATH . "/app/includes/header.php") ?>

    <main class="container my-3 h-100">
        <section class="p-4 p-md-5 mb-4 text-white rounded bg-dark">
            <div class="col-md-6 px-0">
                <h3 class="display-3">
                    <?php echo $threadTitle ?>
                </h3>
                <p class="lead my-3">
                    <?php echo $thread_topic_description ?>
                </p>
            </div>
        </section>

        <section class="p-4 p-md-5 mb-4 rounded bg-white">
            <table class="table h6">
                <thead>
                    <tr>
                        <th scope="col">Title</th>
                        <th scope="col">Thread Topic</th>
                        <th scope="col">Author</th>
                        <th scope="col">Update at</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($threads as $thread) : ?>
                        <tr>
                            <td scope="row">
                                <a href="thread.php?id=<?php echo $thread['id']; ?>" class="text-decoration-none">
                                    <h6 class="text-dark">
                                        <?php echo $thread['title'] ?>
                                    </h6>
                                </a>
                            </td>
                            <td>
                                <?php echo $thread_topic_title; ?>
                            </td>
                            <td>
                                <?php echo ucfirst($thread['username']); ?>
                            </td>
                            <td>
                                <time class="timeago" datetime="<?php echo $thread['update_at']; ?>"></time>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>

        </section>

    </main>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="assets/js/jquery.timeago.js"></script>
    <script>
        jQuery(document).ready(function() {
            jQuery("time.timeago").timeago();
        });
    </script>

    <!--footer connection-->
    <?php include(ROOT_PATH . "/app/includes/footer.php") ?>


</body>

</html>