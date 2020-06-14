# OpenAPI\Client\HttpBridgeApi

All URIs are relative to *https://localhost*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getAddressBalance**](HttpBridgeApi.md#getAddressBalance) | **GET** /{network}/utxos/{address} | address balance



## getAddressBalance

> \OpenAPI\Client\Model\InlineResponse200 getAddressBalance($network, $address)

address balance

Get current balance of provided address.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new OpenAPI\Client\Api\HttpBridgeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$network = 'network_example'; // string | 
$address = 'address_example'; // string | 

try {
    $result = $apiInstance->getAddressBalance($network, $address);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HttpBridgeApi->getAddressBalance: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **network** | **string**|  |
 **address** | **string**|  |

### Return type

[**\OpenAPI\Client\Model\InlineResponse200**](../Model/InlineResponse200.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)

