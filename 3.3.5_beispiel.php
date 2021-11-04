<!DOCTYPE html><html><head><meta charset="utf-8"></head></html>
<!-- Abfrage alle Personen  -->
<p>Alle Personen:</p>
    <?php 
    /**Verbindung aufnehmen und Datenbank auswählen */
    $con = mysqli_connect("", "root", "", "projectadministration");
    /**SQL-Abfrage ausführen */
    $sql = "SELECT * FROM person ORDER BY pe_nachname, pe_vorname";
    $res = mysqli_query($con, $sql);
    // $num = mysqli_affected_rows($con);

    /**Tabellenbeginn */
    echo "<table border=\"1\">";

    // Überschrift
    echo "<tr> <td>Nachname</td> <td>Vorname</td></tr>";

    /**Datensätze aus Ergebnis ermitteln
     * in Array speichern und ausgeben
     */

    while($dsatz = mysqli_fetch_assoc($res)) {
        echo "<tr>";
        echo "<td>" . $dsatz["pe_nachname"] . "</td>";
        echo "<td>" . $dsatz["pe_vorname"] . "</td>";
        echo "</tr>";
    }

    // Tabellenende
    echo "</table>";

    /**Verbindung schließen */
    mysqli_close($con);
    ?>
  

</body></html>