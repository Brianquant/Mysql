<!DOCTYPE html><html><head><meta charset="utf-8"></head></html>
<?php 

// Anzeigen eines Datensatzes

if(isset($_POST["auswahl"])) {
    $con = mysqli_connect("", "root", "","hardware");
    $sql = "SELECT * FROM fp" . " WHERE artnummer = " . $_POST["auswahl"];
    echo $sql;

    $res = mysqli_query($con, $sql);
    $dsatz = mysqli_fetch_assoc($res);

   
    echo "<p>Bitte neue Inhalte eintragen und speichern</p>";
    echo "<form action=\"3.2.8_excercise_1_outcome.php\" method=\"POST\">";
    echo "<p><input name=\"he\" value='" . $dsatz["hersteller"] . "'> Hersteller</p>";
    echo "<p><input name=\"ty\" value='" . $dsatz["typ"] . "'> Typ</p>";
    echo "<p><input name=\"gb\" value='" . $dsatz["gb"] . "'> GB</p>";
    echo "<p><input name=\"pr\" value='" . $dsatz["preis"] . "'> Preis</p>";
    echo "<p><input name=\"art\" value='" . $_POST["auswahl"] . "'> Artnummer</p>";
    echo "<p><input name=\"prod\" value='" . $dsatz["prod"] . "'> Prduktion</p>";
    echo "<p><input type=\"hidden\" name=\"oripn\" value='" . $_POST["auswahl"] . "'>"; // Contains the originalvalue of personalnummer 
    echo "<p><input type=\"submit\" value=\"Speichern\">";
    echo "<input type=\"reset\"></p>";
    echo "</form>";

    mysqli_close($con);
} else {
    echo "<p>Keine Auswahl getroffen</p>";
}
?>

</body></html>