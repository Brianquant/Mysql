<!DOCTYPE html><html><head><meta charset="utf-8"></head></html>
<!-- Datenseatze loeschen -->
<p>Treffen Sie Ihre Auswahl:</p>
<form action="3.2.8_beispiel_db_delete.php" method="post">
    <?php 
    /**Verbindung aufnehmen und Datenbank auswählen */
    $con = mysqli_connect("", "root", "", "firma");
    /**SQL-Abfrage ausführen */
    $sql = "SELECT * FROM personen";
    $res = mysqli_query($con, $sql);
    // $num = mysqli_affected_rows($con);

    /**Tabellenbeginn */
    echo "<table border=\"1\">";

    // Überschrift
    echo "<tr> <td>Auswahl</td> <td>Name</td>";
    echo "<td>Vorname</td> <td>P-Nr</td>";
    echo "<td>Gehalt</td> <td>Geburtstag</td> </tr>";

    /**Datensätze aus Ergebnis ermitteln
     * in Array speichern und ausgeben
     */

    while($dsatz = mysqli_fetch_assoc($res)) {
            echo "<tr>";
            echo "<td><input type=\"radio\" name=\"auswahl\""; // Super Array value -> $_POST["auswahl"]
            echo " value='" . $dsatz["personalnummer"] . "'></td>";
            echo "<td>" . $dsatz["nachname"] . "</td>";
            echo "<td>" . $dsatz["vorname"] . "</td>";
            echo "<td>" . $dsatz["personalnummer"] . "</td>";
            echo "<td>" . $dsatz["gehalt"] . "</td>";
            echo "<td>" . $dsatz["geburtstag"] . "</td>";
            echo "</tr>";
    }

    // Tabellenende
    echo "</table>";

    /**Verbindung schließen */
    mysqli_close($con);
    ?>
    <p><input type="submit" value="Datensatz entfernen"></p>
</form>
</body></html>