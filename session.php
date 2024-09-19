<?php

    session_start();
    // browswe မှာ PHPSESSID ဆောက်ပြီး server မှာ file storage အနေနဲ့သိမ်း temp/sess_xxx_213
    // php.ini session.gc_maxlifetime=1440 (24 minu)

    // Login System (Authentication)
    // Shoping cart (e-commerce website)
    // user perference (theme, language)
    // Multi-step forms (Wizard forms)
    //Flash messages
    $_SESSION["name"] = "Aung Htike Lynn";
    $_SESSION["email"] = "aunghtikelynn23599@gmail.com";

    if($_SESSION["name"] && $_SESSION["email"]){
        echo "<h1>My name is ".$_SESSION["name"]."</h1>";
        echo "<h1>My email is".$_SESSION["email"]."</h1>";
    } else {
        echo "<h1>Empty data.</h1>";
    }
?>