<?php
include_once($_SERVER["DOCUMENT_ROOT"]."..//php/handyFunctions.php");

$users = beolvas();
if(isset($_POST["newPassword"]) && isset($_POST["newPassword2"]))
{
    if($_POST["newPassword"] == $_POST["newPassword2"])
    {
        foreach ($users as $user)
        {
            if($user->username == getUserName())
            {
                if(password_verify($_POST["newPassword"], $user->password))
                {
                    echo "Eddig is ez volt a jelszavad. 🦍";
                }else
                {
                    $user->password = password_hash($_POST["newPassword"], PASSWORD_DEFAULT);
                    header('Location: ..//html/index.html');
                }
            }
        }
    } else echo "Nem egyezik a kettő jelszó.🙊";
}
kiir($users);
?>