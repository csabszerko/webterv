<?php
    include_once($_SERVER["DOCUMENT_ROOT"]."/webterv/php/handyFunctions.php");
    
    class uzenet {
        public $username;
        public $message;

        function __construct($nev, $uzenet){
            $this->username = $nev;
            $this->message = $uzenet;
        }
    }

    function mbbeolvas()
    {
        if(($file = fopen($_SERVER["DOCUMENT_ROOT"]."/webterv/adatok/uzenetek.csv", "r")) != false)
        {
            //beolvasom a filet egy tombbe
            $uzenetek = array();
            while (($data = fgetcsv($file, 1000, ":")) !== FALSE) 
            {
                // echo "ez meg mukodik";
                if(count($data) == 2)
                {
                    array_push($uzenetek, new uzenet($data[0], $data[1]));
                }
                // echo count($data);
            }
            fclose($file);
            return $uzenetek;
        }
    }

    function mbkiir($uzenetek)
    {
        if(($file = fopen($_SERVER["DOCUMENT_ROOT"]."/webterv/adatok/uzenetek.csv", "w")) != false)
        {
            // echo "ez meg fasz";
            //kiirom a filet a tombbol

            foreach($uzenetek as $uzenet) 
            {
                fwrite($file, $uzenet->username . ":" . $uzenet->message . "\n");
            }
            fclose($file);
        }
    }
    
   
    
?>