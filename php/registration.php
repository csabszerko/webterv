<?php
    include_once($_SERVER["DOCUMENT_ROOT"]."/webterv/php/handyFunctions.php");
    $users = beolvas(); 
    if((isset($_POST["username"]) && trim($_POST["username"]) !== "") && (isset($_POST["password"]) && trim($_POST["password"]) !== "") && (isset($_POST["password_confirm"]) && trim($_POST["password_confirm"]) !== ""))
    {
        foreach($users as $user) 
            {
                if($user->username == $_POST["username"])
                {
                    echo "A felhasználónév foglalt. 🙈";
                    exit();
                }
            }

        if($_POST["password_confirm"] == $_POST["password"])
        {
            array_push($users, new User($_POST["username"], password_hash($_POST["password"], PASSWORD_DEFAULT), "inshallah"));
            header('Location: /webterv/html/index.html');
        }
        else echo "Nem egyezik a 2 jelszó. 🙊";

    }
    kiir($users);
    // echo "ez meg betolt";
?>