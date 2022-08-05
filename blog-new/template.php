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

    <!-- header section -->
    <header class="bg-white">
        <nav class="navbar navbar-expand-lg navbar-light bg-white">
            <div class="container">
                <a class="navbar-brand" href="index.html">
                    <img src="assets/images/NSUers-Blog.svg" alt="logo" class="logo" />
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-end" id="navbarNavDropdown">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" href="#">Home</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Create
                            </a>
                            <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdownMenuLink">
                                <li><a class="dropdown-item" href="#">Blog</a></li>
                                <li><a class="dropdown-item" href="#">Thread</a></li>
                            </ul>
                        </li>

                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Username
                            </a>
                            <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdownMenuLink">
                                <li><a class="dropdown-item" href="#">Dashboard</a></li>
                                <li><a class="dropdown-item" href="#">Profile</a></li>
                                <li>
                                    <a class="dropdown-item" href="#">Logout</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>


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
                <div class="card mb-3 hvr-wobble-vertical" style="max-width: 440px;">
                    <div class="row g-2">
                        <div class="col-md-4 text-center mx-auto my-auto">
                            <i class="bi bi-megaphone-fill"></i>
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title"><a href="#" class="stretched-link">News & Announcements</a></h5>
                                <p class="card-text">Latest News, Updates and General Rules</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- second card -->
                <div class="card mb-3 hvr-wobble-vertical" style="max-width: 440px;">
                    <div class="row g-2">
                        <div class="col-md-4 text-center mx-auto my-auto">
                            <i class="bi bi-chat-left-quote-fill"></i>
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title"><a href="#" class="stretched-link">General Discussion</a></h5>
                                <p class="card-text">Ask a question, start a discussion</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- third card -->
                <div class="card mb-3 hvr-wobble-vertical" style="max-width: 440px;">
                    <div class="row g-2">
                        <div class="col-md-4 text-center mx-auto my-auto">
                            <i class="bi bi-book-half"></i>
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title"><a href="#" class="stretched-link">Courese Review</a></h5>
                                <p class="card-text">Review courses that you want to study</p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </section>

        <!-- Post Section -->
        <section>
            <div>
                <h1>Recent Articles</h1>
                <p class="text-muted">
                    Discover the most outstanding articles in all topics.
                </p>
            </div>

            <!-- Recent Posts, Search & Category Section -->
            <div class="row g-5">
                <!-- Recent Blog Posts section-->
                <div class="col-md-8">

                    <!-- post card -->

                    <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative bg-white">

                        <div class="col-md-4">
                            <img src="assets/images/post.jpg" class="img-fluid rounded-start" alt="">
                        </div>
                        <div class="col p-4 d-flex flex-column position-static">
                            <div class="d-inline-block">
                                <strong class="mb-2 text-primary">World</strong>
                                <span> | </span>
                                <strong class="mb-1 text-muted d-inline-block">
                                    <time class="timeago">
                                        January 1, 2020
                                    </time>
                                </strong>
                            </div>
                            <h2 class="mb-0">
                                <a href="#" class="stretched-link ">19 GitHub Repositories to Make you a 10x Developer</a>
                            </h2>
                        </div>

                    </div>

                </div>
                <!-- div search and category section -->
                <div class="col-md-4">
                    <div class="position-sticky" style="top: 1rem">
                        <div class="p-4 mb-2 bg-white rounded">
                            <form class="d-flex">
                                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" />
                            </form>
                        </div>

                        <div class="p-4">
                            <h2>Category</h2>
                            <div class="card px-4">
                                <ol class="list-group list-group-flush">
                                    <li class="list-group-item">
                                        <a href="#" class="text-decoration-none nav-link">March 2021</a>
                                    </li>
                                    <li class="list-group-item">
                                        <a href="#" class="text-decoration-none text-secondary nav-link">February 2021</a>
                                    </li>
                                    <li class="list-group-item">
                                        <a href="#" class="text-decoration-none text-secondary nav-link">January 2021</a>
                                    </li>
                                    <li class="list-group-item">
                                        <a href="#" class="text-decoration-none text-secondary nav-link">December 2020</a>
                                    </li>
                                    <li class="list-group-item">
                                        <a href="#" class="text-decoration-none text-secondary nav-link">November 2020</a>
                                    </li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>


    <!-- SVG Sprite Icons -->
    <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
        <symbol id="facebook" viewBox="0 0 16 16">
            <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z" />
        </symbol>


        <symbol id="twitter" viewBox="0 0 16 16">
            <path d="M5.026 15c6.038 0 9.341-5.003 9.341-9.334 0-.14 0-.282-.006-.422A6.685 6.685 0 0 0 16 3.542a6.658 6.658 0 0 1-1.889.518 3.301 3.301 0 0 0 1.447-1.817 6.533 6.533 0 0 1-2.087.793A3.286 3.286 0 0 0 7.875 6.03a9.325 9.325 0 0 1-6.767-3.429 3.289 3.289 0 0 0 1.018 4.382A3.323 3.323 0 0 1 .64 6.575v.045a3.288 3.288 0 0 0 2.632 3.218 3.203 3.203 0 0 1-.865.115 3.23 3.23 0 0 1-.614-.057 3.283 3.283 0 0 0 3.067 2.277A6.588 6.588 0 0 1 .78 13.58a6.32 6.32 0 0 1-.78-.045A9.344 9.344 0 0 0 5.026 15z" />
        </symbol>

        <symbol id="youtube" viewBox="0 0 16 16">
            <path d="M8.051 1.999h.089c.822.003 4.987.033 6.11.335a2.01 2.01 0 0 1 1.415 1.42c.101.38.172.883.22 1.402l.01.104.022.26.008.104c.065.914.073 1.77.074 1.957v.075c-.001.194-.01 1.108-.082 2.06l-.008.105-.009.104c-.05.572-.124 1.14-.235 1.558a2.007 2.007 0 0 1-1.415 1.42c-1.16.312-5.569.334-6.18.335h-.142c-.309 0-1.587-.006-2.927-.052l-.17-.006-.087-.004-.171-.007-.171-.007c-1.11-.049-2.167-.128-2.654-.26a2.007 2.007 0 0 1-1.415-1.419c-.111-.417-.185-.986-.235-1.558L.09 9.82l-.008-.104A31.4 31.4 0 0 1 0 7.68v-.123c.002-.215.01-.958.064-1.778l.007-.103.003-.052.008-.104.022-.26.01-.104c.048-.519.119-1.023.22-1.402a2.007 2.007 0 0 1 1.415-1.42c.487-.13 1.544-.21 2.654-.26l.17-.007.172-.006.086-.003.171-.007A99.788 99.788 0 0 1 7.858 2h.193zM6.4 5.209v4.818l4.157-2.408L6.4 5.209z" />
        </symbol>
    </svg>

    <!-- footer -->
    <div class="bg-white">
        <div class="container py-5">
            <footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top">
                <p class="col-md-5 mb-0 text-muted">&copy;
                    <a href="https://github.com/kmhmubin/NSUers-Blog" class=" link-dark text-decoration-none" target="_blank">
                        Designed By CSE482 Project Team.
                    </a>
                    All rights reserved.
                </p>

                <a href="/" class="mb-3 mb-md-0 me-md-auto link-dark text-decoration-none">
                    <img src="assets/images/NSUers-Blog.svg" alt="nsuer's blog logo" class="logo">
                </a>

                <ul class="list-unstyled d-flex">
                    <li class="ms-3">
                        <a class="link-dark" href="https://twitter.com/NorthSouthU" target="_blank">
                            <svg class="bi" width="24" height="24">
                                <use xlink:href="#twitter" />
                            </svg>
                        </a>
                    </li>
                    <li class="ms-3">
                        <a class="link-dark" href="https://www.youtube.com/NorthSouthUniversity" target="_blank">
                            <svg class="bi" width="24" height="24">
                                <use xlink:href="#youtube" />
                            </svg>
                        </a>
                    </li>
                    <li class="ms-3">
                        <a class="link-dark" href="https://www.facebook.com/NorthSouthUniversity" target="_blank">
                            <svg class="bi" width="24" height="24">
                                <use xlink:href="#facebook" />
                            </svg>
                        </a>
                    </li>
                </ul>
            </footer>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>