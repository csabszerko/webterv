<?php
include_once($_SERVER["DOCUMENT_ROOT"]."..//php/handyFunctions.php");
include_once($_SERVER["DOCUMENT_ROOT"]."..//php/inventoryManager.php");

$users = beolvas();
if(isset($_POST["newUsername"]))
{
    foreach ($users as $user)
    {
        if($user->username == $_POST["newUsername"])
        {
            echo "Már létezik ilyen nevű felhasználó.🦧";
            exit;
        }
    }
    foreach ($users as $user)
    {
        if($user->username == getUserName())
        {
            $inventories = readInventoryFile();
            foreach($inventories as &$inventory)
            {
                if($inventory->username == getUserName())
                {
                    
                    $inventory->username = $_POST["newUsername"];
                    // $LOADINV = true;
                }
            }
            writeInventoryFile($inventories);
            $user->username = $_POST["newUsername"];
            header('Location: ..//php/profil.php');
        }
    }
}
kiir($users);
?>