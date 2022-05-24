<?php
function diviser($x){
    $a=5;
    if(!$x){
        throw new Exception("La division par zéro est impossible espèce de bouffon");

    }
    return $a/$x;
}
try{
    echo "<section><h1>".diviser(10)."</h1></section>"."<br/>";

    echo "<section><h1>".diviser(20)."</h1></section>"."<br/>";

    echo "<section><h1>".diviser(5)."</h1></section>"."<br/>";

    echo "<section><h1>".diviser(0)."</h1></section>"."<br/>";
}

catch(Exception $error){
    echo "<section><h1>"."Exception reçue: ".$error->getMessage()."</h1></section>"."<br/>";

    echo "<section><h1>"."Exception reçue: ".$error->getLine()."</h1></section>"."<br/>";

    echo "<section><h1>"."Exception reçue: ".$error->getCode()."</h1></section>"."<br/>";

    echo "<section><h1>"."Exception reçue: ".$error->getFile()."</h1></section>"."<br/>";

}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="main.css">
    <link rel="shortcut icon" href="/images/rouge-PTLEJ-bases.png" />
    <title>tester et attrapper</title>
</head>
<body>
    
    
</body>
</html>