<?php
/**
 * Created by PhpStorm.
 * User: maxranauro
 * Date: 10/01/2018
 * Time: 14:35
 */

//load the composer packages
require_once __DIR__ . '/vendor/autoload.php';

use Sinergi\BrowserDetector\Language;

//import config files
$lang = require 'config/usedLanguages.php';
$website_base_url = require 'config/config.php';

//instantiate a new language object from browser detector
$language = new Language();

//start a new session
session_start();

//if the session is set and is true set it to false. This means that the redirect is already append
$sessionStatus = (isset($_SESSION['redirect'])) ? ($_SESSION['redirect'] = false) : ($_SESSION['redirect'] = true);


//foreach language in the config: if the browser is set equal the key and the session is true (first time visit) do the redirection
foreach (array_reverse($lang) as $key => $value) {

    if(($language->getLanguage() === $key) && ($sessionStatus) ) {

        header("Location:" . $website_base_url['url'] . "/" . $value );
        exit();

    }
}