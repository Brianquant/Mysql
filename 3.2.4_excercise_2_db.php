<!DOCTYPE html><html><head><meta charset="utf-8"></head></html>
<?php 
/**Verbindung aufnehmen und Datenbank auswählen */
$con = mysqli_connect("", "root", "", "hardware");


switch($_POST["lap"]) {
    case 1:
        $hersteller = "Fujitsu";
        break;
    case 2:
        $hersteller = "IBM Corporation";
        break;
    case 3:
        $hersteller = "Seagate";
    case 4:
        $hersteller = "Quantum";
}

$sql = "SELECT hersteller, typ, gb, preis, artnummer, prod FROM fb WHERE hersteller LIKE '" . $hersteller . "%' ";


/**SQL-Abfrage ausführen */
$res = mysqli_query($con, $sql);

/**Tabellenbeginn */
echo "<table border=\"1\">";

// Überschrift
echo "<tr> <td>Lfd. Nr.</td> <td>Hersteller</td>";
echo "<td>Typ</td> <td>GB</td>";
echo "<td>Preis</td> <td>Artnr.</td> <td>Datum</td> </tr>";

$lf = 1;

/**Datensätze aus Ergebnis ermitteln
 * in Array speichern und ausgeben
 */

while($dsatz = mysqli_fetch_assoc($res)) {
        echo "<tr>";
        echo "<td>$lf</td>";
        echo "<td>" . $dsatz["hersteller"] . "</td>";
        echo "<td>" . $dsatz["typ"] . "</td>";
        echo "<td>" . $dsatz["gb"] . "</td>";
        echo "<td>" . $dsatz["preis"] . "</td>";
        echo "<td>" . $dsatz["artnummer"] . "</td>";
        echo "<td>" . $dsatz["prod"] . "</td>";
        echo "</tr>";
  $lf = $lf +1;
}

echo "</table>";



//  Tabellenende

 /**Verbindung schließen */
 mysqli_close($con);

?>

</body></html>