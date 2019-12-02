# moosunmv-client
PHP Client for MoosunMv API

#Usage
```php

<?php

namespace MMVClient;

require_once '../vendor/autoload.php';

use MMVClient\Client;


$rp = new Client();

$data = $rp->getLatest("hanimaadhoo");

echo $data["humidity"];

```

##Note: Check the example folder for more examples
