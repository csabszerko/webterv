<?php

    echo "ez meg mukodik";
    class User
    {
        public $username;
        public $password;
        public $cookie;

        function __construct($nev, $jelszo, $kuki)
        {
            this->$username = $nev;
            this->$password = $jelszo;
            this->$cookie = $kuki;
        }
    }

    echo "ez meg mukodik";

    function beolvas()
    {
        if($file = fopen($_SERVER["DOCUMENT_ROOT"]."/webterv/adatok/users.csv", "r") != false)
        {
            //beolvasom a filet egy tombbe
            $users = array();
            while (($data = fgetcsv($file, 1000, ",")) !== FALSE) 
            {
                array_push($users, new User($data[0], $data[1], $data[2]));
            }
            fclose($file);
            return $users;
        }
    }

    function kiir($users)
    {
        if($file = fopen($_SERVER["DOCUMENT_ROOT"]."/webterv/adatok/users.csv", "w") != false)
        {
            //kiirom a filet a tombbol

            foreach($users as $user) 
            {
                fwrite($file, $user->$username . "," . $user->$password . "," . $user->$cookie . "\n");
            }
            fclose($file);
        }
    }
?>