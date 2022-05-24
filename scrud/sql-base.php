<?php
    function connexbase($base,$param){
        require_once ($param.".inc.php");
        $idcom=new mysqli(HOST,USER,PASS,$base);
        if(!$idcom){
            echo "<script>alert ('connexion imposible à la base magasin');</script>";
            exit();
        }
        else{
            return $idcom;
        }
    }
?>