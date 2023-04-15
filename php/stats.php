<?php
    include_once($_SERVER["DOCUMENT_ROOT"]."/webterv/php/handyFunctions.php");
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

    <link rel="icon"  href="../kepek/rloi_mc.png">
    <link rel="stylesheet" href="../css/styles.css">

    <title>Stats</title>
</head>
<body>
    <nav class="navbar">
        <div class="menus">
            <a href="./profil.php" title="Saját Profil"> <img src="../kepek/profil.png" width="30px" height="30px"></a>   
            <a href="./homepage.php" title="Főoldal" ><img src="../kepek/haz.png" width="30px" height="30px"></a>
            <a href="./inventory.php" title="Raktár"><img src="../kepek/inventory.png" width="30px" height="30px"></a>
            <a href="./wheel.php" title="Szerencsekerék"><img src="../kepek/kerek.png" width="30px" height="30px"></a>
            <a href="./stats.php" title="A majmokról" class="current"><img src="../kepek/monkey.png" width="30px" height="30px"></a>
            <a href="../php/logout.php" id="logoutBtn" title="Kijelentkezés"><img src="../kepek/logout.png" width="30px" height="30px"></a>
        </div>
    </nav>
    <main>
        <table id="statsTable">
            <tr>
                <th id="photoID">Fotó ID</th>
                <th id="about">Róla</th>
            </tr>
            <tr>
                <td headers="photoID"><img src="../kepek/majom1.jpg" alt=""></td>
                <td headers="about">
                    <ul>
                        <li>szereti a banánt</li>
                        <li>16 államban körözik gyújtogatásért</li>
                        <li>elismert horgász</li>
                    </ul>
                </td>
            </tr>
            <tr>
                <td headers="photoID"><img src="../kepek/majom2.jpg" alt=""></td>
                <td headers="about">
                    <ul>
                        <li>nagyon szereti a banánt</li>
                        <li>krónikusan depressziós</li>
                        <li>egy politikai podcast állandó vendége</li>
                    </ul>
                </td>
            </tr>
            <tr>
                <td headers="photoID"><img src="../kepek/majom3.jpg" alt=""></td>
                <td headers="about">
                    <ul>
                        <li>imádja a banánt</li>
                        <li>notórius drogbáró</li>
                        <li>szerb állampolgár</li>
                    </ul>
                </td>
            </tr>
            <tr>
                <td headers="photoID"><img src="../kepek/majom4.jpg" alt=""></td>
                <td headers="about">
                    <ul>
                        <li>nem annyira szereti a banánt</li>
                        <li>lázas</li>
                        <li>kiváló zsonglőr</li>
                    </ul>
                </td>
            </tr>
            <tr>
                <td headers="photoID"><img src="../kepek/majom5.jpg" alt=""></td>
                <td headers="about">
                    <ul>
                        <li>imádja a banánt</li>
                        <li>nemzetközi szinten elismert jégszobrász</li>
                        <li>Mátyás király leszármazottja</li>
                    </ul>
                </td>
            </tr>
            <tr>
                <td headers="photoID"><img src="../kepek/majom6.jpg" alt=""></td>
                <td headers="about">
                    <ul>
                        <li>banánfüggő</li>
                        <li>telefonfüggő</li>
                        <li>szerencsejátékfüggő</li>
                    </ul>
                </td>
            </tr>
            <tr>
                <td headers="photoID"><img src="../kepek/majom7.jpg" alt=""></td>
                <td headers="about">
                    <ul>
                        <li>elviseli a banánt</li>
                        <li>kriminálisan csintalan</li>
                        <li>helyi legenda</li>
                    </ul>
                </td>
            </tr>
            <tr>
                <td headers="photoID"><img src="../kepek/majom8.jpg" alt=""></td>
                <td headers="about">
                    <ul>
                        <li>a honvédség legképzettebb banánológusa</li>
                        <li>beceneve "Budi"</li>
                        <li>kifogásolhatatlan asztali etikett</li>
                    </ul>
                </td>
            </tr>
            <tr>
                <td headers="photoID"><img src="../kepek/majom9.jpg" alt=""></td>
                <td headers="about">
                    <ul>
                        <li>társainál csak a banánt szereti jobban</li>
                        <li>érzékeny alkat</li>
                        <li>fél a pókoktól</li>
                    </ul>
                </td>
            </tr>
            <tr>
                <td headers="photoID"><img src="../kepek/majom10.jpg" alt=""></td>
                <td headers="about">
                    <ul>
                        <li>csak banánt eszik</li>
                        <li>nikotintapasz függő</li>
                        <li>tehetségtelen énekes</li>
                    </ul>
                </td>
            </tr>
            <tr>
                <td headers="photoID"><img src="../kepek/majom11.jpg" alt=""></td>
                <td headers="about">
                    <ul>
                        <li>banán a harmadik neve</li>
                        <li>lakhelye Szeged</li>
                        <li>kleptomániás</li>
                    </ul>
                </td>
            </tr>
            <tr>
                <td headers="photoID"><img src="../kepek/majom12.jpg" alt=""></td>
                <td headers="about">
                    <ul>
                        <li>szereti a banánt, de allergiás rá</li>
                        <li>kriptó-milliomos</li>
                        <li>még 6 évig nem hagyhatja el az országot</li>
                    </ul>
                </td>
            </tr>
            <tr>
                <td headers="photoID"><img src="../kepek/majom13.jpg" alt=""></td>
                <td headers="about">
                    <ul>
                        <li>banán nélkül nem hagyja el a házat</li>
                        <li>imádják a nők</li>
                        <li>rajonganak érte a nők</li>
                    </ul>
                </td>
            </tr>
            <tr>
                <td headers="photoID"><img src="../kepek/majom14.jpg" alt=""></td>
                <td headers="about">
                    <ul>
                        <li>banán-ügyileg semleges</li>
                        <li>van 3 fia</li>
                        <li>a megye legrosszabb balhátvédje</li>
                    </ul>
                </td>
            </tr>
            <tr>
                <td headers="photoID"><img src="../kepek/majom15.jpg" alt=""></td>
                <td headers="about">
                    <ul>
                        <li>nem evett még banánt</li>
                        <li>forklift certified</li>
                        <li>munkaidőben iszik</li>
                    </ul>
                </td>
            </tr>
            <tr>
                <td headers="photoID"><img src="../kepek/majom16.jpg" alt=""></td>
                <td headers="about">
                    <ul>
                        <li>szereti a banánt</li>
                        <li>imádja a banánt</li>
                        <li>eszi a banánt</li>
                    </ul>
                </td>
            </tr>
            <tr>
                <td headers="photoID"><img src="../kepek/majom17.jpg" alt=""></td>
                <td headers="about">
                    <ul>
                        <li>banándealer</li>
                        <li>8 évet ült a sitten</li>
                        <li>bélyegeket gyűjt</li>
                    </ul>
                </td>
            </tr>
            <tr>
                <td headers="photoID"><img src="../kepek/majom18.jpg" alt=""></td>
                <td headers="about">
                    <ul>
                        <li>banánmilliomos</li>
                        <li>Magyarország legveszélyesebb bűnözője</li>
                        <li>nem hisz a fürdésben</li>
                    </ul>
                </td>
            </tr>
            <tr>
                <td headers="photoID"><img src="../kepek/majom19.jpg" alt=""></td>
                <td headers="about">
                    <ul>
                        <li>banánfanatikus</li>
                        <li>utólérhetetlen méhész</li>
                        <li>hipochonder</li>
                    </ul>
                </td>
            </tr>
            <tr>
                <td headers="photoID"><img src="../kepek/majom20.jpg" alt=""></td>
                <td headers="about">
                    <ul>
                        <li>banántagadó</li>
                        <li>fajgyűlölő</li>
                        <li>hobbikertész</li>
                    </ul>
                </td>
            </tr>
        </table>
    </main>
</body>
</html>