<?php
$conn = mysqli_connect('localhost', 'root', '', 'first_project');

if (!$conn) {
    die('Connection failed: ' . mysqli_connect_error());
}

?>