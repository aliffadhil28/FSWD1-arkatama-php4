<?php

session_destroy();
    // echo "true";
setcookie("checkLogin",0,time()+(86400 * 30), "/");
echo $_COOKIE["checkLogin"];
header("Location:./login.php");