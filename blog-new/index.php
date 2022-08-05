<?php
include('path.php');
include(ROOT_PATH . '/app/controllers/topics.php');

$posts = array();
$postTitle = 'Recent Posts';
/***
 * Get  all posts from a single topic
 * Search posts
 * select all the published posts
 */

if (isset($_GET['t_id'])) {
    $posts = getPostsByTopicId($_GET['t_id']);
    $postTitle = "Posts in '" . $_GET['name'] . "'";
} elseif (isset($_POST['search-term'])) {

    $posts = searchPosts($_POST['search-term']);
    $postTitle = "Search results for '" . $_POST['search-term'] . "'";
} else {
    $posts = getPublishedPosts();
}

// Select all Thread Topics
$thread_topic = array();
$thread_topics = selectAll('thread_topics');
foreach ($thread_topics as $key => $thread_topic) {
    $thread_id = $thread_topic['id'];
    $thread_topic_name = $thread_topic['name'];
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

    <title>NSUer's Blog</title>
</head>

<body>

    <!--header connection-->
    <?php
    include(ROOT_PATH . "/app/includes/header.php");
    include(ROOT_PATH . "/app/includes/messages.php");
    ?>


    <!-- main section -->
    <main class="container my-1">
        <!-- Discussion Section -->
        <section>
            <div>
                <h1>Discussions</h1>
                <p class="text-muted">
                    Discover the most outstanding discussion in all topics.
                </p>
            </div>
            <div class="row">
                <!-- first card -->
                <?php foreach ($thread_topics as $key => $thread_topic) : ?>
                    <div class="card mb-3 hvr-wobble-vertical" style="max-width: 440px;">
                        <div class="row g-2">
                            <div class="col-md-4 text-center mx-auto my-auto">
                                <?php if ($thread_topic['name'] == "News & Announcement") : ?>
                                    <i class="bi bi-megaphone-fill"></i>
                                <?php elseif ($thread_topic['name'] == 'General Discussion') : ?>
                                    <i class="bi bi-chat-left-quote-fill"></i>
                                <?php elseif ($thread_topic['name'] == 'Course Review') : ?>
                                    <i class="bi bi-book-half"></i>
                                <?php endif; ?>

                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <h5 class="card-title">
                                        <a href="discussion.php?id=<?php echo $thread_topic['id']; ?>" class="stretched-link">
                                            <?php echo $thread_topic['name']; ?>
                                        </a>
                                    </h5>
                                    <p class="card-text">
                                        <?php echo $thread_topic['description']; ?>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </section>

        <!-- Post Section -->
        <section>
            <div>
                <h1> <?php echo $postTitle; ?></h1>
                <p class="text-muted">
                    Discover the most outstanding articles in all topics.
                </p>
            </div>

            <!-- Recent Posts, Search & Category Section -->
            <div class="row g-5">
                <!-- Recent Blog Posts section-->
                <div class="col-md-8">

                    <?php foreach ($posts as $post) : ?>
                        <!-- post card -->

                        <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative bg-white">

                            <div class="col-md-4">
                                <img src="<?php echo Base_URL . 'assets/images/' . $post['image']; ?>" class="img-fluid rounded-start" alt="<?php echo $post['title']; ?>">
                            </div>
                            <div class="col p-4 d-flex flex-column position-static">
                                <div class="d-inline-block">
                                    <strong class="mb-2 text-primary">
                                        <?php echo ucfirst($post['username']); ?>
                                    </strong>
                                    <span> | </span>
                                    <strong class="mb-1 text-muted d-inline-block">
                                        <time class="timeago">
                                            <?php echo date('F j, Y', strtotime($post['created_at'])); ?>
                                        </time>
                                    </strong>
                                </div>
                                <h3 class="mb-0">
                                    <a href="single.php?id=<?php echo $post['id']; ?>" class="stretched-link ">
                                        <?php echo $post['title']; ?>
                                    </a>
                                </h3>

                            </div>

                        </div>
                    <?php endforeach; ?>
                </div>
                <!-- div search and category section -->
                <div class="col-md-4">
                    <div class="position-sticky" style="top: 1rem">
                        <div class="p-4 mb-2 bg-white rounded">
                            <form class="d-flex" action="index.php" method="post">
                                <input class="form-control me-2" type="search" name="search-term" placeholder="Search" aria-label="Search" />
                            </form>
                        </div>

                        <div class="p-4">
                            <h2>Category</h2>
                            <div class="card px-4">
                                <ol class="list-group list-group-flush">
                                    <?php foreach ($topics as $key => $topic) : ?>
                                        <li class="list-group-item">
                                            <a href="<?php echo Base_URL . 'index.php?t_id=' . $topic['id'] . '&name=' . $topic['name']; ?>" class="text-decoration-none nav-link">
                                                <?php echo $topic['name']; ?>
                                            </a>
                                        </li>
                                    <?php endforeach; ?>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>


    <!--footer connection-->
    <?php include(ROOT_PATH . "/app/includes/footer.php") ?>

</body>

</html>