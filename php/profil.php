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

    <title>Saját Profil</title>
</head>

<body>
    <nav class="navbar">
        <div class="menus"> 
            <a href="./homepage.php" title="Főoldal"><img src="../kepek/haz.png" width="30px" height="30px"></a>
            <a href="./inventory.php" title="Raktár"><img src="../kepek/inventory.png" width="30px" height="30px"></a>
            <a href="./wheel.php" title="Szerencsekerék"><img src="../kepek/kerek.png" width="30px" height="30px"></a>
            <a href="./stats.php" title="A majmokról"><img src="../kepek/monkey.png" width="30px" height="30px"></a>
            <a href="./profil.php" title="Saját Profil" class="current"> <img src="../kepek/profil.png" width="30px" height="30px"></a>   
            <a href="./kereses.php" title="Keresés"><img src="../kepek/nagyito.png" width="30px" height="30px"></a>  
            <a href="../php/logout.php" id="logoutBtn" title="Kijelentkezés"><img src="../kepek/logout.png" width="30px" height="30px"></a>
    </nav>
    <main id="homepagemain">
        
        <!-- <img src="../kepek/majom13.jpg" alt="itt amugy van egy kep" id="profilkep"> -->
        <p id="displayFelNev"><?php print("Üdvözöllek a profilodon " . "<span id=actualFelNev>" . getUserName() . "</span>!"); ?></p>
        <button id="changeName" class="changeBtn">Új név</button>
        <button id="changePass" class="changeBtn">Új jelszó</button>

        <form id="nevvaltoztatas" method="POST" action="../php/nevChange.php"> 
            <input class="ujszoveg" type="text"  placeholder="új felhasználónév" required name="newUsername"> 
            <input class="gomb" type="submit" value="megváltoztat" style="background-color: #04AA6D;" name="nevvaltoztat"> 
        </form>
        <form id="jelszovaltoztatas" method="POST" action="../php/jelszoChange.php"> 
            <input class="ujszoveg" type="password"  placeholder="új jelszó" required name="newPassword">
            <input class="ujszoveg" type="password"  placeholder="új jelszó újra" required name="newPassword2"> 
            <input class="gomb" type="submit" value="megváltoztat" style="background-color: #04AA6D;" name="jelszovaltoztat"> 
        </form>
        <button id="deleteAcc" class="gomb">Felhasználó Törlése</button>
    </main>
    <script src="../javascript/dataChangeMenu.js"></script>
</body>
</html>