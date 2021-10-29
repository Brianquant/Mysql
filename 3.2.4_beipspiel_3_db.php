<!DOCTYPE html><html><head><meta charset="utf-8"></head></html>
<!-- Beispiel 3 -->
<?php 
/**Verbindung aufnehmen und Datenbank auswählen */
$con = mysqli_connect("", "root", "", "firma");

$sql = "SELECT name, gehalt FROM personen WHERE ";

switch($_POST["geh"]) {
    case 1:
        $sql .= "gehalt <= 3000";
        break;
    case 2:
        $sql .= "gehalt <= 3000 AND gehalt <= 3500";
        break;
    case 3:
        $sql .= "gehalt > 3000 AND gehalt <= 5000";
        break;
    case 4:
        $sql .= "gehalt > 5000";
}
       

/**SQL-Abfrage ausführen */
$res = mysqli_query($con, $sql);
$num = mysqli_num_rows($res);

if($num > 0) {
  echo "Ergebnis:<br>";
} else {
  echo "Kein Ergebnis";
}

while($dsatz = mysqli_fetch_assoc($res)) {
  echo  $dsatz["name"] . " , " . $dsatz["gehalt"] . "<br>"; 
}

 /**Verbindung schließen */
 mysqli_close($con);

?>

</body></html>