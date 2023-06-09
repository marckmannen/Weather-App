<?php
include './inc/header.php';
?>

<body>
    <div class="hoofdcontainer"><div class="pagecontent">
<h1 class="title">Weather App</h1>
    <form action="" method="GET">
        <div class="input-container">
        <b><h2><label for="regio">Type hier de plaats:</label>
        <input class="inputveld" name="regio" type="text" placeholder="Type hier uw plaats"></h2></b>
    </div>
    </form>

<?php
$regio = isset($_GET["regio"]) ? ucfirst($_GET["regio"]) : "Nog niks...";

echo "<div class='selected_regio'>De geselecteerde plaats: $regio<div>";


if (isset($_GET['regio'])) {
    $selectedRegio = $_GET['regio'];
    $apiUrl = "https://weerlive.nl/api/json-data-10min.php?key=78d573e1e2&locatie=" . $regio;

    // Haal de weergegevens op van de API
    $weatherData = file_get_contents($apiUrl);

    if ($weatherData !== false) {
        $weatherData = json_decode($weatherData, true);

        // Controleer of de weergegevens succesvol zijn opgehaald
        if (isset($weatherData)) {
            $naam = ucwords($weatherData['liveweer'][0]['plaats']);
            $temperatuur = $weatherData['liveweer'][0]['temp'];
            $beschrijving = $weatherData['liveweer'][0]['samenv'];
            $verwachting = lcfirst($weatherData['liveweer'][0]['verw']);


            // Toon het weer op de pagina
            echo "<h2>In $naam is het nu $temperatuur °C</h2>";
            echo "<p>$beschrijving, $verwachting</p>";
        } else {
            echo "Er is een probleem opgetreden bij het ophalen van de weergegevens.";
        }
    } else {
        echo "Er is een probleem opgetreden bij het ophalen van de weergegevens.";
    }
}


?>

</div>

<?php include './inc/footer.php'?>
