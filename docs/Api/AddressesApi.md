# OpenAPI\Client\AddressesApi

All URIs are relative to *https://localhost*

Method | HTTP request | Description
------------- | ------------- | -------------
[**addressSummary**](AddressesApi.md#addressSummary) | **GET** /api/addresses/summary/{address} | get summary
[**blockAddress**](AddressesApi.md#blockAddress) | **GET** /api/block/{blockHash}/address/{address} | get address



## addressSummary

> \OpenAPI\Client\Model\InlineResponse2008 addressSummary($address)

get summary

Get summary information about an address

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new OpenAPI\Client\Api\AddressesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$address = 'address_example'; // string | 

try {
    $result = $apiInstance->addressSummary($address);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AddressesApi->addressSummary: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **address** | **string**|  |

### Return type

[**\OpenAPI\Client\Model\InlineResponse2008**](../Model/InlineResponse2008.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## blockAddress

> \OpenAPI\Client\Model\InlineResponse2008 blockAddress($address, $block_hash)

get address

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new OpenAPI\Client\Api\AddressesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$address = 'address_example'; // string | 
$block_hash = 'block_hash_example'; // string | 

try {
    $result = $apiInstance->blockAddress($address, $block_hash);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AddressesApi->blockAddress: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **address** | **string**|  |
 **block_hash** | **string**|  |

### Return type

[**\OpenAPI\Client\Model\InlineResponse2008**](../Model/InlineResponse2008.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)

