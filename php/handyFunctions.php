<?php
    class User
    {
        public $username;
        public $password;
        public $cookie;

        function __construct($nev, $jelszo, $kuki)
        {
            $this->username = $nev;
            $this->password = $jelszo;
            $this->cookie = $kuki;
        }
    }

    function beolvas()
    {
        if(($file = fopen($_SERVER["DOCUMENT_ROOT"]."/webterv/adatok/users.csv", "r")) != false)
        {
            //beolvasom a filet egy tombbe
            $users = array();
            while (($data = fgetcsv($file, 1000, ",")) !== FALSE) 
            {
                // echo "ez meg mukodik";
                if(count($data) == 3)
                {
                    array_push($users, new User($data[0], $data[1], $data[2]));
                }
                // echo count($data);
            }
            fclose($file);
            return $users;
        }
    }

    function kiir($users)
    {
        if(($file = fopen($_SERVER["DOCUMENT_ROOT"]."/webterv/adatok/users.csv", "w")) != false)
        {
            // echo "ez meg fasz";
            //kiirom a filet a tombbol

            foreach($users as $user) 
            {
                fwrite($file, $user->username . "," . $user->password . "," . $user->cookie . "\n");
            }
            fclose($file);
        }
    }
?>