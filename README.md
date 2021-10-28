# Library in development

### Install SDK
```shell
composer require brandlive/api-vtex
```

### Create a Catalog Client

```php

$catalogClient = new \Vtex\Catalog\CatalogClient([
    'credentials' => [
        'accountName' => "account name",
        'environment' => "environment",
        'appKey' => 'app key',
        'appToken' => 'app token',
    ]
]);

try {
    /**
     * Argument Options:
     * pathParams
     * queryParams
     * body
    */
    $catalogClient->getAttachment([
        'pathParams' => [
            'attachmentid' => 1
        ]
    ]);
} catch (\Vtex\Exception\VtexException $vtexException) {
    echo $vtexException->getMessage();
}
```