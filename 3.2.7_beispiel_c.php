<!DOCTYPE html><html><head><meta charset="utf-8"></head></html>

<?php 

    $con = mysqli_connect("", "root", "","firma");
    $vn = $_POST["vn"];
    // echo $vn;
    $na = $_POST["na"];
    $pn = intval($_POST["pn"]);
    // echo $pn . "<br>";
    $ge = doubleval($_POST["ge"]);
    $gt = $_POST["gt"];
    $oripn = $_POST["oripn"];

    $sql = "UPDATE personen SET nachname = '$na', vorname = '$vn', personalnummer = $pn, gehalt = $ge, geburtstag = '$gt'" . " WHERE personalnummer = $oripn";
    echo $sql;

    mysqli_query($con, $sql);
    $num = mysqli_affected_rows($con);

    if($num > 0) {
        echo "Betroffen: $num";
    } else {
        echo "Betroffen: 0";
    }

    

    mysqli_close($con);

?>
<p>Zur <a href="3.2.7_beispiel_a.php">Auswahl</a></p>
</body></html>