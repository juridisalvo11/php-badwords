<?php
  //Assegno una parola chiave con cui censurare la parola ad una variabile
  $parola_censurata = $_GET['badword'];
  //Inserisco il testo da censurare in una variabile
  $testo = 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolor eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.';
  //Utilizzo la funzione str_replace per sostituire la parola da censurare con 3 asterischi
  $testo_censurato = str_replace($parola_censurata, '***', $testo);
    //Utilizzo la funzione strlen per calcolare il numero la lunghezza del paragrafo
  $lunghezza_testo = strlen($testo);
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="style.css">
  </head>
  <body>
    <div class="wrapper">
      <div class="testo">
        <h1>Testo :</h1>
        <!-- Stampo in pagina il testo  -->
        <?php echo $testo_censurato ?>
      </div>
      <div class="lunghezza-testo">
        <!-- Stampo in pagina la lunghezza del paragrafo -->
        <h1>Lunghezza paragrafo :</h1>
        <?php echo $lunghezza_testo ?>
      </div>
    </div>

  </body>
</html>
