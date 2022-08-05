<?php

include(ROOT_PATH . "/app/database/db.php");
include(ROOT_PATH . "/app/helpers/middleware.php");

// error array
$errors = array();

// table name
$table = "post_comments";

// Topics table fields
$id = "";
$user_id = "";
$post_id = "";
$message = "";


// Load all the posts
$posts = selectAll('posts');


// select all commentss from database
$comments = selectAll($table);



/**
 * Show data in the edit form
 */

if (isset($_GET['id'])) {
    $comment = selectOne($table, ['id' => $_GET['id']]);
    $id = $comment['id'];
    $post_id = $comment['post_id'];
    $body = $comment['message'];
}


/**
 * Delete post from database
 * 
 */
if (isset($_GET['del_id'])) {
    adminOnly();
    $id = $_GET['del_id'];
    $count = delete($table, $id);
    $_SESSION['message'] = "Comment deleted successfully";
    $_SESSION['type'] = "success";
    header("Location: " . Base_URL . "admin/post-comment/index.php");
    exit();
}
