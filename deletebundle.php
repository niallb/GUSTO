<?php

require_once('config.php');
require_once('lib/database.php');
require_once('lib/sharedfunctions.php');
require_once('corelib/dataaccess.php');

$uinfo = checkLoggedInUser();
$dbUser = getUserRecord($uinfo);
$userID = $dbUser->id;

    $id = $_POST['id'];
    $query = "DELETE FROM teachingpractice  WHERE id = '$id'";
    dataConnection::runQuery($query);
    header("Location: index.php");
    exit();
?>