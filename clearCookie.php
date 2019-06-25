<html>
    <?php
        session_unset();
        session_destroy();
        setcookie("PHPSESSID", "", time() - 3600);
        header("Location: /staffing/login/login.html", true, 301);
        exit();
    ?>
</html>