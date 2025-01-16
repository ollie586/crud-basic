<?php 
include("function.php");
$id = $_POST["id"];
Delete($db, $id);
header('location: crud.php');
exit();
?>