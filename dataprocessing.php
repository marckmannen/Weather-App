<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $action = isset($_POST["action"]) ? $_POST["action"] : 'LEEG';
    switch ($action) {
        case "regioKeuze":
            showWeather();
            break;
        case "LEEG":
        default:
            echo "geen geldige actie...";
    }
} else {
    header('url=index.php');
}

function showWeather() {

}

?>