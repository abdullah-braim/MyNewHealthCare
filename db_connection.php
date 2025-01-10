<?php

$conn = new mysqli('alv4v3hlsipxnujn.cbetxkdyhwsb.us-east-1.rds.amazonaws.com', 'hmi1x6hht4i7jsju', 't2z76vifho6ysc65', 'at0vk9dy5myd27jd');

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>