<?php
    include_once($_SERVER["DOCUMENT_ROOT"]."/webterv/php/handyFunctions.php");
    if(isset($_COOKIE["kuki"]))
    {
        checkCookie($_COOKIE["kuki"]);
    }
    else
    {
        header('Location: /webterv/html/index.html');
    }

    class Inventory
    {
        public $username;
        public $inventory;

        function __construct($nev, $tartalom)
        {
            $this->username = $nev;
            $this->inventory = $tartalom;
        }
    }

    function readInventoryFile()
    {
        if(($file = fopen($_SERVER["DOCUMENT_ROOT"]."/webterv/adatok/inventories.csv", "r")) != false)
        {
            //beolvasom a filet egy tombbe
            $inventories = array();
            while (($data = fgetcsv($file, 5000, ",")) !== FALSE) 
            {
                // echo "ez meg mukodik";
                if(count($data) == 2)
                {
                    array_push($inventories, new Inventory($data[0], $data[1]));
                }
                // echo count($data);
            }
            fclose($file);
            return $inventories;
        }
    }

    function updateInventory($tartalom)
    {
        $username = getUserName();
        $inventories = readInventoryFile();
        $kokany=0;
        foreach($inventories as &$inventory)
        {
            if($inventory->username == $username)
            {
                $inventory->inventory = $tartalom . $inventory->inventory;
                writeInventoryFile($inventories);
                return;
            }
        }
        array_push($inventories, new Inventory($username, $tartalom));
        // if($kokany == count($inventories)){
            
        //     $kokany=0;
        // }
        writeInventoryFile($inventories);
    }

    function writeInventoryFile($inventories)
    {
        if(($file = fopen($_SERVER["DOCUMENT_ROOT"]."/webterv/adatok/inventories.csv", "w")) != false)
        {
            // echo "ez meg fasz";
            //kiirom a filet a tombbol

            foreach($inventories as $inventory) 
            {
                fwrite($file, $inventory->username . "," . $inventory->inventory . "\n");
            }
            fclose($file);
        }
    }

    $invxd = "";
    $LOADINV = false;
    if(isset($_POST["invTartalom"]))
    {
        updateInventory($_POST["invTartalom"]);
    }else{
        $inventories = readInventoryFile();
        $username = getUserName();
        foreach($inventories as &$inventory)
        {
            if($inventory->username == $username)
            {
                
                $invxd = $inventory->inventory;
                $LOADINV = true;
            }
        }
    }
?>