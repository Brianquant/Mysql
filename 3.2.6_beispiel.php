<!DOCTYPE html><html><head><meta charset="utf-8"></head></html>
<!-- Ändern mehrerer Datensätze -->
<?php 
/**Verbindung aufnehmen und Datenbank auswählen */
$con = mysqli_connect("", "root", "", "firma");

$sql = "UPDATE personen SET gehalt = gehalt * 1.05";

/**SQL-Abfrage ausführen */
$res = mysqli_query($con, $sql);

$num = mysqli_affected_rows($con);

if($num > 0) {
  echo "Betroffen: $num<br>";
} else {
  echo "Betroffen: 0<br>";
}

 /**Verbindung schließen */
 mysqli_close($con);
?>

</body></html>