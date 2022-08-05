<?php

include(ROOT_PATH . "/app/database/db.php");
include(ROOT_PATH . "/app/helpers/validateTopic.php");
include(ROOT_PATH . "/app/helpers/middleware.php");

// error array
$errors = array();

// table name
$table = "topics";

// Topics table fields
$id = $name = $description = "";

// select all topics from database
$topics = selectAll($table);



/**
 * Grab the data from the form and add it to the database
 * check the form validation
 * Display a success message
 */

if (isset($_POST['add-topic'])) {
    adminOnly();
    $errors = validateTopic($_POST);

    if (count($errors) === 0) {

        unset($_POST['add-topic']);
        $topic_id = create($table, $_POST);
        $_SESSION['message'] = "Topic added successfully";
        $_SESSION['type'] = "success";
        header("location: " . Base_URL . "admin/topic/index.php");
        exit();
    } else {
        $name = $_POST['name'];
        $description = $_POST['description'];
    }
}

/**
 * Get the ID of the topic for read and update
 * show the data from the database on the edit form
 */

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $topic = selectOne($table, ["id" => $id]);
    $id = $topic['id'];
    $name = $topic['name'];
    $description = $topic['description'];
}


/**
 * Get the ID of the topic to be updated
 * Update the data from the database on the edit form
 * Display a success message
 * Redirect to the manage topics page
 */

if (isset($_POST['update-topic'])) {
    adminOnly();
    $errors = validateTopic($_POST);

    if (count($errors) === 0) {
        $id = $_POST['id'];
        unset($_POST['update-topic'], $_POST['id']);
        $topic_id = update($table, $id, $_POST);
        $_SESSION['message'] = "Topic updated successfully";
        $_SESSION['type'] = "success";
        header("location: " . Base_URL . "admin/topic/index.php");
        exit();
    } else {
        $id = $_POST['id'];
        $name = $_POST['name'];
        $description = $_POST['description'];
    }
}


/**
 * Get the ID of the topic to be deleted
 * Delete the data from the database
 * Display a success message
 * Redirect to the manage topics page
 */

if (isset($_GET['del_id'])) {
    adminOnly();
    $id = $_GET['del_id'];
    $count = delete($table, $id);
    $_SESSION['message'] = "Topic deleted successfully";
    $_SESSION['type'] = "success";
    header("location: " . Base_URL . "admin/topic/index.php");
    exit();
}
