<html>
    <?php

        $userInp = $_GET["userInp"];
        $passInp = $_GET["passInp"];


        $servername = "160.153.131.192";
        $username = "adminUser";
        $password = "/someWHERE924";
        $dbname = "users";

        // Create connection
        $conn = new mysqli($servername, $username, $password, $dbname);
        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        } 

        $sql = "SELECT userSto, passSto FROM infor";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            // output data of each row
            while($row = $result->fetch_assoc()) {
                $userStore = $row["userSto"];
                if ($userStore = $userInp){
                    $userSto = $row["userSto"];
                    $passSto = $row["passSto"];
                }
            }
        } else {
            echo "0 results";
        }
        $conn->close();
        $boolHash = password_verify($passInp, $passSto);
        if ($boolHash = TRUE){
            echo "correct login";
        }

    ?>
</html>