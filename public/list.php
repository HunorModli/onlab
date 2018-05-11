<?php include "assets/templates/header.php"; ?>
<div class="container">

    <div class="mt-1">
        <h2 style="margin-top: 50px">Eltárolt eredmények</h2>

        <?php
        $mysqli = new mysqli("localhost", "root", "alma", "mysite");

        if (mysqli_connect_errno()) {
            echo "Failed to connect to MySQL: " . mysqli_connect_error();
        }

        $result = mysqli_query($mysqli,"SELECT * FROM weather_data");

        echo "<table class=\"table table-hover\">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Város</th>
                    <th>Min</th>
                    <th>Max</th>
                    <th>Dátum</th>
                </tr>
            </thead>";
        echo "<tbody>";
        while($row = mysqli_fetch_array($result))
        {
            echo "<tr>";
                echo "<td>" . $row['id'] . "</td>";
                echo "<td>" . $row['cityname'] . "</td>";
                echo "<td>" . $row['mintemp'] . "&deg;C </td>";
                echo "<td>" . $row['maxtemp'] . "&deg;C </td>";
                echo "<td>" . $row['date'] . "</td>";
            echo "</tr>";
        }
        echo "</tbody>
              </table>";

             mysqli_close($mysqli);
        ?>

        <a href="index.php" class="btn btn-primary">Vissza a kezdőaoldalra</a>
    </div>
</div>
</div>
<?php include "assets/templates/footer.php"; ?>
</body>
</html>
