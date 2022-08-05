<?php

/**
 * Authorize User and redirect to the correct page
 */

function userOnly($redirect = "index.php")
{
    if (empty($_SESSION['id'])) {
        $_SESSION['message'] = "You need to login first";
        $_SESSION['type'] = "error";
        header("location: " . Base_URL . $redirect);
        exit();
    }
}

function adminOnly($redirect = "index.php")
{
    if (empty($_SESSION['id']) || empty($_SESSION['admin'])) {
        $_SESSION['message'] = "You are not authorized to view this page";
        $_SESSION['type'] = "error";
        header("location: " . Base_URL . $redirect);
        exit();
    }
}

function guestsOnly($redirect = "index.php")
{
    if (isset($_SESSION['id'])) {
        header("location: " . Base_URL . $redirect);
        exit();
    }
}
