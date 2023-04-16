<?php
    include_once($_SERVER["DOCUMENT_ROOT"]."..//php/inventoryManager.php");
    // if(isset($_COOKIE["kuki"]))
    // {
    //     // echo "ez meg jo";
    //     checkCookie($_COOKIE["kuki"]);
    // }
    // else
    // {
    //     header('Location: ..//html/index.html');
    //     echo "itt a hiba";
    // }
    $invToShow = "";

    $inventories = readInventoryFile();
    if(isset($_GET["lookUpName"]))
    {
        foreach ($inventories as $inventory)
        {
            if($inventory->username == $_GET["lookUpName"])
            {
                $invToShow = $inventory->inventory;
                // echo $invToShow;
            }
        }
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

    <title>Keresés</title>
</head>

<body>
    <nav class="navbar">
        <div class="menus">
            <a href="./homepage.php" title="Főoldal"><img src="../kepek/haz.png" width="30" height="30" alt=""></a>
            <a href="./inventory.php" title="Raktár"><img src="../kepek/inventory.png" width="30" height="30" alt=""></a>
            <a href="./wheel.php" title="Szerencsekerék"><img src="../kepek/kerek.png" width="30" height="30" alt=""></a>
            <a href="./stats.php" title="A majmokról"><img src="../kepek/monkey.png" width="30" height="30" alt=""></a>
            <a href="./profil.php" title="Saját Profil"><img src="../kepek/profil.png" width="30" height="30" alt=""></a>
            <a href="./kereses.php" title="Keresés" class="current"><img src="../kepek/nagyito.png" width="30" height="30" alt=""></a>     
            <a href="../php/logout.php" id="logoutBtn" title="Kijelentkezés"><img src="../kepek/logout.png" width="30" height="30" alt=""></a>
        </div>
    </nav>
    <main id="homepagemain">
        <form id="kereses" method="GET" action="../php/kereses.php"> 
            <input class="keresendoNev" type="text"
            <?php if(isset($_GET["lookUpName"])){
                print("placeholder='" . $_GET["lookUpName"] . "'");
            }else print("placeholder='keresett felhasználó neve'");
            ?>
            required name="lookUpName"> 
            <input class="gomb" type="submit" value="keresés" style="background-color: #04AA6D;" name="lookUpBtn"> 
        </form>
        <ul class="monkeyList">
                <?php print(($invToShow)); ?>
        </ul>
    </main>
</body>
</html>