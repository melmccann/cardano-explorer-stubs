# melmccann\cardanoexplorer\EpochsApi

All URIs are relative to *https://localhost*

Method | HTTP request | Description
------------- | ------------- | -------------
[**epochPages**](EpochsApi.md#epochPages) | **GET** /api/epochs/{epoch} | get epoch
[**epochSlots**](EpochsApi.md#epochSlots) | **GET** /api/epochs/{epoch}/{slot} | get slot



## epochPages

> \melmccann\cardanoexplorer\Model\InlineResponse2001 epochPages($epoch, $page)

get epoch

Get epoch pages, all the paged slots in the epoch.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new melmccann\cardanoexplorer\Api\EpochsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$epoch = 56; // int | 
$page = 3.4; // float | 

try {
    $result = $apiInstance->epochPages($epoch, $page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EpochsApi->epochPages: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **epoch** | **int**|  |
 **page** | **float**|  |

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


## epochSlots

> \melmccann\cardanoexplorer\Model\InlineResponse2009 epochSlots($epoch, $slot)

get slot

Get the slot information in an epoch.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new melmccann\cardanoexplorer\Api\EpochsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$epoch = 56; // int | 
$slot = 56; // int | 

try {
    $result = $apiInstance->epochSlots($epoch, $slot);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EpochsApi->epochSlots: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **epoch** | **int**|  |
 **slot** | **int**|  |

### Return type

[**\melmccann\cardanoexplorer\Model\InlineResponse2009**](../Model/InlineResponse2009.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)

