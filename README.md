# VTEX API PHP/Laravel Package

A PHP/Laravel package for interacting with the VTEX API.
**Status**: Work in progress.

## Installation

```bash
composer require brandlive/vtex-api
```

## Quick Start

1. **Set up your credentials**: Provide `accountName`, `environment`, `appKey`, and `appToken`.
2. **Create a client** (e.g., `OrderClient`, `CatalogClient`, etc.).
3. **Call the desired method** by passing an array with `pathParams`, `queryParams`, and/or `body`.

```php
use Vtex\Order\OrderClient;
use Vtex\Exception\VtexException;

$credentials = [
    'accountName' => 'myAccount',
    'environment' => 'vtexcommercestable',
    'appKey'      => 'your-app-key',
    'appToken'    => 'your-app-token',
];

$orderClient = new OrderClient([
    'credentials' => $credentials,
]);

try {
    // Example: Retrieve an order
    $order = $orderClient->getOrder([
        'pathParams' => [
            'orderId' => 'v999999-01',
        ],
    ]);

    print_r($order);
} catch (VtexException $e) {
    echo 'Error: ' . $e->getMessage();
}
```

## Argument Options

Each client method typically accepts an **associative array** with the following optional keys:

- **`pathParams`**: Parameters that go in the URL path (e.g., `{orderId}`, `{skuId}`, etc.).
- **`queryParams`**: Parameters that go in the query string (e.g., `?page=1&per_page=15`).
- **`body`**: The JSON body for POST/PUT/PATCH requests.

## Examples

Below are short examples using **OrderClient**, **CheckoutClient**, and other available clients.

### 1. Get an Order

```php
use Vtex\Order\OrderClient;
use Vtex\Exception\VtexException;

$orderClient = new OrderClient([
    'credentials' => $credentials,
]);

try {
    $order = $orderClient->getOrder([
        'pathParams' => [
            'orderId' => 'v999999-01',
        ],
    ]);
    print_r($order);
} catch (VtexException $exception) {
    // Handle error
}
```

### 2. Retrieve Payment Transaction

```php
$orderClient = new OrderClient([
    'credentials' => $credentials,
]);

try {
    $response = $orderClient->retrievePaymentTransaction([
        'pathParams' => [
            'orderId' => 'v999999-01',
        ],
    ]);
    print_r($response);
} catch (VtexException $exception) {
    // Handle error
}
```

### 3. Send Payment Notification

```php
$success = true;
$orderClient = new OrderClient([
    'credentials' => $credentials,
]);

try {
    $orderClient->sendPaymentNotification([
        'pathParams' => [
            'orderId'   => 'v999999-01',
            'paymentId' => 'PAY-1234',
        ],
    ]);
} catch (VtexException $exception) {
    $success = false;
    // Handle error
}
```

### 4. Start Handling an Order

```php
$success = true;
$orderClient = new OrderClient([
    'credentials' => $credentials,
]);

try {
    $orderClient->startHandlingOrder([
        'pathParams' => [
            'orderId' => 'v999999-01',
        ],
    ]);
} catch (VtexException $exception) {
    $success = false;
    // Handle error
}
```

### 5. Send Invoice Notification

```php
$orderClient = new OrderClient([
    'credentials' => $credentials,
]);

$body = [
    "invoiceNumber" => "123456",
    "invoiceValue"  => 100000,
    "issuanceDate"  => "2023-01-01T12:00:00Z",
    "invoiceUrl" => "",
    "invoiceKey" => "",
    "trackingNumber" => "",
    "trackingUrl" => "",
    "courier" => "",
    "items" => [
        [
            "id" =>  38,
            "price" =>  50000,
            "quantity" =>  2
        ],
        // More items
    ],
];

try {
    $response = $orderClient->orderInvoiceNotification([
        'pathParams' => [
            'orderId' => 'v999999-01',
        ],
        'body' => $body,
    ]);
    print_r($response);
} catch (VtexException $exception) {
    // Handle error
}
```

### 6. Get Cart Information (CheckoutClient)

```php
use Vtex\Checkout\CheckoutClient;

$checkoutClient = new CheckoutClient([
    'credentials' => $credentials,
]);

try {
    $cartInformation = $checkoutClient->getCartInformation([
        'pathParams' => [
            'orderFormId' => 'abcdef12345',
        ],
    ]);
    print_r($cartInformation);
} catch (VtexException $exception) {
    // Handle error
}
```

### 7. Create a Product (CatalogClient)

```php
use Vtex\Catalog\CatalogClient;

$catalogClient = new CatalogClient([
    'credentials' => $credentials,
]);

try {
    $newProduct = $catalogClient->createProduct([
        'body' => [
            'Name'        => 'My Product',
            'DepartmentId' => 8,
            'RefId'       => 'SKU-123',
            'BrandId'     => 38,
            'CategoryId'  => 123,
            'IsActive'    => true,
            'Description' => 'Product description',
            'DescriptionShort' => 'Short product description',
            // Additional fields as needed by the VTEX docs
        ],
    ]);
    print_r($newProduct);
} catch (VtexException $exception) {
    // Handle error
}
```

## Handling Exceptions

All methods may throw a `VtexException` if the API request fails. Catch it to handle errors gracefully:

```php
try {
    // ...some client method
} catch (VtexException $exception) {
    // Log or handle the error
    echo 'VTEX Error: ' . $exception->getMessage();
}
```

## Contributing

1. Fork the repo.
2. Create a new branch for your feature or bugfix.
3. Submit a pull request.

## License

[MIT](LICENSE)
