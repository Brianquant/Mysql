<!DOCTYPE html><html><head><meta charset="utf-8"></head></html>
<!-- Übung 1 -->
<?php 
/**Verbindung aufnehmen und Datenbank auswählen */
$con = mysqli_connect("", "root", "", "hardware");

$order = null;

$sql = "SELECT hersteller, typ, preis FROM fb WHERE ";

switch($_POST["geh"]) {
    case 1:
        $sql .= "preis <= 120" . $order;
        break;
    case 2:
        $sql .= "preis > 120 AND preis <= 140" . $order;
        break;
    case 3:
        $sql .= "preis > 140" . $order;
}

if(!empty($_POST["desc"])) {
    $order = " ORDER BY preis DESC";
    // echo "order", $order;
} else {
    $order = null;
    // echo "null", $order;
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
  echo  $dsatz["hersteller"] . " , " . $dsatz["typ"] . " , " . $dsatz["preis"] . "&euro;" ."<br>"; 
}

 /**Verbindung schließen */
 mysqli_close($con);

?>

</body></html>