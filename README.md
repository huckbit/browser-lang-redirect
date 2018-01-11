# Browser Language Detect and Redirect

Purpose of this app is detect the language setup of the browser and redirect to the right language website just on the first request.

- Insert the website_base_url in `config.php` (test purpose only, setup the app wo work with the your website)
- Set the languages inside the array `usedLanguages.php`.

This app is born to use the default address in **en** `http://www.websitename.io` and the other languages with the address:

```shell
http://www.websitename.io/lang/

e.g.: http://www.websitename.io/it/
```

The app uses [sinergi/browser-detector](https://packagist.org/packages/sinergi/browser-detector) just to perform the language check.