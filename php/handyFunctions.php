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
            // echo "ez meg gatya";
            //kiirom a filet a tombbol

            foreach($users as $user) 
            {
                fwrite($file, $user->username . "," . $user->password . "," . $user->cookie . "\n");
            }
            fclose($file);
        }
    }

    function genCookie($length = 32) {
        $characters = "0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ";
        $charactersLength = strlen($characters);
        $randomString = "";
        for ($i = 0; $i < $length; $i++) {
            $randomString .= $characters[random_int(0, $charactersLength - 1)];
        }
        return $randomString;
    }

    function checkCookie($cookie)
    {
        $users = beolvas();
        foreach($users as $user) 
        {
            if($user->cookie == $cookie)
            {
                return;
            }
        }
        header('Location: /webterv/html/index.html');
    }

    function getUserName()
    {
        $username = "";
        $usercookie = $_COOKIE["kuki"];
        $users = beolvas();
        foreach ($users as $user) {
            if($user->cookie == $usercookie)
            {
                $username = $user->username;
            }
        }
        return $username;
    }
?>