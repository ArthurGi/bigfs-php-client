# OpenAPI\Client\ActivityLogsApi

All URIs are relative to *https://storage.example.com/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**activityLogsList**](ActivityLogsApi.md#activityLogsList) | **GET** /activity-logs/ | Activity logs list
[**createActivityLog**](ActivityLogsApi.md#createActivityLog) | **POST** /activity-logs/ | Create activity log



## activityLogsList

> \OpenAPI\Client\Model\ActivityLog[] activityLogsList($author, $created_at_system__before, $created_at_system__after, $created_at_user__before, $created_at_user__after, $page, $per_page, $level, $message, $object, $subject, $action)

Activity logs list

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\ActivityLogsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$author = 'author_example'; // string | Filter by author
$created_at_system__before = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Filter by created_at_system
$created_at_system__after = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Filter by created_at_system
$created_at_user__before = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Filter by created_at_user
$created_at_user__after = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Filter by created_at_user
$page = 56; // int | Page number
$per_page = 56; // int | Per page row count
$level = 56; // int | log level
$message = 'message_example'; // string | log message
$object = 'object_example'; // string | object
$subject = 'subject_example'; // string | log subject
$action = 'action_example'; // string | log action

try {
    $result = $apiInstance->activityLogsList($author, $created_at_system__before, $created_at_system__after, $created_at_user__before, $created_at_user__after, $page, $per_page, $level, $message, $object, $subject, $action);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ActivityLogsApi->activityLogsList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **author** | **string**| Filter by author | [optional]
 **created_at_system__before** | **\DateTime**| Filter by created_at_system | [optional]
 **created_at_system__after** | **\DateTime**| Filter by created_at_system | [optional]
 **created_at_user__before** | **\DateTime**| Filter by created_at_user | [optional]
 **created_at_user__after** | **\DateTime**| Filter by created_at_user | [optional]
 **page** | **int**| Page number | [optional]
 **per_page** | **int**| Per page row count | [optional]
 **level** | **int**| log level | [optional]
 **message** | **string**| log message | [optional]
 **object** | **string**| object | [optional]
 **subject** | **string**| log subject | [optional]
 **action** | **string**| log action | [optional]

### Return type

[**\OpenAPI\Client\Model\ActivityLog[]**](../Model/ActivityLog.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## createActivityLog

> \OpenAPI\Client\Model\ActivityLog createActivityLog($body)

Create activity log

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Bearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\ActivityLogsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \OpenAPI\Client\Model\ActivityLog(); // \OpenAPI\Client\Model\ActivityLog | activity log data

try {
    $result = $apiInstance->createActivityLog($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ActivityLogsApi->createActivityLog: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\OpenAPI\Client\Model\ActivityLog**](../Model/ActivityLog.md)| activity log data |

### Return type

[**\OpenAPI\Client\Model\ActivityLog**](../Model/ActivityLog.md)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)

