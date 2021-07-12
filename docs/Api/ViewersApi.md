# SigniFlowConnect\ViewersApi

All URIs are relative to https://server-url/API/SignFlowAPIServiceRest.svc.

Method | HTTP request | Description
------------- | ------------- | -------------
[**postGetDocLink()**](ViewersApi.md#postGetDocLink) | **POST** /GetDocLink | Get Document Link
[**postGetDocumentPrepperLink()**](ViewersApi.md#postGetDocumentPrepperLink) | **POST** /GetDocumentPrepperLink | Get Document Prepper Link


## `postGetDocLink()`

```php
postGetDocLink($content_type, $get_doc_link_request): \SigniFlowConnect\Model\GetDocLinkResponse
```

Get Document Link

#### Used to get the document link that will be used to sign a document.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');




$config = new SigniFlowConnect\Configuration();
$config->setHost('https://Server-Url/API/SignFlowAPIServiceRest.svc');

$apiInstance = new SigniFlowConnect\Api\ViewersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$content_type = json_decode(''application/json')'; // string

$get_doc_link_request = json_decode('{"DocIDField":"string","EmailField":"email@domain.com","ReturnURLField":"string","TokenField":{"TokenExpiryField":"2019-08-24T14:15:22Z","TokenField":"aaa111"}})'; // \SigniFlowConnect\Model\GetDocLinkRequest | ##### Get Document Link Request Model


try {
    $result = $apiInstance->postGetDocLink($content_type, $get_doc_link_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ViewersApi->postGetDocLink: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **content_type** | **string**|  | [default to &#39;application/json&#39;]
 **get_doc_link_request** | [**\SigniFlowConnect\Model\GetDocLinkRequest**](../Model/GetDocLinkRequest.md)| ##### Get Document Link Request Model | [optional]

### Return type

[**\SigniFlowConnect\Model\GetDocLinkResponse**](../Model/GetDocLinkResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postGetDocumentPrepperLink()`

```php
postGetDocumentPrepperLink($content_type, $get_document_prepper_link_request): \SigniFlowConnect\Model\GetDocumentPrepperLinkResponse
```

Get Document Prepper Link

#### Used to get a document prepper link (url).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');




$config = new SigniFlowConnect\Configuration();
$config->setHost('https://Server-Url/API/SignFlowAPIServiceRest.svc');

$apiInstance = new SigniFlowConnect\Api\ViewersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$content_type = json_decode(''application/json')'; // string

$get_document_prepper_link_request = json_decode('{"DocIDField":"string","EmailSettingField":0,"ReturnURLField":"string","TokenField":{"TokenExpiryField":"2019-08-24T14:15:22Z","TokenField":"aaa111"}})'; // \SigniFlowConnect\Model\GetDocumentPrepperLinkRequest | ##### Get Document Prepper Link Request Model


try {
    $result = $apiInstance->postGetDocumentPrepperLink($content_type, $get_document_prepper_link_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ViewersApi->postGetDocumentPrepperLink: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **content_type** | **string**|  | [default to &#39;application/json&#39;]
 **get_document_prepper_link_request** | [**\SigniFlowConnect\Model\GetDocumentPrepperLinkRequest**](../Model/GetDocumentPrepperLinkRequest.md)| ##### Get Document Prepper Link Request Model | [optional]

### Return type

[**\SigniFlowConnect\Model\GetDocumentPrepperLinkResponse**](../Model/GetDocumentPrepperLinkResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
