

<html>
  <head>
  </head>
    <body>
      <!-- $_SERVER['PHP_SELF'] sendet den Input an das index.php Skript selber  -->
      <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">
        <textarea name="query" cols="30" rows="5">
        </textarea>
        <br/>
        <input type="reset" name="reset" value="Feld leeren">
        <input type="submit" name="submit" value="Abschicken">
      </form>
    </body>
</html>

<?php 

  if(isset($_POST['query']) && !empty($_POST['query'])) {
    // Verbindung herstellen 
    $link = mysqli_connect('localhost',
                            'root',
                            '');
    if(!$link) {
      echo 'Verbindungfehler: ' . mysqli_connect_error();
      die();
    }
    else 
    {
      // Abfrage absenden
      $result = mysqli_query($link, $_POST['query']);
      echo "Connection was successfully";
    }
  if(isset($_POST['query']) && !empty($_POST['query'])) {
    // Verbindung herstellen 
    $link = mysqli_connect('localhost',
                            'root',
                            '');
    if(!$link) {
      echo 'Verbindungfehler: ' . mysqli_connect_error();
      die();
    }
    else 
    {
      // Abfrage absenden
      $result = mysqli_query($link, $_POST['query']);
      echo "Connection was successfully";
    }
  }
?>