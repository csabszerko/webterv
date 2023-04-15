<?php
    include_once($_SERVER["DOCUMENT_ROOT"]."/webterv/php/handyFunctions.php");
    include_once($_SERVER["DOCUMENT_ROOT"]."/webterv/php/metodusok.php");
    $nev=getUserName();

    $uzenetek=mbbeolvas();
    if(isset($_POST["message"])){
        array_push($uzenetek, new uzenet($nev, $_POST["message"]));
    }
    mbkiir($uzenetek);
    
?>