<?php
/**
 * Created by PhpStorm.
 * User: maxranauro
 * Date: 10/01/2018
 * Time: 10:14
 */

require_once __DIR__ . '/vendor/autoload.php';

use Sinergi\BrowserDetector\Language;


session_start();

$language = new Language();

$sessionStatus = (isset($_SESSION['pageViews'])) ? ($_SESSION['pageViews'] = $_SESSION['pageViews'] + 1) : ($_SESSION['pageViews'] = 1);


switch (true) {
    case (($language->getLanguage() === "it") && $sessionStatus <= 1):
        echo("go to Italian version");
        break;

    case (($language->getLanguage() === "fr") && $sessionStatus <= 1):
        echo("go to french version");
        break;

    default:
        echo("go to english version");
        break;

}