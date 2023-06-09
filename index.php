<!DOCTYPE html>
<html lang="nl">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css" type="text/css">
    <script src="./js/script.js"></script>
    <title>Weather App</title>
</head>

<body>
<h1>Weather App</h1>
<form action="dataprocessing.php" method="POST">
    <input type="hidden" name="action" value="regioKeuze">

    <label for="regio">Kies een regio:</label>
        <select id="regio" name="regio">
            <option value="Noord-Holland">Noord-Holland</option>
            <option value="Zuid-Holland">Zuid-Holland</option>
            <option value="Noord-Brabant">Noord-Brabant</option>
            <option value="Gelderland">Gelderland</option>
            <option value="Overijssel">Overijssel</option>
            <option value="Flevoland">Flevoland</option>
            <option value="Utrecht">Utrecht</option>
            <option value="Groningen">Groningen</option>
            <option value="Friesland">Friesland</option>
            <option value="Drenthe">Drenthe</option>
            <option value="Zeeland">Zeeland</option>
            <option value="Limburg">Limburg</option>
    </select>
</form>
</body>

</html>
