<?php
require_once './header.php';
require_once './db/conn.php';
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $string_id = mysqli_real_escape_string($conn, $_POST['string_id']);
    
    $deleteSql = "DELETE FROM string_info WHERE string_id = '$string_id'";
    
    if (mysqli_query($conn, $deleteSql)) {
        echo "record - $string_id has been deleted .<br>";
    } else {
        echo "Error" . mysqli_error($conn) ;
    }
}
$sql = "SELECT string_id, message FROM string_info";
$result = mysqli_query($conn, $sql);

if ($result) {
    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            echo "id -  " . $row["string_id"] . ",  Message is -  " . $row["message"] . "<br>";
        }
    } else {
        echo "No records found.<br>";
    }
} else {
    echo "Error: " . mysqli_error($conn) . "<br>";
}
mysqli_close($conn);
?>
<form method="post" action="showAll.php">
    <label for="string_id">Enter id number :</label>
    <input type="text" id="string_id" name="string_id" required>
    <button type="submit">Delete</button>
</form>