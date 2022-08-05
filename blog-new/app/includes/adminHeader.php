  <!-- top header section -->
  <header class="bg-white">
      <nav class="navbar navbar-expand-lg navbar-light bg-white">
          <div class="container-fluid">
              <a class="navbar-brand" href="<?php echo Base_URL . 'index.php' ?>">
                  <svg class="bi" width="220" height="33">
                      <use xlink:href="#nsuers-blog" />
                  </svg>
              </a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
              </button>

              <div class="collapse navbar-collapse justify-content-end" id="navbarNavDropdown">
                  <ul class="navbar-nav">


                      <?php if (isset($_SESSION['id'])) : ?>


                          <li class="nav-item dropdown">

                              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                  <?php echo $_SESSION['username'] ?>
                              </a>
                              <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdownMenuLink">
                                  <li>
                                      <a class="dropdown-item" href="<?php echo Base_URL . 'logout.php' ?>">
                                          Logout
                                      </a>
                                  </li>
                              </ul>
                          </li>

                      <?php endif; ?>

                  </ul>
              </div>
          </div>
      </nav>
  </header>