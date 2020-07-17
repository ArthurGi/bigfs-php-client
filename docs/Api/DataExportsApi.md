# OpenAPI\Client\DataExportsApi

All URIs are relative to *https://storage.example.com/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createDataExport**](DataExportsApi.md#createDataExport) | **POST** /data-exports/ | Create data export
[**getDataExport**](DataExportsApi.md#getDataExport) | **GET** /data-exports/{data_export_id}/ | Get data export
[**getDataExportPartsList**](DataExportsApi.md#getDataExportPartsList) | **GET** /data-exports/{data_export_id}/parts/ | Get data export parts list



## createDataExport

> \OpenAPI\Client\Model\DataExport createDataExport($body)

Create data export

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\DataExportsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \OpenAPI\Client\Model\DataExport(); // \OpenAPI\Client\Model\DataExport | DataExport args

try {
    $result = $apiInstance->createDataExport($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DataExportsApi->createDataExport: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\OpenAPI\Client\Model\DataExport**](../Model/DataExport.md)| DataExport args | [optional]

### Return type

[**\OpenAPI\Client\Model\DataExport**](../Model/DataExport.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getDataExport

> \OpenAPI\Client\Model\DataExport getDataExport($data_export_id)

Get data export

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\DataExportsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$data_export_id = 'data_export_id_example'; // string | Data Export ID

try {
    $result = $apiInstance->getDataExport($data_export_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DataExportsApi->getDataExport: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **data_export_id** | [**string**](../Model/.md)| Data Export ID |

### Return type

[**\OpenAPI\Client\Model\DataExport**](../Model/DataExport.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getDataExportPartsList

> \OpenAPI\Client\Model\DataExportPart[] getDataExportPartsList($data_export_id, $page, $per_page)

Get data export parts list

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\DataExportsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$data_export_id = 'data_export_id_example'; // string | Data Export ID
$page = 56; // int | Page number
$per_page = 56; // int | Per page row count

try {
    $result = $apiInstance->getDataExportPartsList($data_export_id, $page, $per_page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DataExportsApi->getDataExportPartsList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **data_export_id** | [**string**](../Model/.md)| Data Export ID |
 **page** | **int**| Page number | [optional]
 **per_page** | **int**| Per page row count | [optional]

### Return type

[**\OpenAPI\Client\Model\DataExportPart[]**](../Model/DataExportPart.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)

