<?php
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);
    include_once($_SERVER["DOCUMENT_ROOT"]."/webterv/php/handyFunctions.php");
    $users = beolvas(); 
    if((isset($_POST["username"]) && trim($_POST["username"]) !== "") && (isset($_POST["password"]) && trim($_POST["password"]) !== "") && (isset($_POST["password_confirm"]) && trim($_POST["password_confirm"]) !== ""))
    {
        foreach($users as $user) 
            {
                if($user->username == $_POST["username"])
                {
                    echo "A felhasználó név foglalt. 🖕🏼";
                    exit();
                }
            }

        if($_POST["password_confirm"] == $_POST["password"])
        {
            array_push($users, new User($_POST["username"], $_POST["password"], "inshallah"));
        }
        else echo "Nem egyezik a 2 jelszó. 🖕🏼";
    }
    kiir($users);
    // echo "ez meg betolt";
?>