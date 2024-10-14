<?php
    if (isset($_GET['rollNo']) && isset($_GET['name'])) {
        $rollNo = htmlspecialchars($_GET['rollNo']);
        $name = htmlspecialchars($_GET['name']);
        echo "<p>Roll No.: $rollNo</p>";
        echo "<p>Name: $name</p>";
    } else {
        echo "<p>No data received.</p>";
    }
    ?>