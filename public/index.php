<?php include "assets/templates/header.php"; ?>

    <div class="mt-1">
        <h2 style="margin-top: 50px">Openweathermap Api hívás</h2>
        <p>Adja meg hogy melyik város jelenlegi időjárására kiváncsi</p>
    </div>
    <form action="result.php" method="post">
        <label for="city">Város</label>
        <input type="text" class="form-control" name="city"><br>
        <button type="submit" class="btn btn-primary">Elküldés</button>
        <a href="list.php" class="btn btn-secondary">Mentett adatok listázása</a>
    </form>
</div>

<?php include "assets/templates/footer.php"; ?>
</body>
</html>
