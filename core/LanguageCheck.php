<?php
/**
 * Created by PhpStorm.
 * User: MassimilianoRanauro (huckbit@gmail.com)
 * Date: 11/01/2018
 * Time: 14:30
 */

use Sinergi\BrowserDetector\Language;


Class LanguageCheck
{

    private $lang;
    private $website_base_url;

    public function __construct($lang, $website_base_url)
    {
        $this->lang = $lang;
        $this->website_base_url = $website_base_url;
    }

    public function printData()
    {
        var_dump($this->lang);
    }

    public function redirect()
    {
        //instantiate a new language object from browser detector
        $language = new Language();

        //start a new session
        session_start();

        //first request $_SESSION['redirect'] not set >>> set variable to true. Next round set to false (prevent more than one redirection)
        $sessionStatus = (isset($_SESSION['redirect'])) ? ($_SESSION['redirect'] = false) : ($_SESSION['redirect'] = true);

        //for each language in the array: if the browser is set equal the key and the session is true (first request: true) do the redirection
        foreach (array_reverse($this->lang) as $key => $value) {

            if (($language->getLanguage() === $key) && ($sessionStatus)) {

                header("Location:" . $this->website_base_url['url'] . "/" . $value);
                exit();

            }
        }
    }
}