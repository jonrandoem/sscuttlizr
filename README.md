sscuttlizr
==========

###About

Sscuttlizr is a theme for SemanticScuttle 0.98.5. It includes Modernizr, Bootstrap and Font-Awesome, is completely responsive, and includes most of HTML5 Boilerplate hooks and features.
It is visually based on SemanticScuttle's default theme, but is slightly different in some opinionated details.

This theme is licensed under [MIT License](https://github.com/jonrandoem/sscuttlizr/blob/master/LICENSE).


###Installation

1. Unzip theme and template
2. Copy all the content of the "www" & "data" folders to their respective places in your SemanticScuttle installation
3. Open config.php, and insert:
```php
$theme = 'sscuttlizr';
```



Features
------------

###Theme features

* Completely responsive
* Uses latest Bootstrap & Font-Awesome
* HTML5 feature-detection with latest Modernizr
* Latest jQuery, loaded from CDN, with local fallback (HTTPS compatible)
* Replace some HTML tags & attributes with HTML5 equivalents (example: placeholder attribute)
* Use of Bootstrap components (Alert, Grid, Navbar, Forms)
* Use of Font-Awesome icons
* Hooks from HTML5Boilerplate: Apache server config (via .htaccess), ChromeFrame, crossdomain.xml

###QR-Codes

This theme adds the possibility to generate on-demand QR-Codes for each bookmark. This feature does not rely on any QR service; it generates the QR codes by itself.
This feature uses [Jerome Etienne](http://blog.jetienne.com/ "Jerome Etienne's blog")'s [QR-Code plugin for jQuery](https://github.com/jeromeetienne/jquery-qrcode "QR-Code plugin for jQuery").

The Qr-Codes are drawn in a canvas, but should be drawn in HTML tables in browser that don't support canvas. The detection of support for canvas is made with Modernizr.


###.htaccess

Sscuttlizr includes a .htaccess file, which is the Apache configuration file optimized for HTML5 Boilerplate (v2.0.0). This file can only be used if you have Apache as a web server.
You can choose not to include it, or to customize it the way you want.
This file is needed for some features, including ChromeFrame.

See details about [H5BP's .htaccess](https://github.com/h5bp/server-configs-apache).


###crossdomain.xml

Sscuttlizr includes an opininated restrictive crossdomain.xml file. You can choose not to include it, or to customize it the way you want.



Credits
------------

* jQuery [Website](http://jquery.com/) | [MIT License](https://github.com/jquery/jquery/blob/master/MIT-LICENSE.txt)
* Bootstrap [Website](http://getbootstrap.com/) | [MIT License](https://github.com/twbs/bootstrap/blob/master/LICENSE-MIT)
* Modernizr [Website](http://modernizr.com/) | [MIT License](http://modernizr.com/license/)
* Font-Awesome [Website](http://fontawesome.io/) | [Sil OFL 1.1 + MIT License](http://fontawesome.io/license/)
* jQuery QR-Code [Website](http://jeromeetienne.github.io/jquery-qrcode/) | [MIT License](https://github.com/jeromeetienne/jquery-qrcode/blob/master/MIT-LICENSE.txt)
* HTMLBoilerplate [Website](http://html5boilerplate.com/) | [MIT License](https://github.com/h5bp/html5-boilerplate/blob/master/LICENSE.md)
* H5BP .htaccess [Website](https://github.com/h5bp/server-configs-apache) | [MIT License](https://github.com/h5bp/server-configs-apache/blob/master/LICENSE.md)