<?php
$cookie = "carrinho";
setcookie("cookie_temporario", $cookie);
echo "Valor: ".$_COOKIE["cookie_temporario"];

if (!isset($_COOKIE["acessos"])) {
    setcookie("acessos", 1);
    header("location:exibir_cookie.php");
} else {
    setcookie("acessos", setcookie($_COOKIE["acessos"]) + 1);
    if($_COOKIE["acessos"]>0){
        setcookie("cookie_temporario", false, time());
    }
    header("location:exibir_cookie.php");
}
