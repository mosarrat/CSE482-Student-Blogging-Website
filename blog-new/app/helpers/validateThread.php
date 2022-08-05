<?php

/**
 * Validate the post form
 */

function validateThread($thread)
{
    $errors = array();
    if (empty($thread['title'])) {
        array_push($errors, 'Title is required');
    }
    if (empty($thread['body'])) {
        array_push($errors, 'Body is required');
    }
    if (empty($thread['thread_topic_id'])) {
        array_push($errors, 'Please select a topic');
    }


    $existingThread = selectOne('threads', ['title' => $thread['title']]);
    if ($existingThread) {

        if (isset($thread['update-thread']) && $existingThread['id'] != $thread['id']) {
            array_push($errors, 'Title already exists');
        }

        if (isset($thread['add-thread'])) {
            array_push($errors, 'Title already exists');
        }
    }
    return $errors;
}
