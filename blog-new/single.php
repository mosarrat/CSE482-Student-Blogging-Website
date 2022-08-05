<?php
include('path.php');
include(ROOT_PATH . '/app/controllers/posts.php');

/**
 * Get the posts from the database
 */

if (isset($_GET['id'])) {
  $post = selectOne('posts', ['id' => $_GET['id']]);
}

// Select all topics

$topics = selectAll('topics');

// Select all comments where post id same
$post_comments = selectAll('post_comments', ['post_id' => $post['id']]);
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
  <main class="container my-2">
    <!-- Post Section -->
    <section>
      <!-- Recent Posts, Category & Comment Section -->
      <div class="row g-5">
        <!-- blog post -->
        <div class="col-md-8 ">
          <div class="row bg-white rounded">
            <!-- post meta -->
            <div class="p-4 p-md-5 text-white rounded bg-dark">
              <div class="px-0">
                <h4 class="display-4">
                  <?php echo ucwords($post['title']); ?>
                </h4>
                <p class="lead my-3">
                  <!-- <?php echo $thread_topic_description ?> -->
                </p>

                <h6 class="meta my-3">
                  By
                  <?php foreach ($users as $key => $user) :  ?>
                    <?php if ($post['user_id'] == $user['id']) : ?>
                      <strong class="text-primary">
                        <?php echo ucfirst($user['username']); ?>
                      </strong>
                    <?php endif; ?>
                  <?php endforeach; ?>

                  <span> <i class="bi bi-dash-lg"></i>
                  </span>
                  <?php echo date('F j, Y', strtotime($post['created_at'])); ?>
                </h6>
              </div>
            </div>

            <article class="blog-post my-3">
              <?php echo html_entity_decode($post['body']); ?>
            </article>
          </div>
          <div class="mb-3 p-3"></div>
          <!-- Display Comments -->
          <div class="row bg-white rounded">
            <h4 class="p-2">Comments</h4>
            <hr>
            <div class="my-2" id="comment-container">
              <input type="hidden" name="post_id" id="post_id" value="<?php echo $post['id']; ?>">

            </div>

          </div>
        </div>
        <!-- left sectiong -->
        <div class=" col-md-4">
          <div class="position-sticky" style="top: 1rem">
            <!-- Category list -->
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

            <!-- Comment Form -->
            <div class="p-4 rounded">
              <div class="card">
                <div class="card-body">
                  <form>
                    <div id="error_status" class="text-danger"></div>
                    <input type="hidden" name="post_id" id="post_id" value="<?php echo $post["id"]; ?>">
                    <textarea class="form-control" name="message" id="comment_textbox" rows="3" placeholder="Write a comment..."></textarea>
                    <div class="d-grid gap-2 mt-4">
                      <button class="btn btn-primary" id="add_comment_button" type="button">
                        Comment
                      </button>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </main>

  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="assets/js/comment.js"></script>
  <script src="assets/js/jquery.timeago.js"></script>

  <!--footer connection-->
  <?php include(ROOT_PATH . "/app/includes/footer.php") ?>


</body>

</html>