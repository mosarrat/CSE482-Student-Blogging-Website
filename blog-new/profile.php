<?php
include('path.php');
include(ROOT_PATH . '/app/controllers/user-posts.php');
// grab the info from the database
if (isset($_GET['id'])) {
  $user = selectOne('users', ['id' => $_GET['id']]);

  $full_name = $user['first_name'] . ' ' . $user['last_name'];
}

// grab the posts from the database where the user id is the same as the user id
// $posts = selectAll('posts', ['user_id' => $user['id']]);
$published_post = getPublishedPosts($user['id']);

// grab the threads from the database where the user id is the same as the user id
$threads = getPublishedThreads($user['id']);

// grab all thread topics
$thread_topics = selectAll('thread_topics');

userOnly();
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
  <title> <?php echo ucwords($full_name); ?> | NSUer's Blog</title>
</head>

<body>

  <!--header connection-->
  <?php
  include(ROOT_PATH . "/app/includes/header.php");
  include(ROOT_PATH . "/app/includes/messages.php");
  ?>

  <main class="container my-3">

    <div class="p-4 p-md-5 mb-4 rounded bg-white">
      <!-- Profile Info -->
      <div class="row g-1">
        <div class="col-md-10 px-0 text-center">
          <h1 class="display-4 fw-bold">
            <?php echo ucwords($full_name); ?>
          </h1>
          <p>
            @<?php echo $user['username']; ?>
          </p>
          <!-- profile tagline -->
          <p class="lead my-3">
            <?php echo ucfirst($user['profile_tagline']) ?>
          </p>
          <!-- profile meta  -->
          <div class="d-inline-block">
            <strong class="mb-2">
              <i class="bi bi-geo-alt-fill text-secondary" style="font-size: 1rem;">
              </i>
              <?php echo ucwords($user['location']); ?>
            </strong>
            <span> | </span>
            <strong class="mb-2 d-inline-block">
              <i class="bi bi-calendar3 text-secondary" style="font-size: 1rem;"></i>
              Joined <?php echo date('F j, Y', strtotime($user['created_at'])); ?>
            </strong>


          </div>
          <!-- social links -->
          <div>
            <ul class="list-unstyled list-inline">
              <li class="ms-3 list-inline-item">
                <a class="link-dark" href="<?php echo $user['fb_link'] ?>" target="_blank">
                  <svg class="bi" width="32" height="32" fill="currentColor">
                    <use xlink:href="#facebook" />
                  </svg>
                </a>
              </li>
              <li class="ms-3 list-inline-item">
                <a class="link-dark" href="<?php echo $user['tw_link'] ?>" target="_blank">
                  <svg class="bi" width="32" height="32" fill="currentColor">
                    <use xlink:href="#twitter" />
                  </svg>
                </a>
              </li>
              <li class="ms-3 list-inline-item">
                <a class="link-dark" href="<?php echo $user['lk_link'] ?>" target="_blank">
                  <svg class="bi" width="32" height="32" fill="currentColor">
                    <use xlink:href="#linkedin" />
                  </svg>
                </a>
              </li>
              <li class="ms-3 list-inline-item">
                <a class="link-dark" href="<?php echo $user['yt_link'] ?>" target="_blank">
                  <svg class="bi" width="32" height="32" fill="currentColor">
                    <use xlink:href="#youtube" />
                  </svg>
                </a>
              </li>

            </ul>
          </div>
        </div>

        <!-- Edit Profile button -->
        <div class="col-md-2 px-0">
          <a href="edit-profile.php?id=<?php echo $user['id']; ?>" class="btn btn-primary" role="button">
            <svg class="bi" width="16" height="16" fill="white">
              <use xlink:href="#edit-pencil" />
            </svg>
            Edit Profile
          </a>

        </div>
      </div>
    </div>

    <section>
      <div class="row g-5">
        <!-- left section -->
        <div class="col-md-4 ">
          <div class="position-sticky" style="top: 1rem">

            <div class="p-4 p-md-5 mb-4 rounded bg-white">

              <h3 class="fw-bold">About Me</h3>
              <p class="lead my-3">
                <?php echo html_entity_decode($user['about_me']); ?>
              </p>
            </div>

          </div>
        </div>
        <!-- right section -->
        <div class="col-md-8 ">
          <!-- article table -->
          <div class="row">
            <section class="p-4 p-md-5 mb-4 rounded bg-white">
              <h3>Articles</h3>
              <hr />
              <table class="table h6">
                <thead>
                  <tr>
                    <th scope="col">Post Title</th>
                    <th scope="col">Published</th>
                    <th scope="col" colspan="3">Actions</th>
                  </tr>
                </thead>
                <tbody>
                  <?php foreach ($published_post as $key => $post) : ?>
                    <tr>
                      <td scope="row">
                        <a href="<?php echo Base_URL . 'single.php?id=' . $post['id']; ?>" class="text-decoration-none">
                          <h6 class="text-dark">
                            <?php echo $post['title'] ?>
                          </h6>
                        </a>
                      </td>
                      <td>
                        <?php echo date('F j, Y', strtotime($post['created_at'])); ?>
                      </td>
                      <td>
                        <a href="<?php echo Base_URL . 'edit-post.php?id=' . $post['id']; ?>" class="badge bg-warning text-decoration-none">
                          Edit
                        </a>
                      </td>
                      <td>
                        <a href="<?php echo Base_URL . 'profile.php?id=' . $_SESSION['id'] . '&udel_id=' . $post['id']; ?>" class="badge bg-danger text-decoration-none">
                          Delete
                        </a>
                      </td>
                      <?php if ($post['published']) : ?>
                        <td>
                          <a href="<?php echo Base_URL . 'edit-post.php?published=0&p_id=' . $post['id']; ?>" class="badge bg-info text-decoration-none">
                            Unpublish
                          </a>
                        </td>

                      <?php else : ?>
                        <td>
                          <a href="<?php echo Base_URL . 'edit-post.php?published=1&p_id=' . $post['id']; ?>" class="badge bg-success text-decoration-none">
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

          <!-- thread table -->
          <div class="row">
            <section class="p-4 p-md-5 mb-4 rounded bg-white">
              <h3>Threads</h3>
              <hr />
              <table class="table h6">
                <thead>
                  <tr>
                    <th scope="col">Thread Title</th>
                    <th scope="col">Published</th>
                    <th scope="col" colspan="3">Actions</th>
                  </tr>
                </thead>
                <tbody>
                  <?php foreach ($threads as $key => $thread) : ?>
                    <tr>
                      <td scope="row">
                        <a href="<?php echo Base_URL . 'thread.php?id=' . $thread['id']; ?>" class="text-decoration-none">
                          <h6 class="text-dark">
                            <?php echo $thread['title'] ?>
                          </h6>
                        </a>
                      </td>
                      <td>
                        <?php echo date('F j, Y', strtotime($thread['created_at'])); ?>
                      </td>
                      <td>
                        <a href="<?php echo Base_URL . 'edit-thread.php?id=' . $thread['id']; ?>" class="badge bg-warning text-decoration-none">
                          Edit
                        </a>
                      </td>
                      <td>
                        <a href="<?php echo Base_URL . 'profile.php?id=' . $_SESSION['id'] . '&udel_id=' . $thread['id']; ?>" class="badge bg-danger text-decoration-none">
                          Delete
                        </a>
                      </td>
                      <?php if ($thread['published']) : ?>
                        <td>
                          <a href="<?php echo Base_URL . 'edit-thread.php?published=0&t_id=' . $thread['id']; ?>" class="badge bg-info text-decoration-none">
                            Unpublish
                          </a>
                        </td>

                      <?php else : ?>
                        <td>
                          <a href="<?php echo Base_URL . 'edit-thread.php?published=1&t_id=' . $thread['id']; ?>" class="badge bg-success text-decoration-none">
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
        </div>
      </div>
    </section>

  </main>

  <!--footer connection-->
  <?php include(ROOT_PATH . "/app/includes/footer.php") ?>


</body>

</html>