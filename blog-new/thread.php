<?php
include('path.php');
include(ROOT_PATH . '/app/controllers/threads.php');

/**
 * Get the posts from the database
 */

if (isset($_GET['id'])) {
  $thread = selectOne('threads', ['id' => $_GET['id']]);
  // output($post);
}


// Select all topics

$topics = selectAll('thread_topics');

// Grab the User's data
$user = selectOne('users', ['id' => $thread['user_id']]);

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

  <title> <?php echo $thread['title']; ?> | NSUer's Blog</title>
</head>

<body>

  <!--header connection-->
  <?php
  include(ROOT_PATH . "/app/includes/header.php");
  include(ROOT_PATH . "/app/includes/messages.php");
  ?>

  <main class="container my-3">

    <section class="p-4 p-md-5 mb-4 text-white rounded bg-dark">
      <div class="col-md-10 px-0">
        <h3 class="display-3">
          <?php echo ucwords($thread['title']); ?>
        </h3>
        <p class="lead my-3">
          <!-- <?php echo $thread_topic_description ?> -->
        </p>

        <h6 class="meta my-3">
          By
          <strong class="text-primary">
            <?php echo ucfirst($user['username']); ?>
          </strong>
          <span> <i class="bi bi-dash-lg"></i>
          </span>
          <?php echo date('F j, Y', strtotime($thread['update_at'])); ?>
        </h6>
      </div>
    </section>

    <article class="blog-post my-3 p-4 p-md-5 mb-4 rounded bg-white">
      <?php echo html_entity_decode($thread['body']); ?>
    </article>

    <section class="p-4 p-md-5 mb-4 rounded bg-white">
      <h4 class="p-2">Discussions</h4>
      <hr>
      <!-- Comment Form -->
      <form>
        <div id="error_status" class="text-danger"></div>
        <input type="hidden" name="thread_id" id="thread_id" value="<?php echo $thread["id"]; ?>">
        <textarea class="form-control" name="message" id="comment_textbox" rows="3" placeholder="Write a comment..."></textarea>
        <div class="mt-2">
          <button class="btn btn-primary" id="add_comment_button" type="button">
            Comment
          </button>
        </div>
      </form>

      <!-- display comments -->
      <div class="my-2" id="comment-container">
        <input type="hidden" name="thread_id" id="thread_id" value="<?php echo $thread['id']; ?>">
      </div>


    </section>
  </main>


  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="assets/js/jquery.timeago.js"></script>
  <script src="assets/js/thread-comment.js"></script>

  <!--footer connection-->
  <?php include(ROOT_PATH . "/app/includes/footer.php") ?>

</body>

</html>