sscuttlizr
==========

About
------------

Sscuttlizr is a theme for [SemanticScuttle](http://semanticscuttle.sourceforge.net/) 0.98.5. It includes Modernizr, Bootstrap and Font-Awesome, is completely responsive, and includes most of HTML5 Boilerplate hooks and features.
It is visually based on SemanticScuttle's default theme, but is slightly different in some opinionated details.

This theme has been tested on the version 0.98.5 of SemanticScuttle.


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
* Optional support for shortening with [Yourls](http://yourls.org/)
* Optional support for [Jappix](http://jappix.org/) chat


Installation
------------

1. Unzip theme and template
2. Copy all the content of the "www" & "data" folders to their respective places in your SemanticScuttle installation
3. Open config.php, and insert the following inside the PHP code:

```
$theme = 'sscuttlizr';
```


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
// Set your Piwik Analytics ID here (a number)
// Between quotes !!!
$piwikAnalyticsSiteId = '1';

// set the URL your Piwik installation, without protocol
// example: if your Piwik is at https://my-piwik.org/stats/ ,
// then, enter: my-piwik.org/stats
// No Trailing slash !!!
$piwikAnalyticsUrl = 'your.piwik.com';
```

Notes: Do not enter any http:// or https:// in the URL, and enter your Piwik site ID between quotes.


You can also enable the "noscript" image:

```
// Enables the <noscript> image tag
$piwikAnalyticsNoScript = true;
```

And if you enable the "noscript" and your Piwik installation is served with HTTPS, you can force HTTPS for the "noscript" image:

```
// If the <noscript> image tag is enabled, force the serve of the image only through HTTPS
$piwikAnalyticsNoScriptHttps = true;
```


Optionnal support for Poche
------------

Sscuttlizr has support for [Poche](http://www.inthepoche.com/en) as a bookmark sharing tool.

You must have a functional Poche installation to use this feature.

By default, this functionality is disabled. To enable it, open your config.php file, and insert the following inside the PHP code:

```
// The Poche URL. No Trailing slash !!!
$pocheUrl = 'https://my-poche.com/readitlater';
```
Notes: No trailing slash at the end of the URL !!



Optionnal support for Yourls
------------

Sscuttlizr has support for [Yourls](http://yourls.org/) as a URL shortener.

You must have a functional Yourls installation to use this feature.

By default, this functionality is disabled. To enable it, open your config.php file, and insert the following inside the PHP code:

```
// The Yourls URL.
// Be sure to insert the final script of the API (here: yourls-api.php)
$yourlsUrl = 'https://my-yourls.com/yourls-api.php';

// The Yourls signature token
$yourlsApiKey = 'a1b2c3d4e5';
```

Notes: Be sure to enter the Yourls API path (e.g. yourls-api.php)



Optionnal support for JappixMini
------------

Sscuttlizr has support for [Jappix](http://jappix.org/) as a chat tool.

You must have a functional Jappix installation to use this feature.

By default, this functionality is disabled. To enable it, open your config.php file, and insert the following inside the PHP code:

```
// Enable the service
$enableJappix = true;

// Enable JappixMini only for logged users
$jappixEnableForLogged = true;

// Enable JappixMini only for logged admins
$jappixEnableForAdmin = true;

//The Jappix server's URL. No trailing slash !!! And no final /php !
$jappixUrl = "https://static.jappix.com";

// Define the lang for Jappix
// Choose one of the following:
// ar bg cs de en eo es et fa fr he hu id it ja la lb
// mn nl oc pl pt-br pt ru sk sv tr uk zh-cn zh-tw
$jappixLang = 'fr';

// Define the resource (as in 'What kind of resource is talking to Jappix?').
// Choose any string you want.
$jappixResource = "SemanticScuttle";

// Define the the domain for your connection
$jappixDomain = "anonymous.jappix.com";

// Use the option below to disable anonymous mode
$jappixAuth = true;

// With $jappixAuth to true, you can enable login with user and password
// On Jappix and Jabber in general, a login is like an email: user@domain.com
// Here, the user part is defined below,
// and the domain part is defined by $jappixDomain
$jappixUser = "dave";
$jappixPassword = "secret";

// Auto-connect? Should work in anonymous or logged modes
$jappixAutoConnect = true;

// Define your Jappix Nickname
// if not defined or if equals to "", a random nickname will be chosen
$jappixNickName = "davZ";

// Animate JappixMini?
// Note that the animation only occurs if $jappixAutoConnect equals false
// and if $jappixGroupChats is an empty array or is not defined.
$jappixAnimate = true;

// Define the error URL (URL of the link that will be displayed if connection fails
// If not defined, it defaults to 'https://mini.jappix.com/issues'
$jappixErrorLink = 'https://mini.jappix.com/issues';

// Disable JappixMini on mobile devices?
// default: false
$jappixDisableMobile = true;

// Group chats to join at launch (you must provide an array of strings here)
$jappixGroupChats = array("support@muc.jappix.org");

```

Notes: 

* No trailing slash at the end of the URL !!
* If you want to enable an anonymous mode, just set:

```
$jappixAuth = false;
```




Credits
------------

* jQuery [Website](http://jquery.com/) | [MIT License](https://github.com/jquery/jquery/blob/master/MIT-LICENSE.txt)
* Bootstrap [Website](http://getbootstrap.com/) | [MIT License](https://github.com/twbs/bootstrap/blob/master/LICENSE-MIT)
* Modernizr [Website](http://modernizr.com/) | [MIT License](http://modernizr.com/license/)
* Font-Awesome [Website](http://fontawesome.io/) | [Sil OFL 1.1 + MIT License](http://fontawesome.io/license/)
* jQuery QR-Code [Website](http://jeromeetienne.github.io/jquery-qrcode/) | [MIT License](https://github.com/jeromeetienne/jquery-qrcode/blob/master/MIT-LICENSE.txt)
* HTML5Boilerplate [Website](http://html5boilerplate.com/) | [MIT License](https://github.com/h5bp/html5-boilerplate/blob/master/LICENSE.md)
* H5BP .htaccess [Website](https://github.com/h5bp/server-configs-apache) | [MIT License](https://github.com/h5bp/server-configs-apache/blob/master/LICENSE.md)

Thanks to 

* [SemanticScuttle](http://semanticscuttle.sourceforge.net/)
* [Piwik](http://piwik.org/)
* [Poche](http://www.inthepoche.com/en)
* [Yourls](http://yourls.org/)
* [Jappix](http://jappix.org/)


License
------------

This theme is licensed under [MIT License](https://github.com/jonrandoem/sscuttlizr/blob/master/LICENSE).
