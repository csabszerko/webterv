<?php
    setcookie("kuki", "", time()+60*60*24, "/webterv/", "localhost", false, false);
    header('Location: /webterv/html/index.html');
?>