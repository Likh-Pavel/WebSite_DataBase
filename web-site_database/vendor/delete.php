<?php
require_once '..//connect/connect.php';

$id = $_GET['id'];

$query = "DELETE FROM `homes` WHERE `homes`.`id` = '$id'";

mysqli_query($link, $query);

header("Location: /");
die();

?>