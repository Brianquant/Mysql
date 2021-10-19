<!DOCTYPE html><html><head><meta charset="utf-8"></head></html>
<?php 
/**Verbindung aufnehmen und Datenbank auswählen */
$con = mysqli_connect("", "root", "", "hardware");

/**SQL-Abfrage ausführen */
$res = mysqli_query($con, "SELECT * FROM fb");

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
   echo $dsatz['hersteller'] . "," . $dsatz['typ'] . "," . $dsatz['gb'] . "," . $dsatz['preis'] . $dsatz['artnummer'] . $dsatz['prod'] . "<br>";
 }

 /**Verbindung schließen */
 mysqli_close($con);

?>