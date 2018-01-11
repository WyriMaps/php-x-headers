# Faction themes X-* headers emitted by WyriMaps.net and other related services

[![Linux Build Status](https://travis-ci.org/wyrimaps/php-x-headers.png)](https://travis-ci.org/wyrimaps/php-x-headers)
[![Latest Stable Version](https://poser.pugx.org/wyrimaps/x-headers/v/stable.png)](https://packagist.org/packages/wyrimaps/x-headers)
[![Total Downloads](https://poser.pugx.org/wyrimaps/x-headers/downloads.png)](https://packagist.org/packages/wyrimaps/x-headers/stats)
[![Code Coverage](https://scrutinizer-ci.com/g/wyrimaps/php-x-headers/badges/coverage.png?b=master)](https://scrutinizer-ci.com/g/wyrimaps/php-x-headers/?branch=master)
[![License](https://poser.pugx.org/wyrimaps/x-headers/license.png)](https://packagist.org/packages/wyrihaximus/react-psr-3-stdio)
[![PHP 7 ready](http://php7ready.timesplinter.ch/wyrimaps/php-x-headers/badge.svg)](https://travis-ci.org/wyrimaps/php-x-headers)

### Installation ###

To install via [Composer](http://getcomposer.org/), use the command below, it will automatically detect the latest version and bind it with `^`.

```
composer require wyrimaps/x-headers 
```

## Usage ##

The following echo's a random header from Horde set:

```php
$headers = Horde::headers();
echo $headers[random_int(0, (count($headers) - 1))];
```


## Contributing ##

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

## License ##

Copyright 2018 [WyriMaps.net](https://wyrimaps.net/)

Permission is hereby granted, free of charge, to any person
obtaining a copy of this software and associated documentation
files (the "Software"), to deal in the Software without
restriction, including without limitation the rights to use,
copy, modify, merge, publish, distribute, sublicense, and/or sell
copies of the Software, and to permit persons to whom the
Software is furnished to do so, subject to the following
conditions:

The above copyright notice and this permission notice shall be
included in all copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND,
EXPRESS OR IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES
OF MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE AND
NONINFRINGEMENT. IN NO EVENT SHALL THE AUTHORS OR COPYRIGHT
HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER LIABILITY,
WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING
FROM, OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR
OTHER DEALINGS IN THE SOFTWARE.
