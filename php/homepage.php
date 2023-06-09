<?php
    // include_once($_SERVER["DOCUMENT_ROOT"]."/webterv/php/handyFunctions.php");
    // if(isset($_COOKIE["kuki"]))
    // {
    //     // echo "ez meg jo";
    //     checkCookie($_COOKIE["kuki"]);
    // }
    // else
    // {
    //     header('Location: /webterv/html/index.html');
    //     echo "itt a hiba";
    // }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="icon"  href="../kepek/rloi_mc.png">
    <link rel="stylesheet" href="../css/styles.css">

    <title>Főoldal</title>
</head>

<body>
    <nav class="navbar">
        <div class="menus">
            <a href="./homepage.php" title="Főoldal" class="current"><img src="../kepek/haz.png" width="30" height="30" alt=""></a>
            <a href="./inventory.php" title="Raktár"><img src="../kepek/inventory.png" width="30" height="30" alt=""></a>
            <a href="./wheel.php" title="Szerencsekerék"><img src="../kepek/kerek.png" width="30" height="30" alt=""></a>
            <a href="./stats.php" title="A majmokról"><img src="../kepek/monkey.png" width="30" height="30" alt=""></a>
            <a href="./profil.php" title="Saját Profil"><img src="../kepek/profil.png" width="30" height="30" alt=""></a>
            <a href="./kereses.php" title="Keresés"><img src="../kepek/nagyito.png" width="30" height="30" alt=""></a>  
            <a href="../php/logout.php" id="logoutBtn" title="Kijelentkezés"><img src="../kepek/logout.png" width="30" height="30" alt=""></a>
    </div>
    </nav>
    <main id="homepagemain">
        <!-- <strong><?php //print("Üdvözöllek " . getUserName() ."!")?></strong> -->
        
        <strong>Az oldal használata</strong>
        <p class=tutorial>
            A majmok gyűjtését a <a href="./wheel.php" title="Szerencsekerék"><img src="../kepek/kerek.png" width="20" height="20" alt=""></a> fül alatt kezdheted meg. <br> Egy véletlenszerű majmot nyerhetsz egyedi névvel.
        </p>
        <p class=tutorial>
            A nyert majmok eltárolódnak a <a href="./inventory.php" title="Raktár"><img src="../kepek/inventory.png" width="20" height="20" alt=""></a> fülben.
            Itt egy törlés gomb található, mellyel <em>törölheted</em> az eddig megszerzett majmokat.
        </p>
        <p class=tutorial>
            Mások raktárát a <a href="./kereses.php" title="Keresés"><img src="../kepek/nagyito.png" width="20" height="20" alt=""></a>
            fül alatt tekintheted meg. Itt rákereshetsz egy felhasználónévre és megtekintheted az általuk összegyűjtött majmokat.
        </p>
        <p class=tutorial>
            Ha többet szeretnél megtudni a megszerezhető majmokról, akkor látogasd meg a <a href="./stats.php" title="A majmokról"><img src="../kepek/monkey.png" width="20" height="20" alt=""></a> fület!
            Itt a képek alapján tudod azonosítani a különböző majomtípusokat és megismerni tulajdonságaikat.
        </p>
        <p class=tutorial>
            A <a href="./profil.php" title="Saját Profil"><img src="../kepek/profil.png" width="20" height="20" alt=""></a>
            fül alatt meg tudod változtatni a felhasználóneved, a jelszavad, illetve <em>törölheted</em> a fiókod.
        </p>
        <p class=tutorial>
            Az oldalról kijelentkezni a <a href="./logout.php" title="Kijelentkezés"><img src="../kepek/logout.png" width="20" height="20" alt=""></a>
            gombbal tudsz.
            
        </p>
        <p>
            Az oldalt Kiss Csaba és Masa Roland készítette. 
        </p>
        <!--<div id="mbcontainer">
            <div class="messageboard" id="mbdiv">
                gatya
            </div>

            <form class="messageboard" action="./messageboard.php" method="POST">
                <input type="text" id="mbmessage" name="mbmessage">
                <input type="submit" id="mbsubmit" value="Küldés">
            </form>
        </div>-->

        <!--<p>
            A majmok szeleburdi neveit az alábbiakhoz hasonló videók inspirálták!
        </p>

        <video controls>
            <source src="../kepek/majomvideo2.mp4">
            Emberunk a barlangfalra irt kerdessel keres.
        </video>
        <video controls>
            <source src="../kepek/majomvideo3.mp4">
            Emberunk a barlangfalra irt kerdessel keres.
        </video>
        <video controls>
            <source src="../kepek/video0.mov">
            Emberunk a barlangfalra irt kerdessel keres.
        </video>-->
    </main>
</body>
</html>