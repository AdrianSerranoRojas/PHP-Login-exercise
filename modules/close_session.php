<?php
session_start();
unset ($_SESSION);
destroySessionCookie();
session_destroy();
header("Location:../index.php");


function destroySessionCookie(){
    if(ini_get("session.use_cookies")){
        $params = session_get_cookie_params();
        setcookie(
            session_name(),
            '',
            time() - 42000,
            $params["path"],
            $params["domain"],
            $params["secure"],
            $params["httponly"]
        );
    }
}


