<!DOCTYPE html><html><head><meta charset="utf-8"></head></html>
<?php 

// Anzeigen eines Datensatzes

if(isset($_POST["auswahl"])) {
    $con = mysqli_connect("", "root", "","firma");
    $sql = "SELECT * FROM personen WHERE personalnummer = " . $_POST["auswahl"];

    $res = mysqli_query($con, $sql);
    $dsatz = mysqli_fetch_assoc($res);

   
    echo "<p>Bitte neue Inhalte eintragen und speichern</p>";
    echo "<form action=\"3.2.7_beispiel_c.php\" method=\"POST\">";
    echo "<p><input name=\"na\" value='" . $dsatz["nachname"] . "'> Nachname</p>";
    echo "<p><input name=\"vn\" value='" . $dsatz["vorname"] . "'> Vorname</p>";
    echo "<p><input name=\"pn\" value='" . $_POST["auswahl"] . "'> Personalnummer</p>";
    echo "<p><input name=\"ge\" value='" . $dsatz["gehalt"] . "'> Gehalt</p>";
    echo "<p><input name=\"gt\" value='" . $dsatz["geburtstag"] . "'> Geburtstag</p>";
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