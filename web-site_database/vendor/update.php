<?php
require_once '..//connect/connect.php';


$id = $_POST['id'];
$name = $_POST['name'];
$price = $_POST['price'];
$plot_area = $_POST['plot_area'];
$building_area = $_POST['building_area'];
$telephone = $_POST['telephone'];
$description = $_POST['description'];
$area = $_POST['area'];

$query = "UPDATE `homes` SET `name` = '$name', `price` = '$price', `plot_area` = '$plot_area',
 `building_area` = '$building_area', `telephone` = '$telephone', `description` = '$description', `area` = '$area' WHERE `homes`.`id` = '$id'";
 
mysqli_query($link, $query);

header("Location: /");
die();

?>