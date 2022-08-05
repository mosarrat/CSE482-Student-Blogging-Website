<?php

include(ROOT_PATH . "/app/database/db.php");
include(ROOT_PATH . "/app/helpers/validateThread.php");
include(ROOT_PATH . "/app/helpers/middleware.php");


// errors array
$errors = array();

// Select the table
$table = 'threads';

// table fields
$id = '';
$title = '';
$body = '';
$thread_topic_id = '';
$published = '';


/**
 * Load all the thread_topics
 */
$thread_topics = selectAll('thread_topics');

/**
 * Load all the threads
 */
$threads = selectAll($table);



/**
 * Show data in the edit form
 */

if (isset($_GET['id'])) {
    $thread = selectOne($table, ['id' => $_GET['id']]);
    $id = $thread['id'];
    $title = $thread['title'];
    $body = $thread['body'];
    $thread_topic_id = $thread['thread_topic_id'];
    $published = $thread['published'];
    $update_at = $thread['update_at'];
}




/**
 * Inset thread into database as normal user
 * 
 */

if (isset($_POST['create-user-thread'])) {
    userOnly();

    $errors = validateThread($_POST);


    if (count($errors) === 0) {
        unset($_POST['create-user-thread']);
        $_POST['user_id'] = $_SESSION['id'];
        $_POST['body'] = htmlentities($_POST['body']);
        $_POST['published'] = isset($_POST['published']) ? 1 : 0;

        $thread_id = create($table, $_POST);
        $_SESSION['message'] = "Thread added successfully";
        $_SESSION['type'] = "success";
        header("Location: " . Base_URL . "index.php");
        exit();
    } else {
        $title = $_POST['title'];
        $body = $_POST['body'];
        $thread_topic_id = $_POST['thread_topic_id'];
        $published = isset($_POST['published']) ? 1 : 0;
    }
}


/**
 * Update thread into database as normal user
 * 
 */

if (isset($_POST['update-user-thread'])) {
    userOnly();
    $errors = validateThread($_POST);


    if (count($errors) === 0) {
        $id = $_POST['id'];
        unset($_POST['update-user-thread'], $_POST['id']);
        $_POST['user_id'] = $_SESSION['id'];
        $_POST['body'] = htmlentities($_POST['body']);
        $_POST['published'] = isset($_POST['published']) ? 1 : 0;

        $thread_id = update($table, $id, $_POST);
        $_SESSION['message'] = "Thread updated successfully";
        $_SESSION['type'] = "success";
        header("Location: " . Base_URL . "profile.php?id=" . $_SESSION['id']);
        exit();
    } else {
        $title = $_POST['title'];
        $body = $_POST['body'];
        $thread_topic_id = $_POST['thread_topic_id'];
        $published = isset($_POST['published']) ? 1 : 0;
    }
}


/**
 * Delete thread from database
 * 
 */
if (isset($_GET['del_id'])) {
    userOnly();
    $id = $_GET['del_id'];
    $count = delete($table, $id);
    $_SESSION['message'] = "Post deleted successfully";
    $_SESSION['type'] = "success";
    header("Location: " . Base_URL . "profile.php?id=" . $_SESSION['id']);
    exit();
}


/**
 * publish or unpublish thread from the list for the user
 */

if (isset($_GET['published']) && isset($_GET['t_id'])) {
    userOnly();
    $t_id = $_GET['t_id'];
    $published = $_GET['published'];
    $count = update($table, $t_id, ['published' => $published]);
    $_SESSION['message'] = "Thread published successfully";
    $_SESSION['type'] = "success";
    header("Location: " . Base_URL . "profile.php?id=" . $_SESSION['id']);
    exit();
}
