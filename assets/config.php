<?php
$admin_user = array(
    "username" => "test",
    "password" => "test"
);

$disable_delete = false;

$host = "127.0.0.1";
$user = "link_cryptocelot";
$password = "GkM3mZcfye5B4Lxj";
$database = "link_cryptocelot";

$conn = new mysqli($host, $user, $password, $database);

if($conn->connect_error) {
    die($conn->connect_error);
}

?>