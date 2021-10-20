<!DOCTYPE html><html><head><meta charset="utf-8"></head></html>
<?php 
/**Verbindung aufnehmen und Datenbank auswählen */
$con = mysqli_connect("", "root", "", "hardware");

$sql = "SELECT hersteller, typ, artnummer, prod FROM fb" . 
       " WHERE prod LIKE '2008-03-15%' OR prod LIKE '2008-06-15%'" .
       " ORDER BY prod ASC";
       

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
   echo "Hersteller:" . $dsatz['hersteller'] . "| " . "Typ:" . $dsatz['typ'] . "| " . "Artikelnummer" . "| " . $dsatz['artnummer'] . "| " . "Produktionsdatum" . $dsatz['prod'] . "<br>";
 }

 /**Verbindung schließen */
 mysqli_close($con);

?>