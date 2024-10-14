<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $grNo = htmlspecialchars($_POST['grNo']);
        $name = htmlspecialchars($_POST['name']);
        echo "<p>Gr No.: $grNo</p>";
        echo "<p>Name: $name</p>";
    } else {
        echo "<p>No data submitted.</p>";
    }
    ?>