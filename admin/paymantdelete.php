<?php

include '../config.php';

$id = $_GET['id'];

$deletesql = "DELETE FROM payment WHERE id = $id";

$result = mysqli_query($conn, $deletesql);

header("Location:payment.php");

?>