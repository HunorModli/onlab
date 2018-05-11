<?php include "assets/templates/header.php"; ?>

<div class="mt-1">
    <h2 style="margin-top: 50px">A lekérdezés eredménye:</h2>
    <?php

    $url = "http://api.openweathermap.org/data/2.5/find?q=" . $_POST["city"] . "&units=metric&appid=60ff1d8dde74e731a7cf725fb88383c0";
    $apiResponse = file_get_contents($url);
    $clima = json_decode($apiResponse);
    $maxTemperature = $clima->list["0"]->main->temp_max;

    $minTemperature = $clima->list["0"]->main->temp_min;

    $today = date("F j, Y, g:i a");

    $cityname = $clima->list["0"]->name;

    if (is_null($cityname)) {
        echo "Nem található ilyen város." . "<br>";
    } else {
        echo $cityname . " - " .$today . "<br>";
        echo "Legmagasabb hőmérséklet: " . $maxTemperature ."&deg;C<br>";
        echo "Legalacsonyabb hőmérséklet: " . $minTemperature ."&deg;C<br>";

        $data = [
            "name" => $cityname,
            "date" => $today,
            "min" => $minTemperature,
            "max" => $maxTemperature,
        ];
        session_start();
        $_SESSION["data"] = $data;
    }
    ?>

<!--    <form action="save.php" method="POST" class="btn btn-primary">-->
<!--        --><?php //echo "<input type='hidden' name='data' value=$dataString />"; ?>
<!--        <input type="submit">-->
<!--    </form>-->
    <a href="save.php" class="btn btn-secondary" style="margin-top: 20px">Eredmény mentése</a>
    <a href="index.php" class="btn btn-primary" style="margin-top: 20px">Vissza a kezdőoldalra</a>
</div>
</div>

<?php include "assets/templates/footer.php"; ?>
</body>
</html>
