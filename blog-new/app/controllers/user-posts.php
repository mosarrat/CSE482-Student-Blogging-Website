<?php

include(ROOT_PATH . "/app/database/db.php");
include(ROOT_PATH . "/app/helpers/validatePost.php");
include(ROOT_PATH . "/app/helpers/middleware.php");


// errors array
$errors = array();

// Select the table
$table = 'posts';

// table fields
$id = '';
$title = '';
$body = '';
$topic_id = '';
$published = '';


/**
 * Load all the topics
 */
$topics = selectAll('topics');

/**
 * Load all the posts
 */
$posts = selectAll($table);



/**
 * Show data in the edit form
 */

if (isset($_GET['id'])) {
    $post = selectOne($table, ['id' => $_GET['id']]);
    $id = $post['id'];
    $title = $post['title'];
    $body = $post['body'];
    $topic_id = $post['topic_id'];
    $published = $post['published'];
}



/**
 * Inset post into database as normal user
 * 
 */

if (isset($_POST['create-post'])) {
    userOnly();

    $errors = validatePost($_POST);

    // image upload
    if (!empty($_FILES['image']['name'])) {
        $image_name = time() . '_' . $_FILES['image']['name'];
        $destination = ROOT_PATH . '/assets/images/' . $image_name;
        $result = move_uploaded_file($_FILES['image']['tmp_name'], $destination);

        if ($result) {
            $_POST['image'] = $image_name;
        } else {
            array_push($errors, "Failed to upload image");
        }
    } else {
        array_push($errors, 'Image is required');
    }


    if (count($errors) === 0) {
        unset($_POST['create-post']);
        $_POST['user_id'] = $_SESSION['id'];
        $_POST['body'] = htmlentities($_POST['body']);
        $_POST['published'] = isset($_POST['published']) ? 1 : 0;

        $post_id = create($table, $_POST);
        $_SESSION['message'] = "Post added successfully";
        $_SESSION['type'] = "success";
        header("Location: " . Base_URL . "index.php");
        exit();
    } else {
        $title = $_POST['title'];
        $body = $_POST['body'];
        $topic_id = $_POST['topic_id'];
        $published = isset($_POST['published']) ? 1 : 0;
    }
}



/**
 * Update post into database as user
 * 
 */

if (isset($_POST['update-blog-post'])) {
    userOnly();
    $errors = validatePost($_POST);

    // image upload
    if (!empty($_FILES['image']['name'])) {
        $image_name = time() . '_' . $_FILES['image']['name'];
        $destination = ROOT_PATH . '/assets/images/' . $image_name;
        $result = move_uploaded_file($_FILES['image']['tmp_name'], $destination);

        if ($result) {
            $_POST['image'] = $image_name;
        } else {
            array_push($errors, "Failed to upload image");
        }
    } else {
        array_push($errors, 'Image is required');
    }


    if (count($errors) === 0) {
        $id = $_POST['id'];
        unset($_POST['update-blog-post'], $_POST['id']);
        $_POST['user_id'] = $_SESSION['id'];
        $_POST['body'] = htmlentities($_POST['body']);
        $_POST['published'] = isset($_POST['published']) ? 1 : 0;

        $post_id = update($table, $id, $_POST);
        $_SESSION['message'] = "Post updated successfully";
        $_SESSION['type'] = "success";
        header("Location: " . Base_URL . "profile.php?id=" . $_SESSION['id']);
        exit();
    } else {
        $title = $_POST['title'];
        $body = $_POST['body'];
        $topic_id = $_POST['topic_id'];
        $published = isset($_POST['published']) ? 1 : 0;
        $_SESSION['message'] = "Post updated successfully";
        $_SESSION['type'] = "danger";
    }
}


/**
 * Delete post from database
 * 
 */
if (isset($_GET['udel_id'])) {
    userOnly();
    $id = $_GET['udel_id'];
    $count = delete($table, $id);
    $_SESSION['message'] = "Post deleted successfully";
    $_SESSION['type'] = "success";
    header("Location: " . Base_URL . "profile.php?id=" . $_SESSION['id']);
    exit();
}



/**
 * publish or unpublish post from the list for the user
 */

if (isset($_GET['published']) && isset($_GET['p_id'])) {
    userOnly();
    $p_id = $_GET['p_id'];
    $published = $_GET['published'];
    $count = update($table, $p_id, ['published' => $published]);
    $_SESSION['message'] = "Post published successfully";
    $_SESSION['type'] = "success";
    header("Location: " . Base_URL . "profile.php?id=" . $_SESSION['id']);
    exit();
}
