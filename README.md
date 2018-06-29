# Browser Language Detect and Redirect

Detect the browser language settings and redirect to the corrispondent lang-website. 

The redirection works just for the first request to the site index (homepage). 

- Insert the website_base_url in `config.php` (test purpose only, setup the app to work with your website)
- Set the languages inside the array `usedLanguages.php`.

The default address format needs to be:

```shell
http://www.websitename.io/lang/

e.g.: http://www.websitename.io/it/
```

The app uses [sinergi/browser-detector](https://packagist.org/packages/sinergi/browser-detector) to perform the language check.
