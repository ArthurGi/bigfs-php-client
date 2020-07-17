# OpenAPI\Client\FilesApi

All URIs are relative to *https://storage.example.com/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**callList**](FilesApi.md#callList) | **GET** /files/ | Files list
[**completeMultipartUpload**](FilesApi.md#completeMultipartUpload) | **POST** /files/{file_id}/complete-mutipart-upload/ | Complete multipart upload
[**create**](FilesApi.md#create) | **POST** /files/ | Create file
[**delete**](FilesApi.md#delete) | **DELETE** /files/{file_id}/ | Delete file
[**get**](FilesApi.md#get) | **GET** /files/{file_id}/ | Get file
[**getFileInfo**](FilesApi.md#getFileInfo) | **HEAD** /files/{file_id}/ | Get file&#39;s info
[**updateMeta**](FilesApi.md#updateMeta) | **PUT** /files/{file_id}/meta | Update file&#39;s meta
[**uploadContent**](FilesApi.md#uploadContent) | **PUT** /files/{file_id}/ | Upload content



## callList

> \OpenAPI\Client\Model\File[] callList($q, $labels, $created_at__before, $created_at__after, $updated_at__before, $updated_at__after, $page, $per_page, $order, $size, $size__lt, $size__gt, $ct)

Files list

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\FilesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$q = 'q_example'; // string | Filter by labels or name
$labels = array('labels_example'); // string[] | Filter by labels key
$created_at__before = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Filter by date creation
$created_at__after = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Filter by date creation
$updated_at__before = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Filter by date of last update
$updated_at__after = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Filter by date of last update
$page = 56; // int | Page number
$per_page = 56; // int | Per page row count
$order = 'name'; // string | Order by field
$size = 56; // int | Filter by Content-Length of uploaded files
$size__lt = 56; // int | Filter files where Content-Length less than value
$size__gt = 56; // int | Filter files where Content-Length greater than value
$ct = array('ct_example'); // string[] | Filter by Content-Type of uploaded files

try {
    $result = $apiInstance->callList($q, $labels, $created_at__before, $created_at__after, $updated_at__before, $updated_at__after, $page, $per_page, $order, $size, $size__lt, $size__gt, $ct);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FilesApi->callList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **q** | **string**| Filter by labels or name | [optional]
 **labels** | [**string[]**](../Model/string.md)| Filter by labels key | [optional]
 **created_at__before** | **\DateTime**| Filter by date creation | [optional]
 **created_at__after** | **\DateTime**| Filter by date creation | [optional]
 **updated_at__before** | **\DateTime**| Filter by date of last update | [optional]
 **updated_at__after** | **\DateTime**| Filter by date of last update | [optional]
 **page** | **int**| Page number | [optional]
 **per_page** | **int**| Per page row count | [optional]
 **order** | **string**| Order by field | [optional] [default to &#39;name&#39;]
 **size** | **int**| Filter by Content-Length of uploaded files | [optional]
 **size__lt** | **int**| Filter files where Content-Length less than value | [optional]
 **size__gt** | **int**| Filter files where Content-Length greater than value | [optional]
 **ct** | [**string[]**](../Model/string.md)| Filter by Content-Type of uploaded files | [optional]

### Return type

[**\OpenAPI\Client\Model\File[]**](../Model/File.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## completeMultipartUpload

> completeMultipartUpload($file_id, $body)

Complete multipart upload

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\FilesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$file_id = 'file_id_example'; // string | File ID
$body = new \OpenAPI\Client\Model\MultipartUpload(); // \OpenAPI\Client\Model\MultipartUpload | merge file chumks by partNumbers

try {
    $apiInstance->completeMultipartUpload($file_id, $body);
} catch (Exception $e) {
    echo 'Exception when calling FilesApi->completeMultipartUpload: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **file_id** | [**string**](../Model/.md)| File ID |
 **body** | [**\OpenAPI\Client\Model\MultipartUpload**](../Model/MultipartUpload.md)| merge file chumks by partNumbers |

### Return type

void (empty response body)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## create

> \OpenAPI\Client\Model\File create($body)

Create file

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\FilesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \OpenAPI\Client\Model\FileMeta(); // \OpenAPI\Client\Model\FileMeta | File meta data

try {
    $result = $apiInstance->create($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FilesApi->create: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\OpenAPI\Client\Model\FileMeta**](../Model/FileMeta.md)| File meta data |

### Return type

[**\OpenAPI\Client\Model\File**](../Model/File.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## delete

> delete($file_id, $x_cloud_storage_versions)

Delete file

Delete file

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\FilesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$file_id = 'file_id_example'; // string | File ID
$x_cloud_storage_versions = 56; // int | File version number

try {
    $apiInstance->delete($file_id, $x_cloud_storage_versions);
} catch (Exception $e) {
    echo 'Exception when calling FilesApi->delete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **file_id** | [**string**](../Model/.md)| File ID |
 **x_cloud_storage_versions** | **int**| File version number | [optional]

### Return type

void (empty response body)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## get

> \SplFileObject get($file_id, $range, $x_cloud_storage_versions)

Get file

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\FilesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$file_id = 'file_id_example'; // string | File ID
$range = 'range_example'; // string | Header to indicate current position in the file for upload. \"bytes *_/2000000\"
$x_cloud_storage_versions = 56; // int | File version number

try {
    $result = $apiInstance->get($file_id, $range, $x_cloud_storage_versions);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FilesApi->get: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **file_id** | [**string**](../Model/.md)| File ID |
 **range** | **string**| Header to indicate current position in the file for upload. \&quot;bytes *_/2000000\&quot; | [optional]
 **x_cloud_storage_versions** | **int**| File version number | [optional]

### Return type

[**\SplFileObject**](../Model/\SplFileObject.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/octet-stream

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getFileInfo

> getFileInfo($file_id)

Get file's info

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\FilesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$file_id = 'file_id_example'; // string | File ID

try {
    $apiInstance->getFileInfo($file_id);
} catch (Exception $e) {
    echo 'Exception when calling FilesApi->getFileInfo: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **file_id** | [**string**](../Model/.md)| File ID |

### Return type

void (empty response body)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## updateMeta

> \OpenAPI\Client\Model\File updateMeta($file_id, $body)

Update file's meta

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\FilesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$file_id = 'file_id_example'; // string | ID of upload
$body = new \OpenAPI\Client\Model\FileMeta(); // \OpenAPI\Client\Model\FileMeta | File meta data

try {
    $result = $apiInstance->updateMeta($file_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FilesApi->updateMeta: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **file_id** | [**string**](../Model/.md)| ID of upload |
 **body** | [**\OpenAPI\Client\Model\FileMeta**](../Model/FileMeta.md)| File meta data |

### Return type

[**\OpenAPI\Client\Model\File**](../Model/File.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## uploadContent

> uploadContent($file_id, $file_obj, $part_number, $range)

Upload content

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\FilesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$file_id = 'file_id_example'; // string | File ID
$file_obj = 'file_obj_example'; // string | 
$part_number = 56; // int | Part number
$range = 'range_example'; // string | Header to indicate current position in the file for upload. \"bytes *_/2000000\"

try {
    $apiInstance->uploadContent($file_id, $file_obj, $part_number, $range);
} catch (Exception $e) {
    echo 'Exception when calling FilesApi->uploadContent: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **file_id** | [**string**](../Model/.md)| File ID |
 **file_obj** | **string**|  |
 **part_number** | **int**| Part number | [optional]
 **range** | **string**| Header to indicate current position in the file for upload. \&quot;bytes *_/2000000\&quot; | [optional]

### Return type

void (empty response body)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: text/plain
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)

