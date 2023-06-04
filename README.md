# Boatrace Ninja Trimmer

[![Latest Stable Version](https://poser.pugx.org/boatrace-ninja/trimmer/v/stable)](https://packagist.org/packages/boatrace-ninja/trimmer)
[![Latest Unstable Version](https://poser.pugx.org/boatrace-ninja/trimmer/v/unstable)](https://packagist.org/packages/boatrace-ninja/trimmer)
[![License](https://poser.pugx.org/boatrace-ninja/trimmer/license)](https://packagist.org/packages/boatrace-ninja/trimmer)

## Installation
```
$ composer require boatrace-ninja/trimmer
```

## Usage
```php
<?php

require __DIR__ . '/vendor/autoload.php';

use Boatrace\Ninja\Trimmer;

var_dump(Trimmer::trim()); // NULL
var_dump(Trimmer::trim(null)); // NULL
var_dump(Trimmer::trim(' 競艇 ')); // string(6) "競艇"

var_dump(Trimmer::ltrim()); // NULL
var_dump(Trimmer::ltrim(null)); // NULL
var_dump(Trimmer::ltrim(' 競艇 ')); // string(7) "競艇 "

var_dump(Trimmer::rtrim()); // NULL
var_dump(Trimmer::rtrim(null)); // NULL
var_dump(Trimmer::rtrim(' 競艇 ')); // string(7) " 競艇"
```

## License
The Boatrace Ninja Trimmer is open source software licensed under the [MIT license](LICENSE).
