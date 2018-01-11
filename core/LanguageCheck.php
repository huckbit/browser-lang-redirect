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

        //if the session is set and is true set it to false. This means that the redirect is already append
        $sessionStatus = (isset($_SESSION['redirect'])) ? ($_SESSION['redirect'] = false) : ($_SESSION['redirect'] = true);


        //foreach language in the config: if the browser is set equal the key and the session is true (first time visit) do the redirection
        foreach (array_reverse($this->lang) as $key => $value) {

            if (($language->getLanguage() === $key) && ($sessionStatus)) {

                header("Location:" . $this->website_base_url['url'] . "/" . $value);
                exit();

            }
        }
    }
}