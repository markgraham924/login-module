<?php

session_start();

?>
<html>
    <?php
    echo "hi";
    echo $_SESSION["username"];
    ?>
    <body>
        <h1>Homepage</h1>
    </body>
</html>