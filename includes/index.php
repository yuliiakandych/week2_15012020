<?php
include('functions.php');

//if we're passind in a user key in the $_GET superglobal then go get a user

if (isset($_GET["getUser"])) {
    $user = getUser($pdo);

    echo json_encode($user);
}