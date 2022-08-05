<?php

include(ROOT_PATH . "/app/database/db.php");
include(ROOT_PATH . "/app/helpers/middleware.php");

// error array
$errors = array();

// table name
$table = "thread_comments";

// Topics table fields
$id = "";
$user_id = "";
$thread_id = "";
$message = "";



// Load all the posts
$threads = selectAll('threads');

// select all topics from database
$thread_comments = selectAll($table);



/**
 * Show data in the edit form
 */

if (isset($_GET['id'])) {
    $thread_comment = selectOne($table, ['id' => $_GET['id']]);
    $id = $thread_comment['id'];
    $thread_id = $thread_comment['thread_id'];
    $message = $thread_comment['message'];
}



/**
 * Delete Thread Comment from database
 * 
 */
if (isset($_GET['del_id'])) {
    adminOnly();
    $id = $_GET['del_id'];
    $count = delete($table, $id);
    $_SESSION['message'] = "Thread Comment deleted successfully";
    $_SESSION['type'] = "success";
    header("Location: " . Base_URL . "admin/thread-comments/index.php");
    exit();
}
