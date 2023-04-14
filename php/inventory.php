<?php
    include_once($_SERVER["DOCUMENT_ROOT"]."/webterv/php/handyFunctions.php");
    include_once($_SERVER["DOCUMENT_ROOT"]."/webterv/php/inventoryManager.php");

    // updateInventory("");
    // writeInventoryFile(readInventoryFile());
    if(isset($_COOKIE["kuki"]))
    {
        checkCookie($_COOKIE["kuki"]);
    }
    else
    {
        header('Location: /webterv/html/index.html');
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <script src="inv.js"></script> -->
    <link rel="icon"  href="../kepek/rloi_mc.png">
    <link rel="stylesheet" href="../css/styles.css">
    

    <title>Raktár</title>
</head>
<body>
    <nav class="navbar">
        <div class="menus">
            <a href="./homepage.php">Főoldal</a>
            <a href="./inventory.php" class="current">Raktár</a>
            <a href="./wheel.php">Szerencsekerék</a>
            <a href="./stats.php">Mókás tények</a>
            <a href="../php/logout.php" id="logoutBtn">Kijelentkezés</a>
        </div>
    </nav>
    <main>
        <div>
            <button id="clearMajomButton">Raktár ürítése</button>
            <button class="majomButton">Új random majom felvétele</button>
            <ul class="monkeyList">
                <?php print(($invxd)); ?>
            </ul>
        </div>
    </main>
    <script src="../javascript/inv.js"></script>
</body>
</html>