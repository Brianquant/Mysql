<!DOCTYPE html><html><head><meta charset="utf-8"></head></html>

<?php 

if(isset($_POST["gesendet"])) {
    $con = mysqli_connect("", "root", "","firma");
    $vn = $_POST["vn"];
    $na = $_POST["na"];
    $pn = intval($_POST["pn"]);
    $ge = doubleval($_POST["ge"]);
    $gt = $_POST["gt"];

    $sql = "INSERT INTO personen(nachname, vorname, "
            . "personalnummer, gehalt, geburtstag) "
            . "VALUES('$na', '$vn', $pn, $ge, '$gt')";

    mysqli_query($con, $sql);
    echo $sql;
    $num = mysqli_affected_rows($con);

    if($num > 0) {
        echo "<p><font color=\"#00aa00\">";
        echo "Ein Datensatz ist hinzugekommen";
        echo "</font></p>";
    } else {
        echo "<p><font color=\"#00aa00\">";
        echo "Es ist ein Fehler aufgetreten";
        echo "es ist kein Datensatz hinzugekommen";
        echo "</font></p>";
    }

    mysqli_close($con);
}
?>

</body></html>