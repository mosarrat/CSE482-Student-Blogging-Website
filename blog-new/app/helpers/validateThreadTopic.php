<?php

/**
 * Validate the topic form
 */

function validateTopic($thread_topics)
{
    $errors = array();
    if (empty($thread_topics['name'])) {
        array_push($errors, 'Name is required');
    }
    if (empty($thread_topics['description'])) {
        array_push($errors, 'Description is required');
    }


    $existingTopic = selectOne('thread_topics', ['name' => $thread_topics['name']]);
    if ($existingTopic) {
        if (isset($thread_topics['update-topic']) && $existingTopic['id'] != $thread_topics['id']) {
            array_push($errors, 'Name already exists');
        }

        if (isset($thread_topics['add-topic'])) {
            array_push($errors, 'Name already exists');
        }
    }
    return $errors;
}
