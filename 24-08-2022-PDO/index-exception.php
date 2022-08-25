<?php

function test()
{
    throw new Exception("Oups je suis un geek pas aimé, je parle des doigts");
}

try{
    test();
}catch(Exception $e){
    echo "<section>"."Error: " . $e->getMessage()."<br/>"."</section>";
    echo "<section>"."Error: " . $e->getLine()."<br/>"."</section>";
    echo "<section>"."Error: " . $e->getCode()."<br/>"."</section>";
    echo "<section>"."Error: " . $e->getFile()."<br/>"."</section>";
};