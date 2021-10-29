<!DOCTYPE html>
<html>
    <head><meta charset="utf-8"></head>
<body>
    <p>Anzeige der Personen aus der Gehaltsgruppe:</p>
    <form action="3.2.4_excercise_1_db.php" method="POST">
        <p><input type="radio" name="geh" value="1" checked="checked">  
                bis 120 &euro; einschl. <br>
            <input type="radio" name="geh" value="2" checked="checked">     
                ab 120 &euro; ausschl. bis 140 &euro; einschl. <br>
            <input type="radio" name="geh" value="3" checked="checked">
                ab 140 &euro; ausschl.  <br>
            <p><input type="checkbox" name="desc"> Ausgabe nach Preis (absteigend) sortiert<p>

            <p><input type="submit"> <input type="reset"></p>   
           
    </form>
</body>
</html>