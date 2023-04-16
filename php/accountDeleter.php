<?php
include_once($_SERVER["DOCUMENT_ROOT"]."..//php/handyFunctions.php");
include_once($_SERVER["DOCUMENT_ROOT"]."..//php/inventoryManager.php");

$counter = 0;
$users = beolvas();
if($_POST["toroljemAzAccot"] == true)
{
    foreach ($users as $user) 
    {
        $counter++;
        if($user->username == getUserName())
        {
            $user->username = "";
            $user->password = "";
            $user->cookie = "";
            // unset($user);
            $inventories = readInventoryFile();
            foreach($inventories as &$inventory)
            {
                if($inventory->username == getUserName())
                {
                    
                    $inventory->username = "";
                    $inventory->inventory = "";
                    // $LOADINV = true;
                }
            }
            writeInventoryFile($inventories);
        }
    }
}
kiir($users);
// header('Location: ..//html/index.html');
?>