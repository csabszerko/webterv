<?php
    include_once($_SERVER["DOCUMENT_ROOT"]."/webterv/php/handyFunctions.php");
    $users = beolvas(); 
    if((isset($_POST["username"]) && trim($_POST["username"]) !== "") && (isset($_POST["password"]) && trim($_POST["password"]) !== ""))
    {
        // $hash = password_hash($_POST["password"], PASSWORD_DEFAULT);
        foreach($users as &$user) 
            {
                if($user->username == $_POST["username"] && password_verify($_POST["password"], $user->password))
                {
                    $cookie = genCookie();
                    $user->cookie = $cookie;
                    setcookie("kuki", $cookie, time()+60*60*24, "/webterv/", "localhost", false, false);
                    header('Location: /webterv/php/homepage.php');
                    kiir($users);
                    exit();
                }
            }
    }
    echo "Hibás felhasználónév és/vagy jelszó.";
    // header('Location: /webterv/html/index.html');
?>