<?php
   $submit = filter_input(INPUT_POST, 'submit');
   if(isset($_POST['genres'])) {
    $genres = $_POST['genres'];
   }
   ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   <?php
    if(isset($submit)) {
     echo "Formulář byl odeslán"; 
     //var_dump($genres);
     
    foreach ($genres as $genre) 
    {
        echo "</br> $genre";
    }
    } else { ?>
    <h1>Vyber oblíbené hry</h1>
    <form action="index.php" method="post">
    <label for="genre1">RPG</label>
    <input type="checkbox" id="genre1" name="genres[]" value="RPG"> </br>
    <label for="genre2">Akce</label>
    <input type="checkbox" id="genre2" name="genres[]" value="Action"> </br>
    <label for="genre3">Adventura</label>
    <input type="checkbox" id="genre3" name="genres[]" value="Adventure"> </br>
    <label for="genre4">Strategie</label>
    <input type="checkbox" id="genre4" name="genres[]" value="Strategie"> </br>
    <label for="genre5">Simulace</label>
    <input type="checkbox" id="genre5" name="genres[]" value="Simulace"> </br>
    <label for="genre6">FPS</label>
    <input type="checkbox" id="genre6" name="genres[]" value="FPS"> </br>
    <label for="genre7">plošinovka</label>
    <input type="checkbox" id="genre7" name="genres[]="plošinovka"> </br>
    <label for="genre8">arkáda</label>
    <input type="checkbox" id="genre8" name="genres[]" value="Arkáda"> </br>
    <label for="genre9">Bojové</label>
    <input type="checkbox" id="genre9" name="genres[]" value="Bojové"> </br>
    <label for="genre10">stealth</label>
    <input type="checkbox" id="genre10" name="genres[]" value="stealth"> </br> 
   <input type="submit" id="submit" name="submit"> </br>
    </form>
  <?php } ?>
    
</body>
</html>