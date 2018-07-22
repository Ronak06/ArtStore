<?php
$connection = mysqli_connect('localhost','root','','cps630');

$id = $_POST['id'];
$type = $_POST['type'] . "s";
$type2 = $_POST['type'] . "ID=" . $id;

$query = mysqli_query($connection,"DELETE FROM $type WHERE $type2");

$connection->exec($query);
?>﻿
