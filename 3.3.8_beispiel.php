<!DOCTYPE html><html><head><meta charset="utf-8"></head></html>
<!-- Alle Personen mit allen Projektzeiten  -->
<p> Alle Personen mit allen Projektzeiten</p>
    <?php 
    /**Verbindung aufnehmen und Datenbank auswählen */
    $con = mysqli_connect("", "root", "", "projectadministration");
    /**SQL-Abfrage ausführen INNER JOIN generiert weitere Datensätze die durch zwei unterschiedlichen Tabellen entstehen*/
    $sql = "SELECT pe_nachname, pr_desc, pp_date, pp_zeit
                FROM project INNER JOIN(person INNER JOIN project_person 
                    ON person.pe_id = project_person.pe_id)
                    ON project.pr_id = project_person.pr_id
                ORDER BY pe_nachname, pr_desc, pp_date";
    
    
    
    $res = mysqli_query($con, $sql);
    // $num = mysqli_affected_rows($con);

    /**Tabellenbeginn */
    echo "<table border=\"1\">";

    // Überschrift
    echo "<tr> <td>Name</td> <td>Project description</td> <td>Date</td></tr>";

    /**Datensätze aus Ergebnis ermitteln
     * in Array speichern und ausgeben
     */

    while($dsatz = mysqli_fetch_assoc($res)) {
        echo "<tr>";
        echo "<td>" . $dsatz["pe_nachname"] . "</td>";
        echo "<td>" . $dsatz["pr_desc"] . "</td>";
        echo "<td>" . $dsatz["pp_date"] . "</td>";
        echo "</tr>";
    }

    // Tabellenende
    echo "</table>";

    /**Verbindung schließen */
    mysqli_close($con);
    ?>
  

</body></html>