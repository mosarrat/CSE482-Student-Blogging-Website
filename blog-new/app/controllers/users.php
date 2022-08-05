<?php

// import db connection
include_once(ROOT_PATH . "/app/database/db.php");

// import validation functions
include(ROOT_PATH . "/app/helpers/validateUsers.php");
include(ROOT_PATH . "/app/helpers/middleware.php");

// error array
$errors = array();

// assign variables
$id = $username = $admin = $email = $password = $passwordConf = $first_name = $last_name = $profile_tagline = $location = $about_me = $fb_link = $tw_link = $lk_link = $yt_link = "";

// table name
$table = "users";


// select users from database
$admin_users = selectAll($table);

/**
 * Login User from session
 */

function userLogin($user)
{
    $_SESSION['id'] = $user['id'];
    $_SESSION['username'] = $user['username'];
    $_SESSION['admin'] = $user['admin'];

    // set cookies for user for 7 days

    setcookie('id', $user['id'], time() + 60 * 60 * 24 * 7);
    setcookie('username', $user['username'], time() + 60 * 60 * 24 * 7);
    setcookie('admin', $user['admin'], time() + 60 * 60 * 24 * 7);

    $_SESSION['message'] = 'You are now logged in';
    $_SESSION['type'] = 'success';

    if ($_SESSION['admin']) {

        header('location: ' . Base_URL . 'admin/dashboard.php');
    } else {

        header('location: ' . Base_URL . 'index.php');
    }
    exit();
}


/**
 * Check if the signup form is submitted
 * If it is, then check if the form has errors
 * If yes, then covert the password to hash
 * Check if the user is admin or not
 * If yes, then redirect to admin dashboard
 * If no, then redirect to index page
 * If yes, then insert the user data into the database
 * If yes, then login the user
 */

if (isset($_POST['signup-btn']) || isset($_POST['create-admin'])) {

    $errors = validateUser($_POST);

    if (count($errors) === 0) {
        unset($_POST['signup-btn'], $_POST['passwordConf'], $_POST['create-admin']);

        $_POST['password'] = password_hash($_POST['password'], PASSWORD_DEFAULT);

        if (isset($_POST['admin'])) {
            $_POST['admin'] = 1;
            $user_id = create($table, $_POST);
            $_SESSION['message'] = 'Admin user created successfully';
            $_SESSION['type'] = 'success';
            header('location: ' . Base_URL . 'admin/users/index.php');
            exit();
        } else {
            $_POST['admin'] = 0;
            $user_id = create($table, $_POST);
            $user = selectOne($table, ['id' => $user_id]);
            userLogin($user);
        }
    } else {
        $username = $_POST['username'];
        $admin = isset($_POST['admin']) ? 1 : 0;
        $email = $_POST['email'];
        $password = $_POST['password'];
        $passwordConf = $_POST['passwordConf'];
    }
}


/**
 * Check if the login form is submitted
 * If it is, then check if the form has errors
 * If yes, then check if the user exists in the database
 * If yes, then login the user
 */

if (isset($_POST['login-btn'])) {
    $errors = validateLogin($_POST);

    if (count($errors) === 0) {
        $user = selectOne($table, ['username' => $_POST['username']]);

        if ($user && password_verify($_POST['password'], $user['password'])) {
            userLogin($user);
        } else {
            array_push($errors, 'Wrong Cardinal ID or Password');
        }
    }

    $username = $_POST['username'];
    $password = $_POST['password'];
}


/**
 * Delete the user
 */

if (isset($_GET['del_id'])) {
    adminOnly();
    $count = delete($table, $_GET['del_id']);
    $_SESSION['message'] = 'User deleted successfully';
    $_SESSION['type'] = 'success';
    header('location: ' . Base_URL . 'admin/users/index.php');
    exit();
}


/**
 * Fetch the user data from the database
 */

if (isset($_GET['id'])) {
    $user = selectOne($table, ['id' => $_GET['id']]);

    $id = $user['id'];
    $username = $user['username'];
    $admin = $user['admin'] === 1 ? 1 : 0;
    $email = $user['email'];
    $first_name = $user['first_name'];
    $last_name = $user['last_name'];
    $profile_tagline = $user['profile_tagline'];
    $location = $user['location'];
    $about_me = $user['about_me'];
    $fb_link = $user['fb_link'];
    $tw_link = $user['tw_link'];
    $lk_link = $user['lk_link'];
    $yt_link = $user['yt_link'];
}


/**
 * Update the user data
 */

if (isset($_POST['update-user'])) {
    adminOnly();
    $errors = validateUser($_POST);

    if (count($errors) == 0) {
        $id = $_POST['id'];
        unset($_POST['passwordConf'], $_POST['update-user'], $_POST['id']);

        $_POST['admin'] = 0;
        $_POST['password'] = password_hash($_POST['password'], PASSWORD_DEFAULT);


        $_POST['admin'] = isset($_POST['admin']) ? 1 : 0;
        $count = update($table, $id, $_POST);
        $_SESSION['message'] = 'Admin user updated successfully';
        $_SESSION['type'] = 'success';
        header('location: ' . Base_URL . 'admin/users/index.php');
        exit();
    } else {
        $username = $_POST['username'];
        $admin = isset($_POST['admin']) ? 1 : 0;
        $email = $_POST['email'];
        $password = $_POST['password'];
        $passwordConf = $_POST['passwordConf'];
    }
}

/**
 * Update the user data from user edit page
 */

if (isset($_POST['user-profile-update'])) {
    userOnly();

    if (count($errors) == 0) {
        $id = $_POST['id'];
        unset($_POST['user-profile-update'], $_POST['id']);
        // output($_POST);
        $_POST['admin'] = 0;
        $_POST['admin'] = isset($_POST['admin']) ? 1 : 0;
        $_POST['about_me'] = htmlentities($_POST['about_me']);
        $userProfile = update($table, $id, $_POST);
        $_SESSION['message'] = 'Profile updated successfully';
        $_SESSION['type'] = 'success';
        header('location: ' . Base_URL . 'profile.php?id=' . $id);
        exit();
    } else {
        $admin = isset($_POST['admin']) ? 1 : 0;
        $email = $_POST['email'];
        $first_name = $_POST['first_name'];
        $last_name = $_POST['last_name'];
        $profile_tagline = $_POST['profile_tagline'];
        $location = $_POST['location'];
        $about_me = $_POST['about_me'];
        $fb_link = $_POST['fb_link'];
        $tw_link = $_POST['tw_link'];
        $lk_link = $_POST['lk_link'];
        $yt_link = $_POST['yt_link'];
    }
}
