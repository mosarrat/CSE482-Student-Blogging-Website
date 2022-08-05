<?php
include('path.php');
include(ROOT_PATH . '/app/controllers/users.php');
// grab the info from the database
if (isset($_GET['id'])) {
    $user = selectOne('users', ['id' => $_GET['id']]);
    // output($user);
}

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
    <title>Edit Profile | NSUer's Blog</title>
</head>

<body>

    <!--header connection-->
    <?php
    include(ROOT_PATH . "/app/includes/header.php");
    include(ROOT_PATH . "/app/includes/messages.php");
    ?>

    <main class="form-profile">
        <form action="edit-profile.php" id="form" method="post" class="mt-5">
            <h1 class="h3 mb-3 fw-normal">Edit Profile</h1>

            <input type="hidden" name="id" value="<?php echo $id; ?>">

            <div class="form-floating">
                <input type="text" class="form-control" id="floatingInput" placeholder="First Name" name="first_name" value="<?php echo $user['first_name']; ?>">
                <label for="floatingInput">First Name</label>
            </div>
            <div class="form-floating mt-2">
                <input type="text" class="form-control" id="floatingInput" placeholder="Last Name" name="last_name" value="<?php echo $user['last_name']; ?>">
                <label for="floatingInput">Last Name</label>
            </div>
            <div class="form-floating mt-2">
                <input type="email" class="form-control" id="floatingInput" placeholder="johndoe@northsouth.edu" name="email" value="<?php echo $user['email']; ?>">
                <label for="floatingInput">Email address</label>
            </div>
            <div class="form-floating mt-2">
                <input type="text" class="form-control" id="floatingInput" placeholder="profile tagline" name="profile_tagline" value="<?php echo $user['profile_tagline']; ?>">
                <label for="floatingInput">Profile Tagline</label>
            </div>
            <div class="form-floating mt-2">
                <input type="text" class="form-control" id="floatingInput" placeholder="Dhaka, Bangladesh" name="location" value="<?php echo $user['location']; ?>">
                <label for="floatingInput">Location</label>
            </div>
            <div class="form-floating mt-2">
                <textarea name="about_me" class="form-control" placeholder="I'm not a developer" id="floatingInput">
                        <?php echo html_entity_decode($user['about_me']); ?>
                </textarea>
                <label for=" floatingInput">About Me</label>
            </div>

            <div class="form-floating mt-2">
                <input type="url" class="form-control" id="floatingInput" placeholder="https://www.facebook.com/johndoe" name="fb_link" value="<?php echo $user['fb_link']; ?>">
                <label for="floatingInput">Facebook</label>
            </div>
            <div class="form-floating mt-2">
                <input type="url" class="form-control" id="floatingInput" placeholder="https://www.linkedin.com/johndoe" name="lk_link" value="<?php echo $user['lk_link']; ?>">
                <label for="floatingInput">LinkedIn</label>
            </div>
            <div class="form-floating mt-2">
                <input type="url" class="form-control" id="floatingInput" placeholder="https://www.twitter.com/johndoe" name="tw_link" value="<?php echo $user['tw_link']; ?>">
                <label for="floatingInput">Twitter</label>
            </div>
            <div class="form-floating mt-2 mb-3">
                <input type="url" class="form-control" id="floatingInput" placeholder="https://www.youtube.com/johndoe" name="yt_link" value="<?php echo $user['yt_link']; ?>">
                <label for="floatingInput">Youtube</label>
            </div>


            <button class="w-100 btn btn-lg btn-primary" type="submit" name="user-profile-update">Update Profile</button>
        </form>
    </main>

    <!--footer connection-->
    <?php include(ROOT_PATH . "/app/includes/footer.php") ?>

    <!--custom scrip-->
    <script src="assets/js/Validation.js"></script>
</body>

</html>