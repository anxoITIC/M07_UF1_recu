<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recuperació M07UF1 Anxo Aragundi</title>
</head>
<body>
    <h1>Consultar un usuari</h1>
    <form method="POST" action="validar.php">
        <label for="name">Nom</label>
        <input type="text" id="name" name="name">
        <br>
        <label for="age">Edat</label>
        <input type="number" id="age" name="age">
        <br>
        <label for="conditions">Accepto les condicions</label>
        <input type="checkbox" id="conditions" name="conditions">
        <br>
        <input type="submit" value="Enviar">
    </form>
    
    <?php
    //en cas de que l'usuari no existeixi rep l'error de validar.php i el mostra a sota del tot
    if (isset($_GET['error'])) {
        $error = $_GET['error'];
        echo "<p>Error: $error</p>";
    }
    ?>
</body>
</html>