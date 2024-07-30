<?php
require_once './header.php';
require_once './db/conn.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $message = mysqli_real_escape_string($conn, $_POST['message']);

    $sql = "INSERT INTO string_info(message) VALUES ('$message')";

    if (mysqli_query($conn, $sql)) {
        echo "sucess !!!";
    } else {
        echo "Error: " . mysqli_error($conn);
    }
}
?>
