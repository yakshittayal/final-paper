<?php
$title = "Signup";
require_once './header.php'; 
?>

<body>
    <form method="POST" action="receive.php">
        <div>
            <label for="inputText">Input box</label>
            <input type="text" id="inputText" name="message" required>
        </div>
        <div>
            <button type="submit">Submit</button>
        </div>
    </form>
    <div>
        <a href="showAll.php">Show all records</a>
    </div>
</body>
