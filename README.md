sscuttlizr
==========

About
------------

Sscuttlizr is a theme for SemanticScuttle 0.98.5 (http://sourceforge.net/projects/semanticscuttle/). It includes Modernizr, Bootstrap and Font-Awesome, is completely responsive, and includes most of HTML5 Boilerplate hooks and features.
It is visually based on SemanticScuttle's default theme, but is slightly different in some opinionated details.

This theme is licensed under [MIT License](https://github.com/jonrandoem/sscuttlizr/blob/master/LICENSE).

Version: 1.1.0

This theme has been tested on the version 0.98.5 of SemanticScuttle


Installation
------------

1. Unzip theme and template
2. Copy all the content of the "www" & "data" folders to their respective places in your SemanticScuttle installation
3. Open config.php, and insert the following inside the PHP code:

```
$theme = 'sscuttlizr';
```



Theme features
------------

* Completely responsive
* Uses latest Bootstrap & Font-Awesome
* HTML5 feature-detection with latest Modernizr
* Latest jQuery, loaded from CDN, with local fallback (HTTPS compatible)
* Replace some HTML tags & attributes with HTML5 equivalents (example: placeholder attribute)
* Use of Bootstrap components (Alert, Grid, Navbar, Forms)
* Use of Font-Awesome icons
* Hooks from HTML5Boilerplate: Apache server config (via .htaccess), ChromeFrame, crossdomain.xml
* Optional support for [Piwik](http://piwik.org/) Analytics
* Optional support for sharing with [Poche](http://www.inthepoche.com/en)
* Optional support for shortening with Yourls


Optionnal .htaccess
------------

Sscuttlizr includes a .htaccess file, which is the Apache configuration file optimized for HTML5 Boilerplate (v2.0.0). This file can only be used if you have Apache as a web server.
This file is needed for some features, including ChromeFrame.

See details about [H5BP's .htaccess](https://github.com/h5bp/server-configs-apache).

In addition to H5BP's server config, the file also includes the specific rules for SemanticScuttle (that are used for clean URLs).

The content of this file is quite opinionated; you can choose not to include it (and keep SemanticScuttle's original .htaccess file), or to customize it the way you want.


Optionnal crossdomain.xml
------------

Sscuttlizr includes a restrictive crossdomain.xml file.

The content of this file is quite opinionated; you can choose not to include it, or to customize it the way you want.


Optionnal QR-Codes
------------

This theme adds the possibility to generate on-demand QR-Codes for each bookmark. This feature does not rely on any QR service; it generates the QR codes by itself.
This feature uses [Jerome Etienne](http://blog.jetienne.com/ "Jerome Etienne's blog")'s [QR-Code plugin for jQuery](https://github.com/jeromeetienne/jquery-qrcode "QR-Code plugin for jQuery").

The Qr-Codes are drawn in a canvas, but should be drawn in HTML tables in browser that don't support canvas. The detection of support for canvas is made with Modernizr.

By default, this functionality is disabled. To enable it, open your config.php file, and insert the following inside the PHP code:

```
$enableQrCodes = true;
```

Optionnal support for Piwik Analytics
------------

Sscuttlizr has support for [Piwik](http://piwik.org/) Analytics if you need it.

You must have a functional Piwik installation to use this feature.

By default, this functionality is disabled. To enable it, open your config.php file, and insert the following inside the PHP code:

```
$piwikAnalyticsSiteId = '1';
$piwikAnalyticsUrl = 'your.piwik.com';
```

Notes: Do not enter any http:// or https:// in the URL, and enter your Piwik site ID between quotes.



Optionnal support for Poche
------------

Sscuttlizr has support for [Poche](http://www.inthepoche.com/en) as a bookmark sharing tool.

You must have a functional Poche installation to use this feature.

By default, this functionality is disabled. To enable it, open your config.php file, and insert the following inside the PHP code:

```
$pocheUrl = 'https://my-poche.com';
```
Notes: No trailing slash at the end of the URL !!



Optionnal support for Yourls
------------

Sscuttlizr has support for [Yourls](http://yourls.org/) as a URL shortener.

You must have a functional Yourls installation to use this feature.

By default, this functionality is disabled. To enable it, open your config.php file, and insert the following inside the PHP code:

```
$yourlsUrl = 'https://my-yourls.com/yourls-api.php';
$yourlsApiKey = 'a1b2c3d4e5';
```

Notes: Be sure you enter the Yourls API path (e.g. yourls-api.php)



Credits
------------

* jQuery [Website](http://jquery.com/) | [MIT License](https://github.com/jquery/jquery/blob/master/MIT-LICENSE.txt)
* Bootstrap [Website](http://getbootstrap.com/) | [MIT License](https://github.com/twbs/bootstrap/blob/master/LICENSE-MIT)
* Modernizr [Website](http://modernizr.com/) | [MIT License](http://modernizr.com/license/)
* Font-Awesome [Website](http://fontawesome.io/) | [Sil OFL 1.1 + MIT License](http://fontawesome.io/license/)
* jQuery QR-Code [Website](http://jeromeetienne.github.io/jquery-qrcode/) | [MIT License](https://github.com/jeromeetienne/jquery-qrcode/blob/master/MIT-LICENSE.txt)
* HTMLBoilerplate [Website](http://html5boilerplate.com/) | [MIT License](https://github.com/h5bp/html5-boilerplate/blob/master/LICENSE.md)
* H5BP .htaccess [Website](https://github.com/h5bp/server-configs-apache) | [MIT License](https://github.com/h5bp/server-configs-apache/blob/master/LICENSE.md)



