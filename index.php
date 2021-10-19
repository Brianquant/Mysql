<!DOCTYPE html><html><head><meta charset="utf-8"></head></html>
<?php 
/**Verbindung aufnehmen und Datenbank auswählen */
$con = mysqli_connect("", "root", "", "firma");

/**SQL-Abfrage ausführen */
$res = mysqli_query($con, "SELECT * FROM personen");

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
   echo $dsatz['name'] . "," . $dsatz['vorname'] . "," . $dsatz['personalnummer'] . "," . $dsatz['gehalt'] . $dsatz['geburtstag'] . "<br>";
 }

 /**Verbindung schließen */
 mysqli_close($con);

?>