<!DOCTYPE html><html><head><meta charset="utf-8"></head></html>
<?php 
/**Verbindung aufnehmen und Datenbank auswählen */
$con = mysqli_connect("", "root", "", "hardware");

$sql = "SELECT hersteller, gb, preis FROM fb" . 
       " WHERE gb > 60 AND preis < 150" .
       " ORDER BY gb DESC";
       

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
   echo "Hersteller:" . $dsatz['hersteller'] . "| " . "GB:" . $dsatz['gb'] . "| " . "Preis" . $dsatz['preis'] ."<br>";
 }

 /**Verbindung schließen */
 mysqli_close($con);

?>