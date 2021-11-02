<!DOCTYPE html><html><head><meta charset="utf-8"></head></html>

<!-- Datenseatze loeschen -->

<?php 
    if(isset($_POST["auswahl"])) {
    $con = mysqli_connect("", "root", "","firma");

    $sql = "DELETE FROM personen WHERE" . " personalnummer = " . $_POST["auswahl"];
    // echo $sql;
    mysqli_query($con, $sql);
    $num = mysqli_affected_rows($con);

    if($num > 0) {
        echo "Betroffen: $num";
    } else {
        echo "Betroffen: 0";
    }

    mysqli_close($con);

}

?>
<p>Zur <a href="3.2.8_beispiel_form_a.php">Auswahl</a></p>
</body></html>