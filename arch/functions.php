<?php
/**
 * Created by PhpStorm.
 * User: maxranauro
 * Date: 10/01/2018
 * Time: 15:40
 */


function getLang($uri)

{

    if (isset($_SERVER['HTTP_ACCEPT_LANGUAGE'])) {

        $locale = locale_accept_from_http($_SERVER['HTTP_ACCEPT_LANGUAGE']);
        $lang = substr($locale, 0, 2);


        switch ($lang) {
            case "fr":
                return "$uri/fr/";
                break;
            case "it":
                return "$uri/it/";
                break;
            default:
                return $uri;
        }
    }
}


function sessionCount()

{

    session_start();

    if (isset($_SESSION['views'])) {

        $_SESSION['views'] = $_SESSION['views'] + 1;

    } else {

        $_SESSION['views'] = 1;

    }

    if ($_SESSION['views'] <= 1) {

        echo "redirect";

    } else {

        echo "not the first visit";

    }

}
