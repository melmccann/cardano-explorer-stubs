# melmccann\cardanoexplorer\BlocksApi

All URIs are relative to *https://localhost*

Method | HTTP request | Description
------------- | ------------- | -------------
[**blocksPages**](BlocksApi.md#blocksPages) | **GET** /api/blocks/pages | list blocks
[**blocksPagesTotal**](BlocksApi.md#blocksPagesTotal) | **GET** /api/blocks/pages/total | get total pages
[**blocksSummary**](BlocksApi.md#blocksSummary) | **GET** /api/blocks/summary/{blockHash} | get summary
[**blocksTxs**](BlocksApi.md#blocksTxs) | **GET** /api/blocks/txs/{blockHash} | list transactions



## blocksPages

> \melmccann\cardanoexplorer\Model\InlineResponse2001 blocksPages($page, $page_size)

list blocks

Get the list of blocks, contained in pages.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new melmccann\cardanoexplorer\Api\BlocksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$page = 3.4; // float | 
$page_size = 3.4; // float | 

try {
    $result = $apiInstance->blocksPages($page, $page_size);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BlocksApi->blocksPages: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **page** | **float**|  |
 **page_size** | **float**|  |

### Return type

[**\melmccann\cardanoexplorer\Model\InlineResponse2001**](../Model/InlineResponse2001.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## blocksPagesTotal

> \melmccann\cardanoexplorer\Model\InlineResponse2002 blocksPagesTotal($page_size)

get total pages

Get the list of total pages.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new melmccann\cardanoexplorer\Api\BlocksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$page_size = 3.4; // float | 

try {
    $result = $apiInstance->blocksPagesTotal($page_size);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BlocksApi->blocksPagesTotal: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **page_size** | **float**|  |

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


## blocksSummary

> \melmccann\cardanoexplorer\Model\InlineResponse2003 blocksSummary($block_hash)

get summary

Get block's summary information.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new melmccann\cardanoexplorer\Api\BlocksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$block_hash = 'block_hash_example'; // string | 

try {
    $result = $apiInstance->blocksSummary($block_hash);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BlocksApi->blocksSummary: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **block_hash** | **string**|  |

### Return type

[**\melmccann\cardanoexplorer\Model\InlineResponse2003**](../Model/InlineResponse2003.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## blocksTxs

> \melmccann\cardanoexplorer\Model\InlineResponse2004 blocksTxs($block_hash, $limit, $offset)

list transactions

Get brief information about transactions.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new melmccann\cardanoexplorer\Api\BlocksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$block_hash = 'block_hash_example'; // string | 
$limit = 56; // int | 
$offset = 56; // int | 

try {
    $result = $apiInstance->blocksTxs($block_hash, $limit, $offset);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BlocksApi->blocksTxs: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **block_hash** | **string**|  |
 **limit** | **int**|  | [optional]
 **offset** | **int**|  | [optional]

### Return type

[**\melmccann\cardanoexplorer\Model\InlineResponse2004**](../Model/InlineResponse2004.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)

