<?php
    include_once($_SERVER["DOCUMENT_ROOT"]."/webterv/php/handyFunctions.php");
    if(isset($_COOKIE["kuki"]))
    {
        // echo "ez meg jo";
        checkCookie($_COOKIE["kuki"]);
    }
    else
    {
        header('Location: /webterv/html/index.html');
        echo "itt a hiba";
    }
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
            <a href="./homepage.php" class="current">Főoldal</a>
            <a href="./inventory.php">Raktár</a>
            <a href="./wheel.php">Szerencsekerék</a>
            <a href="./stats.php">Mókás tények</a>
            <a href="../php/logout.php" id="logoutBtn">Kijelentkezés</a>
        </div>
    </nav>
    <main id="homepagemain">
        <strong>Üdvözöllek!</strong>
        <p>
            Ez az oldal a majmok gyűjtéséről szól.<br>
            Az oldalt Kiss Csaba és Masa Roland készítette. 
        </p>
        
        <strong>Az oldal használata</strong>
        <p>
            A majmok gyűjtését a <em>Szerencsekerék</em> fül alatt kezdheted meg. Egy véletlenszerű majmot nyerhetsz egyedi névvel.
            A majmod bizonyos böngészőkben már most is eltárolódik a <em>Raktárban,</em> de a későbbiekben ott találod majd.
            A <em>Raktárban</em> egyelőre 2 gomb található, az egyikkel törölheted az eddig megszerzett majmokat, a másikkal generálhatsz új véletlenszerű majmokat.
            (Ez ideiglenes és csak demonstrációs célt szolgál.)
            Ha többet szeretnél megtudni a megszerezhető majmokról, akkor látogasd meg a <em>Mókás Tények</em> fület!
            Itt a képek alapján tudod azonosítani a különböző majomtípusokat és megismerni tulajdonságaikat.
        </p>

        <div id="mbcontainer">
            <div class="messageboard" id="mbdiv">
                fasz
            </div>

            <form class="messageboard" action="">
                <input type="text" id="mbmessage">
                <input type="submit" id="mbsubmit" value="Küldés">
            </form>
        </div>

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