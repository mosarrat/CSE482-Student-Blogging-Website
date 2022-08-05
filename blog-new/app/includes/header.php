<!-- header section -->
<header class="bg-white">
  <nav class="navbar navbar-expand-lg navbar-light bg-white">
    <div class="container">
      <a class="navbar-brand" href="<?php echo Base_URL . 'index.php' ?>">
        <img src="assets/images/NSUers-Blog.svg" alt="logo" class="logo" />
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse justify-content-end" id="navbarNavDropdown">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" href="<?php echo Base_URL . 'index.php' ?>">Home</a>
          </li>

          <?php if (isset($_SESSION['id'])) : ?>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Create
              </a>
              <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdownMenuLink">
                <li>
                  <a class="dropdown-item" href="<?php echo Base_URL . 'add-post.php'; ?>">
                    Blog
                  </a>
                </li>
                <li>
                  <a class="dropdown-item" href="<?php echo Base_URL . 'add-thread.php'; ?>">
                    Thread
                  </a>
                </li>
              </ul>
            </li>

            <li class="nav-item dropdown">

              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                <?php echo $_SESSION['username'] ?>
              </a>
              <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdownMenuLink">
                <?php if ($_SESSION['admin']) : ?>
                  <li>
                    <a class="dropdown-item" href="<?php echo Base_URL . 'admin/dashboard.php' ?>">
                      Dashboard

                    </a>
                  </li>
                <?php endif; ?>
                <li>
                  <a class="dropdown-item" href="profile.php?id=<?php echo $_SESSION['id']; ?>">
                    Profile

                  </a>
                </li>
                <li>
                  <a class="dropdown-item" href="<?php echo Base_URL . 'logout.php' ?>">
                    Logout
                  </a>
                </li>
              </ul>
            </li>
          <?php else : ?>
            <li class="nav-item">
              <a class="nav-link" href="<?php echo Base_URL . 'signup.php' ?>">
                Sign Up
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?php echo Base_URL . 'login.php' ?>">
                Login
              </a>
            </li>
          <?php endif; ?>
        </ul>
      </div>
    </div>
  </nav>
</header>