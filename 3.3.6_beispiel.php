<!DOCTYPE html><html><head><meta charset="utf-8"></head></html>
<!-- Anzahl der Kunden  -->
<p>Anzahl der Kunden:</p>
    <?php 
    /**Verbindung aufnehmen und Datenbank auswählen */
    $con = mysqli_connect("", "root", "", "projectadministration");
    /**SQL-Abfrage ausführen */
    $sql = "SELECT COUNT(cu_id) as count_cu_id FROM customer";
    $res = mysqli_query($con, $sql);
    // $num = mysqli_affected_rows($con);

    /**Tabellenbeginn */
    echo "<table border=\"1\">";

    // Überschrift
    echo "<tr> <td>Anzahl</td></tr>";

    /**Datensätze aus Ergebnis ermitteln
     * in Array speichern und ausgeben
     */

    while($dsatz = mysqli_fetch_assoc($res)) {
        echo "<tr>";
        echo "<td>" . $dsatz["count_cu_id"] . "</td>";
        echo "</tr>";
    }

    // Tabellenende
    echo "</table>";

    /**Verbindung schließen */
    mysqli_close($con);
    ?>
  

</body></html>