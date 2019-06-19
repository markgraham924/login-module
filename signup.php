<html>
    <?php

        $userInp = $_GET["userInp"];
        $passInp = $_GET["passInp"];

        $passInpHash = hash('sha512', $passInp);

        $servername = "160.153.131.192";
        $username = "adminUser";
        $password = "/someWHERE924";
        $dbname = "users";

        // Create connection
        $conn = mysqli_connect($servername, $username, $password, $dbname);
        // Check connection
        if (!$conn) {
            die("Connection failed: " . mysqli_connect_error());
        }

        $sql = "INSERT INTO infor (userSto, passSto)
        VALUES ('$userInp', '$passInpHash')";

        if (mysqli_query($conn, $sql)) {
            echo "New record created successfully";
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }

        mysqli_close($conn);
        
        header("Location: https://www.gmpauto.co.uk/staffing/login/login.html", true, 301);
        exit();

    ?>
</html>