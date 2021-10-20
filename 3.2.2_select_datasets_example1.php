<!DOCTYPE html><html><head><meta charset="utf-8"></head></html>
<?php 
/**Verbindung aufnehmen und Datenbank auswählen */
$con = mysqli_connect("", "root", "", "firma");

$sql = "SELECT name, gehalt FROM personen" . 
       " WHERE gehalt >= 3000 AND gehalt <= 3800" . 
       " ORDER BY gehalt DESC";

/**SQL-Abfrage ausführen */
$res = mysqli_query($con, $sql);

/**Anzahl Datensätze ermitteln und ausgeben */
$num = mysqli_num_rows($res);
if($num > 0) {
  echo "Ergebnis:<br>";
} else {
  echo "Keine Ergebnisse";
}

/**Datensätze aus Ergebnis ermitteln
 * in Array speichern und ausgeben
 */

 while($dsatz = mysqli_fetch_assoc($res)) {
   echo $dsatz['name'] . "," . $dsatz['gehalt'] . "<br>";
 }

 /**Verbindung schließen */
 mysqli_close($con);

?>