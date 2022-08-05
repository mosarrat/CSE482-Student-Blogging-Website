<?php
// for user error message 
function validateUser($user)
{
    $errors = array();
    if (empty($user['username'])) {
        array_push($errors, 'Username is required');
    }
    if (empty($user['email'])) {
        array_push($errors, 'Email is required');
    }

    if (empty($user['password'])) {
        array_push($errors, 'Password is required');
    }

    if ($user['passwordConf'] !== $user['password']) {
        array_push($errors, 'Password do not match');
    }

    $existingUser = selectOne('users', ['email' => $user['email']]);
    if (isset($existingUser)) {
        if (isset($user['update-user']) && $existingUser['id'] != $user['id']) {
            array_push($errors, 'Email already exists');
        }

        if (isset($user['create-admin'])) {
            array_push($errors, 'Email already exists');
        }
    }
    return $errors;
}

// for logic error message 

function validateLogin($user)
{
    $errors = array();
    if (empty($user['username'])) {
        array_push($errors, 'Username is required');
    }


    if (empty($user['password'])) {
        array_push($errors, 'Password is required');
    }


    return $errors;
}


function validateUserProfile($user)
{
    $errors = array();

    if (empty($user['first_name'])) {
        array_push($errors, 'first_name is required');
    }
    if (empty($user['last_name'])) {
        array_push($errors, 'first_name is required');
    }
    if (empty($user['email'])) {
        array_push($errors, 'Email is required');
    }
    if (empty($user['profile_tagline'])) {
        array_push($errors, 'Profile is required');
    }
    if (empty($user['location'])) {
        array_push($errors, 'Location is required');
    }
    if (empty($user['about_me'])) {
        array_push($errors, 'About Me is required');
    }
    if (empty($user['fb_link'])) {
        array_push($errors, 'facebook link is required');
    }
    if (empty($user['tw_link'])) {
        array_push($errors, 'Twitter is required');
    }
    if (empty($user['lk_link'])) {
        array_push($errors, 'Linkedin is required');
    }
    if (empty($user['yt_link'])) {
        array_push($errors, 'Youtube is required');
    }

    $existingUser = selectOne('users', ['email' => $user['email']]);
    if (isset($existingUser)) {
        if (isset($user['user-profile-update']) && $existingUser['id'] != $user['id']) {
            array_push($errors, 'Email already exists');
        }
    }

    return $errors;
}
