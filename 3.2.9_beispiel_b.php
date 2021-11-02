<!DOCTYPE html><html><head><meta charset="utf-8">
<!-- Benutzeroverfläche mit JS und CSS -->
<link rel="stylesheet" type="text/css" href="3.2.9_beispiel_a.css"  />

<script type="text/javascript"> 
function send(aktion, id) {
    if(aktion == 2) {
        if(!confirm("Datensatz mit id " + id + " entfernen?")) {
            return;
        }

        document.f.aktion.value = aktion;
        document.f.id.value = id;
        document.f.submit();
    }
}
</script>
</head>

<body>

    <?php 

    $con = mysqli_connect("", "root", "", "firma");

    // Sortierung, wird ggf. überschreiben
    $od = " ORDER BY personalnummer";

    // Aktion ausführen
    if(isset($_POST["aktion"])) {


        // neu eintragen
        if(isset($_POST["aktion"]) == "0") {
            $na = mysqli_real_escape_string($con, $_POST["na"][0]);
            $vo = mysqli_real_escape_string($con, $_POST["vo"][0]);
            $pn = intval($_POST["pn"][0]);
            $gh = doubleval($_POST["gh"][0]);
            $gb = mysqli_real_escape_string($con, $_POST["gb"][0]);
            $sql = "INSERT INTO personen" . "(nachname, vorname, personalnummer, gehalt, geburtstag)" . "VALUE('$na', '$vo', $pn, $gh, '$gb')";
            mysqli_query($con, $sql);
        }
        // ändern
        else if(isset($_POST["aktion"]) == "1") {
            $id = $_POST["id"];
            $na = mysqli_real_escape_string($con, $_POST["na"][$id]);
            $vo = mysqli_real_escape_string($con, $_POST["vo"][$id]);
            $pn = intval($_POST["pn"][$id]);
            $gh = doubleval($_POST["gh"][$id]);
            $gb = mysqli_real_escape_string($con, $_POST["gb"][$id]);
            $sql = "UPDATE personen SET nachname = '$na', vorname = '$vo', personalnummer = $pn, gehalt = $gh, geburtstag = '$gb'" . " WHERE personalnummer = $id";
            mysqli_query($con, $sql);
        }

        // löschen
        else if(isset($_POST["aktion"]) == "2") {
            $sql = "DELETE FROM personen" . " WHERE personalnummer = " . $_POST["id"];
            mysqli_query($con, $sql);
        }

         // Sortieren
         else if(isset($_POST["aktion"]) == "3") {
            $od = "ORDER BY nachname";
        }
        else if(isset($_POST["aktion"]) == "4") {
            $od = "ORDER BY vorname";
        }
        else if(isset($_POST["aktion"]) == "5") {
            $od = "ORDER BY personalnummer";
        }
        else if(isset($_POST["aktion"]) == "6") {
            $od = "ORDER BY gehalt";
        }
        else if(isset($_POST["aktion"]) == "7") {
            $od = "ORDER BY geburtstag";
        }
    }
    }
    
    ?>



</body></html>