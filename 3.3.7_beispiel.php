<!DOCTYPE html><html><head><meta charset="utf-8"></head></html>
<!-- Alle Kunden mit allen Projekten  -->
<p>Alle Kunden mit allen Projekten:</p>
    <?php 
    /**Verbindung aufnehmen und Datenbank auswählen */
    $con = mysqli_connect("", "root", "", "projectadministration");
    /**SQL-Abfrage ausführen INNER JOIN generiert weitere Datensätze die durch zwei unterschiedlichen Tabellen entstehen*/
    $sql = "SELECT cu_name, cu_location, pr_desc
                FROM customer INNER JOIN project 
                    ON customer.cu_id = project.pr_cu_id
                ORDER BY cu_name, cu_location, pr_desc";
    
    
    
    $res = mysqli_query($con, $sql);
    // $num = mysqli_affected_rows($con);

    /**Tabellenbeginn */
    echo "<table border=\"1\">";

    // Überschrift
    echo "<tr> <td>Name</td> <td>Location</td> <td>Project</td></tr>";

    /**Datensätze aus Ergebnis ermitteln
     * in Array speichern und ausgeben
     */

    while($dsatz = mysqli_fetch_assoc($res)) {
        echo "<tr>";
        echo "<td>" . $dsatz["cu_name"] . "</td>";
        echo "<td>" . $dsatz["cu_location"] . "</td>";
        echo "<td>" . $dsatz["pr_desc"] . "</td>";
        echo "</tr>";
    }

    // Tabellenende
    echo "</table>";

    /**Verbindung schließen */
    mysqli_close($con);
    ?>
  

</body></html>