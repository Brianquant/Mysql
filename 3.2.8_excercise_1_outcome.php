<!DOCTYPE html><html><head><meta charset="utf-8"></head></html>

<?php 

    $con = mysqli_connect("", "root", "","hardware");
    $hersteller = $_POST["he"];
    // echo $vn;
    $typ = $_POST["ty"];
    $gb = intval($_POST["gb"]);
    // echo $pn . "<br>";
    $preis = doubleval($_POST["pr"]);
    $art = $_POST["art"];
    $prod = $_POST["prod"];
    $oripn = $_POST["oripn"];

    $sql = "UPDATE fp SET hersteller = '$hersteller', typ = '$typ', gb = $gb, preis = $preis, prod = '$prod', artnummer = $art " . " WHERE artnummer = $oripn";
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
<p>Zur <a href="3.2.8_excercise_1_form.php">Auswahl</a></p>
</body></html>