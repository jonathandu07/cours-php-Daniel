<!DOCTYPE html>
<html lang="FR-fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/main.css">
    <title>Do While</title>
</head>
<body>
    <?php
        $nom = "Elsa";
        $nb=strlen($nom);
        $cpt=0;
        // Do while passe une fois dans le Do pour verifié le While 
        do{


            echo($nom[$cpt]." ");
            $cpt++;
        }while($cpt<$nb);


    ?>
   
</body>
</html>