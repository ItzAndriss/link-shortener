<?php
    $admin_user = array(
        "username" => "admin",
        "password" => "admin"
    );

    $disable_delete = false;

    $host = "127.0.0.1";
    $user = "root";
    $password = "";
    $database = "link_shortener";

    $conn = new mysqli($host, $user, $password, $database);

    if($conn->connect_error) {
        die($conn->connect_error);
    }

?>