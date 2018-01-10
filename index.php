<?php
/**
 * Created by PhpStorm.
 * User: maxranauro
 * Date: 10/01/2018
 * Time: 14:35
 */

require_once __DIR__ . '/vendor/autoload.php';
use Sinergi\BrowserDetector\Language;
use Sinergi\BrowserDetector\Browser;

$lang = require  'usedLanguages.php';
$website_base_url = "http://hauteroute.local";
$language = new Language();
$browser = new Browser();

session_start();

$sessionStatus = (isset($_SESSION['redirect'])) ? ($_SESSION['redirect'] = false) : ($_SESSION['redirect'] = true);


foreach (array_reverse($lang) as $key => $value) {

    if(($language->getLanguage() === $key) && ($sessionStatus) ) {

        header("Location:" . $website_base_url . "/" . $value );
        exit();

    }
}