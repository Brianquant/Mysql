<!DOCTYPE html><html><head><meta charset="utf-8"></head></html>
<!-- Anzeige und Auswahl -->
<p>Treffen Sie Ihre Auswahl:</p>
<form action="3.2.8_excercise_1_process.php" method="post">
    <?php 
    /**Verbindung aufnehmen und Datenbank auswählen */
    $con = mysqli_connect("", "root", "", "hardware");
    /**SQL-Abfrage ausführen */
    $sql = "SELECT * FROM fp";
    $res = mysqli_query($con, $sql);
    // $num = mysqli_affected_rows($con);

    /**Tabellenbeginn */
    echo "<table border=\"1\">";

    // Überschrift
    echo "<tr> <td>Auswahl</td> <td>Hersteller</td>";
    echo "<td>Typ</td> <td>GB</td>";
    echo "<td>Preis</td> <td>Artnummer</td> <td>Produktion</td> </tr>";

    /**Datensätze aus Ergebnis ermitteln
     * in Array speichern und ausgeben
     */

    while($dsatz = mysqli_fetch_assoc($res)) {
            echo "<tr>";
            echo "<td><input type=\"radio\" name=\"auswahl\""; // Super Array value -> $_POST["auswahl"]
            echo " value='" . $dsatz["artnummer"] . "'></td>";
            echo "<td>" . $dsatz["hersteller"] . "</td>";
            echo "<td>" . $dsatz["typ"] . "</td>";
            echo "<td>" . $dsatz["gb"] . "</td>";
            echo "<td>" . $dsatz["preis"] . "</td>";
            echo "<td>" . $dsatz["artnummer"] . "</td>";
            echo "<td>" . $dsatz["prod"] . "</td>";
            echo "</tr>";
    }

    // Tabellenende
    echo "</table>";

    /**Verbindung schließen */
    mysqli_close($con);
    ?>
    <p><input type="submit" value="Datensatz anzeigen"></p>
</form>
</body></html>