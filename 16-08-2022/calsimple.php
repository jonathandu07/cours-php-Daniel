<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/main.css">
    <title>Calculatrice</title>
</head>
<body>
    <form action="<?php echo $_SERVER["PHP_SELF"]; ?>"  method="POST">
    <input type="text" name="valeur1" placeholder="rentre un nombre" maxlength="6" required>
        <input type="text" name="valeur2" placeholder="rentre un nombre" maxlength="6" required>
        <!-- <button type="submit" name="calculer">=</button> -->
        <button type="reset">C</button>
        <button value="add" name="operation">+</button>
        <button value="mul" name="operation">x</button>
        <button value="sous" name="operation">-</button>
        <button value="div" name="operation">:</button>
</form>
</body>
</html>
<?php
class Calculatrice
{
    private $valeur1;
    private $valeur2;

    public function __construct($valeur1, $valeur2){
        $this->valeur1 = $valeur1;
        $this->valeur2 = $valeur2;
    }

    public function additioner($valeur1, $valeur2){
        return $valeur1 + $valeur2;
        }


        public function diviser($valeur1, $valeur2){
        return $valeur1 / $valeur2;
        }

        public function multiplier($valeur1, $valeur2){
        return $valeur1 * $valeur2;
        }

        public function soustraire($valeur1, $valeur2){
        return $valeur1 - $valeur2;
        }

      

}
  //  seconde partie

  if (isset($_POST['valeur1'])&isset($_POST['valeur2'])&isset($_POST['operation'])){
    $valeur1 = $_POST['valeur1'];
    $valeur2 = $_POST['valeur2'];
    $operation = $_POST['operation'];

    if ( is_numeric( $valeur1 )&is_numeric( $valeur2 )){
        if( $operation != null )
        {
            switch( $operation )
            {
                case "add" : $result = additioner($valeur1,$valeur2);
                echo("<tr><td>"); 
                echo( "Résultat de l'addtion est:<b> $result</b>" );
                echo("</td></tr>");break;
                case "mul" : $result = multiplier($valeur1,$valeur2);
                echo("<tr><td>");
                echo( "Résultat de la multiplication est:<b> $result</b>" );
                echo("</td></tr>");break;
                case "sous" : $result = soustraire($valeur1,$valeur2);
                echo("<tr><td>");
                echo( "Résultat de la soustraction est:<b> $result</b>" );
                echo("</td></tr>");break;
                case "div" : $result = diviser($valeur1,$valeur2);
                echo("<tr><td>");
                echo( "Résultat de la division est:<b> $result</b>" );
                echo("</td></tr>");break;
            }
        }
    }
    else
    {
    echo( "Données invalide, veuillez ré-essayer ");
    }

    }
?>