<?php
    echo "ez meg betolt";
    include_once($_SERVER["DOCUMENT_ROOT"]."/webterv/php/handyFunctions.php");
    echo "ez meg betolt";
    $users = beolvas(); 
    echo "ez meg betolt";

    if((isset($_POST["username"]) && trim($_POST["username"]) !== "") && (isset($_POST["password"]) && trim($_POST["password"]) !== "") && (isset($_POST["password_confirm"]) && trim($_POST["password_confirm"]) !== ""))
    {
        foreach($users as $user) 
            {
                if($user->$username == $_POST["username"])
                {
                    echo "A felhasználó név foglalt.";
                    exit();
                }
            }

        if($_POST["password_confirm"] == $_POST["password"])
        {
            array_push($users, new User($_POST["username"], $_POST["password"], ""));
        }
    }
    kiir($users);
    echo "ez meg betolt";
?>