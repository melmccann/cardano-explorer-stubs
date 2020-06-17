# melmccann\cardanoexplorer\GenesisApi

All URIs are relative to *https://localhost*

Method | HTTP request | Description
------------- | ------------- | -------------
[**genesisAddressInfo**](GenesisApi.md#genesisAddressInfo) | **GET** /api/genesis/address | get address info
[**genesisPagesTotal**](GenesisApi.md#genesisPagesTotal) | **GET** /api/genesis/address/pages/total | get total pages
[**genesisSummary**](GenesisApi.md#genesisSummary) | **GET** /api/genesis/summary | get summary
[**totalAda**](GenesisApi.md#totalAda) | **GET** /api/supply/ada | ada supply



## genesisAddressInfo

> \melmccann\cardanoexplorer\Model\InlineResponse20011 genesisAddressInfo($page, $page_size, $filter)

get address info

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new melmccann\cardanoexplorer\Api\GenesisApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$page = 3.4; // float | 
$page_size = 3.4; // float | 
$filter = 'filter_example'; // string | 

try {
    $result = $apiInstance->genesisAddressInfo($page, $page_size, $filter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GenesisApi->genesisAddressInfo: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **page** | **float**|  |
 **page_size** | **float**|  |
 **filter** | **string**|  | [optional]

### Return type

[**\melmccann\cardanoexplorer\Model\InlineResponse20011**](../Model/InlineResponse20011.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## genesisPagesTotal

> \melmccann\cardanoexplorer\Model\InlineResponse2002 genesisPagesTotal($page_size, $filter)

get total pages

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new melmccann\cardanoexplorer\Api\GenesisApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$page_size = 3.4; // float | 
$filter = 'filter_example'; // string | 

try {
    $result = $apiInstance->genesisPagesTotal($page_size, $filter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GenesisApi->genesisPagesTotal: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **page_size** | **float**|  |
 **filter** | **string**|  | [optional]

### Return type

[**\melmccann\cardanoexplorer\Model\InlineResponse2002**](../Model/InlineResponse2002.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## genesisSummary

> \melmccann\cardanoexplorer\Model\InlineResponse20010 genesisSummary()

get summary

Get information about the genesis block.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new melmccann\cardanoexplorer\Api\GenesisApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->genesisSummary();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GenesisApi->genesisSummary: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\melmccann\cardanoexplorer\Model\InlineResponse20010**](../Model/InlineResponse20010.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## totalAda

> \melmccann\cardanoexplorer\Model\InlineResponse20012 totalAda()

ada supply

Get the total supply of Ada.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new melmccann\cardanoexplorer\Api\GenesisApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->totalAda();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GenesisApi->totalAda: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\melmccann\cardanoexplorer\Model\InlineResponse20012**](../Model/InlineResponse20012.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)

