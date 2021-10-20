<!DOCTYPE html><html><head><meta charset="utf-8"></head></html>
<?php 
/**Verbindung aufnehmen und Datenbank auswählen */
$con = mysqli_connect("", "root", "", "firma");

$sql = "SELECT * FROM personen";
       

/**SQL-Abfrage ausführen */
$res = mysqli_query($con, $sql);

/**Tabellenbeginn */
echo "<table border=\"1\">";

// Überschrift
echo "<tr> <td>Lfd. Nr.</td> <td>Name</td>";
echo "<td>Vorname</td> <td>Personalnummer</td>";
echo "<td>Gehalt</td> <td>Geburtstag</td> </tr>";

$lf = 1;

/**Datensätze aus Ergebnis ermitteln
 * in Array speichern und ausgeben
 */

while($dsatz = mysqli_fetch_assoc($res)) {
  echo "<tr>";
  echo "<td>$lf</td>";
  echo "<td>" . $dsatz["name"] . "</td>";
  echo "<td>" . $dsatz["vorname"] . "</td>";
  echo "<td>" . $dsatz["personalnummer"] . "</td>";
  echo "<td>" . $dsatz["gehalt"] . "</td>";
  echo "<td>" . $dsatz["geburtstag"] . "</td>";
  echo "</tr>";
  $lf = $lf +1;
}

echo "</table>";



//  Tabellenende

 /**Verbindung schließen */
 mysqli_close($con);

?>

</body></html>