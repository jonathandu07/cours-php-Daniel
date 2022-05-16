<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exo number</title>
</head>
<body>
    <form action="exo-number.php" method="POST">
        <input type="number" name="number" placeholder="Nombre" min="1" max="12" >
        <input type="submit" name="soumettre" value="soumettre">
        <select name="choix" id="choix" name="choix">
            <option value="1">janv</option>
            <option value="2">fevr</option>
            <option value="3">mars</option>
            <option value="4">av</option>
            <option value="5">mai</option>
            <option value="6">ju</option>
            <option value="7">jul</option>
            <option value="8">Aou</option>
            <option value="9">sem</option>
            <option value="10">oct</option>
            <option value="11">nov</option>
            <option value="12">dec</option>
        </select>
    </form>
    <?php
    
    $mois=array('Janvier','Fevrier','Mars','Avril','Mais','Juin','Juillet','Aout','Septembre','Octobre','Novembre','Decembre',);
    if(isset($_POST['soumettre'])){
        $choix=$_POST['choix'];
        echo $mois[$choix];
        $nombre--;
        // $nombre=$_POST['number']; 
        // foreach($mois as $indice => $valeur){
        //     // $nb = $mois[$nombre];
            
        // }
        // echo($mois[$nombre]);
        $nombre=$_POST['number'];
        $nombre--;
        // $i=0;
        // while ($i <= $nombre) {
        //     $i++;
        //     $mois[$nombre];

        // }
        // echo($mois[$nombre]);
        // for ($i=0; $i <= $nombre; $i++) { 
        //     $mois[$nombre];
        // }
        // echo($mois[$nombre]);
        $i=0;
        do{

            $i++;
        }while($i<$nb);
        echo($mois[$nombre]);
    }

    ?>
</body>
</html>