# Browser Language Detect and Redirect

Purpose of this app is detect the language setup of the browser and redirect to the right language website just the first time.

Insert the website_base_url in `config.php` and set the languages inside the array `usedLanguages.php`.

This app is born to use the default address in en `http://www.websitename.io` and the other languages with the address:

```shell
http://www.websitename.io/lang/

eg: http://www.websitename.io/it/
```