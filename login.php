<html>
    <?php

        $userInp = $_GET["userInp"];
        $passInp = $_GET["passInp"];

        echo $passInpHash = hash('sha512', $passInp);

    ?>
</html>