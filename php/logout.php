<?php
    setcookie("kuki", "", time()+60*60*24, "..//", "localhost", false, false);
    header('Location: ..//html/index.html');
?>