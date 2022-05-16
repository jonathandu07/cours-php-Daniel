<?php
    

?>

<!DOCTYPE html>
<html lang="fr-FR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/main.css">
    <title>Ma première page en php</title>
</head>
<body>

   <?php
   $nom="Sandrine";
   $nb=strlen($nom);
   $cpt=0;
   do{
       echo($nom[$cpt]." ");
       $cpt++;

   }while($cpt<$nb);
    
    ?>
        
    
</body>
</html>
