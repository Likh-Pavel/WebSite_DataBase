<?php
require_once '..//connect/connect.php';

$name = $_POST['name'];
$price = $_POST['price'];
$plot_area = $_POST['plot_area'];
$building_area = $_POST['building_area'];
$telephone = $_POST['telephone'];
$description = $_POST['description'];
$area = $_POST['area'];

$query = "INSERT INTO `homes` (`id`, `name`, `price`, `plot_area`, `building_area`, `telephone`, `description`, `area`) VALUES (NULL, '$name', '$price', '$plot_area', '$building_area', '$telephone', '$description', '$area')";
mysqli_query($link, $query);

header("Location: /");
die();

?>