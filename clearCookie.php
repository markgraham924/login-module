<html>
    <?php
    
        setcookie("loggedIn", "", time()-3600);
        header("Location: https://www.gmpauto.co.uk/staffing/login/login.html", true, 301);
        exit();

    ?>
</html>