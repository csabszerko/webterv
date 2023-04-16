<?php
    include_once($_SERVER["DOCUMENT_ROOT"]."..//php/handyFunctions.php");
    if(isset($_COOKIE["kuki"]))
    {
        checkCookie($_COOKIE["kuki"]);
    }
    else
    {
        header('Location: ..//html/index.html');
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

    <title>Szerencsekerék</title>
</head>
<body>
    <nav class="navbar">
    <div class="menus">  
            <a href="./homepage.php" title="Főoldal" ><img src="../kepek/haz.png" width="30" height="30" alt=""></a>
            <a href="./inventory.php" title="Raktár"><img src="../kepek/inventory.png" width="30" height="30" alt=""></a>
            <a href="./wheel.php" title="Szerencsekerék" class="current"><img src="../kepek/kerek.png" width="30" height="30" alt=""></a>
            <a href="./stats.php" title="A majmokról"><img src="../kepek/monkey.png" width="30" height="30" alt=""></a>
            <a href="./profil.php" title="Saját Profil"> <img src="../kepek/profil.png" width="30" height="30" alt=""></a> 
            <a href="./kereses.php" title="Keresés"><img src="../kepek/nagyito.png" width="30" height="30" alt=""></a>    
            <a href="../php/logout.php" id="logoutBtn" title="Kijelentkezés"><img src="../kepek/logout.png" width="30" height="30" alt=""></a>
        </div>
    </nav>
    <main>
        <div id="kerekContainer">
            <img src="../kepek/mmcNyil.png" id="nyil" alt="">
            <img src="../kepek/majomkerek.png" id="kerek" alt="">
        </div>
        <button id="spinButton">Pörgetés</button>
        <div class="nyeremeny"></div>
        <div class="resultContainer">
            <!-- <div class="result"></div> -->
        </div>
        <ul class="fakeList"></ul>
    </main>
    <script src="../javascript/inv.js"></script>
    <script src="../javascript/wheel.js"></script>
</body>
</html>