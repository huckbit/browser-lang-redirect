<?php
/**
 * Created by PhpStorm.
 * User: MassimilianoRanauro (huckbit@gmail.com)
 * Date: 10/01/2018
 * Time: 14:35
 */


require 'bootstrap.php';

//import configuration
$lang = require 'config/usedLanguages.php';
$website_base_url = require 'config/config.php';


//instantiate a new LanguageCheck object
$userLang = new LanguageCheck($lang, $website_base_url);

//redirect to the language based on the user language browser settings
$userLang->redirect();