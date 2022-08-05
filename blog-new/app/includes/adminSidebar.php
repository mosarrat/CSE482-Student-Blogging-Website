 <nav id="navbarNavDropdown" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
     <div class="position-sticky pt-3">
         <ul class="nav flex-column">
             <li class="nav-item">
                 <a class="nav-link active" aria-current="page" href="<?php echo Base_URL . 'admin/dashboard.php'; ?>">
                     Dashboard
                 </a>
             </li>
             <li class="nav-item">
                 <a class="nav-link" aria-current="page" href="<?php echo Base_URL . 'index.php'; ?>">
                     View Website
                 </a>
             </li>
         </ul>

         <!-- all functions -->
         <ul class="list-unstyled ps-0">
             <li class="mb-1">
                 <button class="btn btn-toggle align-items-center rounded collapsed" data-bs-toggle="collapse" data-bs-target="#user-collapse" aria-expanded="true">
                     User
                 </button>
                 <div class="collapse show" id="user-collapse">
                     <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                         <li>
                             <a href="<?php echo Base_URL . 'admin/users/index.php'; ?>" class="nav-link">
                                 All User List
                             </a>
                         </li>
                         <li>
                             <a href="<?php echo Base_URL . 'admin/users/create.php'; ?>" class="nav-link">
                                 Create User
                             </a>
                         </li>
                     </ul>
                 </div>
             </li>
             <li class="mb-1">
                 <button class="btn btn-toggle align-items-center rounded collapsed" data-bs-toggle="collapse" data-bs-target="#blog-post-collapse" aria-expanded="false">
                     Blog Post
                 </button>
                 <div class="collapse" id="blog-post-collapse">
                     <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                         <li><a href="<?php echo Base_URL . 'admin/posts/index.php'; ?>" class="nav-link">
                                 All Blog Post List
                             </a>
                         </li>
                         <li>
                             <a href="<?php echo Base_URL . 'admin/posts/create.php'; ?>" class="nav-link">
                                 Create Post
                             </a>
                         </li>
                     </ul>
                 </div>
             </li>
             <li class="mb-1">
                 <button class="btn btn-toggle align-items-center rounded collapsed" data-bs-toggle="collapse" data-bs-target="#blog-post-category-collapse" aria-expanded="false">
                     Post Category
                 </button>
                 <div class="collapse" id="blog-post-category-collapse">
                     <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                         <li>
                             <a href="<?php echo Base_URL . 'admin/topic/index.php'; ?>" class="nav-link">
                                 All Post Category List
                             </a>
                         </li>
                         <li>
                             <a href="<?php echo Base_URL . 'admin/topic/create.php'; ?>" class="nav-link">
                                 Create Post Category
                             </a>
                         </li>
                     </ul>
                 </div>
             </li>
             <li class="mb-1">
                 <button class="btn btn-toggle align-items-center rounded collapsed" data-bs-toggle="collapse" data-bs-target="#post-comment-collapse" aria-expanded="false">
                     Post Comments
                 </button>
                 <div class="collapse" id="post-comment-collapse">
                     <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                         <li><a href="<?php echo Base_URL . 'admin/post-comment/index.php'; ?>" class="nav-link">
                                 All Post Comments List
                             </a>
                         </li>
                     </ul>
                 </div>
             </li>
             <li class="mb-1">
                 <button class="btn btn-toggle align-items-center rounded collapsed" data-bs-toggle="collapse" data-bs-target="#discussion-thread-collapse" aria-expanded="false">
                     Discussion Thread
                 </button>
                 <div class="collapse" id="discussion-thread-collapse">
                     <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                         <li>
                             <a href="<?php echo Base_URL . 'admin/threads/index.php'; ?>" class="nav-link">
                                 All Discussion Thread List
                             </a>
                         </li>
                         <li>
                             <a href="<?php echo Base_URL . 'admin/threads/create.php'; ?>" class="nav-link">
                                 Create Discussion Thread
                             </a>
                         </li>
                     </ul>
                 </div>
             </li>
             <li class="mb-1">
                 <button class="btn btn-toggle align-items-center rounded collapsed" data-bs-toggle="collapse" data-bs-target="#thread-category-collapse" aria-expanded="false">
                     Thread Category
                 </button>
                 <div class="collapse" id="thread-category-collapse">
                     <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                         <li>
                             <a href="<?php echo Base_URL . 'admin/thread-topics/index.php'; ?>" class="nav-link">
                                 All Thread Category List
                             </a>
                         </li>
                         <li>
                             <a href="<?php echo Base_URL . 'admin/thread-topics/create.php'; ?>" class="nav-link">
                                 Create Thread Category
                             </a>
                         </li>
                     </ul>
                 </div>
             </li>
             <li class="mb-1">
                 <button class="btn btn-toggle align-items-center rounded collapsed" data-bs-toggle="collapse" data-bs-target="#thread-comment-collapse" aria-expanded="false">
                     Thread Comments
                 </button>
                 <div class="collapse" id="thread-comment-collapse">
                     <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                         <li>
                             <a href="<?php echo Base_URL . 'admin/thread-comments/index.php'; ?>" class="nav-link">
                                 All Thread Comments List
                             </a>
                         </li>
                     </ul>
                 </div>
             </li>

         </ul>

     </div>
 </nav>