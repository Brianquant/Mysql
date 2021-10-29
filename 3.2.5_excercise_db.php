<!DOCTYPE html><html><head><meta charset="utf-8"></head></html>

<?php 

if(isset($_POST["gesendet"])) {
    $con = mysqli_connect("", "root", "","hardware");
    $he = $_POST["he"];
    $typ = $_POST["typ"];
    $pr = intval($_POST["pr"]);
    $gb = intval($_POST["gb"]);
    $art = $_POST["art"];
    $dt = $_POST["dt"];

    $sql = "INSERT INTO fb(hersteller, typ, "
            . "gb, preis, artnummer, prod) "
            . "VALUES('$he', '$typ', $pr, $gb, '$art', '$dt')";
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