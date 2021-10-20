<!DOCTYPE html><html><head><meta charset="utf-8"></head></html>
<!-- Auswahl von Daten über ein Suchformular -->
<?php 
/**Verbindung aufnehmen und Datenbank auswählen */
$con = mysqli_connect("", "root", "", "firma");

$sql = "SELECT name, vorname FROM personen" .
       " WHERE name LIKE '" . $_POST["anfang"] . "%'";

/**SQL-Abfrage ausführen */
$res = mysqli_query($con, $sql);
$num = mysqli_num_rows($res);

if($num > 0) {
  echo "Ergebnis:";
} else {
  echo "Kein Ergebnis";
}

while($dsatz = mysqli_fetch_assoc($res)) {
  echo  $dsatz["name"] . " , " . $dsatz["vorname"] . "<br>"; 
}

 /**Verbindung schließen */
 mysqli_close($con);

?>

</body></html>