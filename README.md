# :cloud: Moosunmv-client
[![Latest Stable Version](https://poser.pugx.org/jinas/moosunmv-api/v/stable)](https://packagist.org/packages/jinas/moosunmv-api)
[![License](https://poser.pugx.org/jinas/moosunmv-api/license)](https://packagist.org/packages/jinas/moosunmv-api)

PHP Client for [MoosunMv](https://moosunmv.jinas.me/) API

## Installation

```bash
composer require jinas/moosunmv-api
```

## Usage

```php

<?php

namespace MMVClient;

require_once '../vendor/autoload.php';

use MMVClient\Client;


$rp = new Client();

$data = $rp->getLatest("hanimaadhoo");

echo $data["humidity"];

```

## Note: Check the example folder for more examples
