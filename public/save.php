<?php include "assets/templates/header.php"; ?>

<div class="mt-1">
    <h2 style="margin-top: 50px">Adat mentése</h2>
    <?php
        session_start();
        $name = $_SESSION["data"]["name"];
        $min = $_SESSION["data"]["min"];
        $max = $_SESSION["data"]["max"];
        $date = $_SESSION["data"]["date"];

//        echo "Város: " . $name . "<br>";
//        echo "Dátum: " . $date . "<br>";
//        echo "Minimum hőmérséklet: " . $min. "<br>";
//        echo "Maximum hőmérséklet: " . $max . "<br>";

        $mysqli = new mysqli("localhost", "root", "alma", "mysite");
        if ($mysqli->connect_error) {
            die("Connection failed: " . $mysqli->connect_error);
        }
//        echo "Connected successfully";

        $sql = "INSERT INTO weather_data (`cityname`, `mintemp`, `maxtemp`, `date`) VALUES ('$name', '$min', '$max', STR_TO_DATE('$date', '%m/%d/%Y'))";
        if (mysqli_query($mysqli, $sql)) {
            echo "Az elem el lett mentve az adatbázisba.<br>";
        } else {
            echo "Hiba történt: " . $sql . "<br>" . mysqli_error($mysqli);
        }
        mysqli_close($mysqli);

    ?>
    <a href="index.php" class="btn btn-primary" style="margin-top: 30px">Vissza a kezdőoldalra</a>
</div>
</div>

<?php include "assets/templates/footer.php"; ?>
</body>
</html>
