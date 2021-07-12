# SigniFlowConnect\AuditsApi

All URIs are relative to https://server-url/API/SignFlowAPIServiceRest.svc.

Method | HTTP request | Description
------------- | ------------- | -------------
[**postGetAuditDocument()**](AuditsApi.md#postGetAuditDocument) | **POST** /GetAuditDocument | Get Audit Document
[**postGetDocumentAudit()**](AuditsApi.md#postGetDocumentAudit) | **POST** /GetDocumentAudit | Get Document Audit


## `postGetAuditDocument()`

```php
postGetAuditDocument($content_type, $get_audit_document_request): \SigniFlowConnect\Model\GetAuditDocumentResponse
```

Get Audit Document

#### Used to get an audit document.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new SigniFlowConnect\Api\AuditsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$content_type = 'application/json'; // string
$get_audit_document_request = {"DocIDField":"string","TokenField":{"TokenExpiryField":"2019-08-24T14:15:22Z","TokenField":"aaa111"}}; // \SigniFlowConnect\Model\GetAuditDocumentRequest | ##### Get Audit Document Request Model

try {
    $result = $apiInstance->postGetAuditDocument($content_type, $get_audit_document_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AuditsApi->postGetAuditDocument: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **content_type** | **string**|  | [default to &#39;application/json&#39;]
 **get_audit_document_request** | [**\SigniFlowConnect\Model\GetAuditDocumentRequest**](../Model/GetAuditDocumentRequest.md)| ##### Get Audit Document Request Model | [optional]

### Return type

[**\SigniFlowConnect\Model\GetAuditDocumentResponse**](../Model/GetAuditDocumentResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postGetDocumentAudit()`

```php
postGetDocumentAudit($content_type, $get_document_audit_request): \SigniFlowConnect\Model\GetDocumentAuditResponse
```

Get Document Audit

#### Used to get the audit information from a document.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new SigniFlowConnect\Api\AuditsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$content_type = 'application/json'; // string
$get_document_audit_request = {"DocIDField":"string","TokenField":{"TokenExpiryField":"2019-08-24T14:15:22Z","TokenField":"aaa111"}}; // \SigniFlowConnect\Model\GetDocumentAuditRequest | ##### Get Document Audit Request Model

try {
    $result = $apiInstance->postGetDocumentAudit($content_type, $get_document_audit_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AuditsApi->postGetDocumentAudit: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **content_type** | **string**|  | [default to &#39;application/json&#39;]
 **get_document_audit_request** | [**\SigniFlowConnect\Model\GetDocumentAuditRequest**](../Model/GetDocumentAuditRequest.md)| ##### Get Document Audit Request Model | [optional]

### Return type

[**\SigniFlowConnect\Model\GetDocumentAuditResponse**](../Model/GetDocumentAuditResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
