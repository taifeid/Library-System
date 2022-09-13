<?php
 $db = mysqli_connect('localhost', 'root', '','librarydb') or
        die ('Unable to connect. Check your connection parameters.');
        mysqli_select_db($db, 'librarydb' ) or die(mysqli_error($db));
?>