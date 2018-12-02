<?php
if (isset($_POST['Submit'])){
if($_POST['lenght'] && $_POST['width']){


}
}

  echo 'Staciakampis, kurio ilgis ' . $_POST['lenght'] . ', plotis ' . $_POST['width'] ;

  function daugyba($lenght, $width) {
    $daugyba = $lenght * $width;
    echo "plotas yra $daugyba";
  }
  daugyba($_POST['lenght'] ,  $_POST['width']);
   exit();

    // else (!isset())
 ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <form class="" action="<?php $_PHP_SELF; ?>" method="POST">
          Ilgis: <input type="number" name="lenght" />
          Plotis: <input type="number" name="width" />
          <input type="submit" name="submit" value="submit">

    </form>

  </body>
</html>
