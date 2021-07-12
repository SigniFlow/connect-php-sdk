# SigniFlowConnect\TemplatesApi

All URIs are relative to https://server-url/API/SignFlowAPIServiceRest.svc.

Method | HTTP request | Description
------------- | ------------- | -------------
[**postApplyPrepperTemplate()**](TemplatesApi.md#postApplyPrepperTemplate) | **POST** /ApplyPrepperTemplate | Apply a Prepper template
[**postGetDocumentTagFieldBoxPosition()**](TemplatesApi.md#postGetDocumentTagFieldBoxPosition) | **POST** /GetDocumentTagFieldBoxPosition | Get Document Tag Field Box Position
[**postGetDocumentTagFieldPosition()**](TemplatesApi.md#postGetDocumentTagFieldPosition) | **POST** /GetDocumentTagFieldPosition | Get Document Tag Field Position
[**postGetPrepperTemplate()**](TemplatesApi.md#postGetPrepperTemplate) | **POST** /GetPrepperTemplate | Get Prepper Template
[**postGetPrepperTemplateList()**](TemplatesApi.md#postGetPrepperTemplateList) | **POST** /GetPrepperTemplateList | Get Prepper Template List


## `postApplyPrepperTemplate()`

```php
postApplyPrepperTemplate($content_type, $apply_prepper_template_request): \SigniFlowConnect\Model\ApplyPrepperTemplateResponse
```

Apply a Prepper template

#### Used when applying a templaet to a document.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');




$config = new SigniFlowConnect\Configuration();
$config->setHost('https://Server-Url/API/SignFlowAPIServiceRest.svc');

$apiInstance = new SigniFlowConnect\Api\TemplatesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$content_type = json_decode(''application/json')'; // string

$apply_prepper_template_request = json_decode('{"DocIDField":2147483647,"PrepperTemplateIDField":21344,"TokenField":{"TokenExpiryField":"2019-08-24T14:15:22Z","TokenField":"aaa111"}})'; // \SigniFlowConnect\Model\ApplyPrepperTemplateRequest | ##### Apply A Prepper Template Request Model


try {
    $result = $apiInstance->postApplyPrepperTemplate($content_type, $apply_prepper_template_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TemplatesApi->postApplyPrepperTemplate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **content_type** | **string**|  | [default to &#39;application/json&#39;]
 **apply_prepper_template_request** | [**\SigniFlowConnect\Model\ApplyPrepperTemplateRequest**](../Model/ApplyPrepperTemplateRequest.md)| ##### Apply A Prepper Template Request Model | [optional]

### Return type

[**\SigniFlowConnect\Model\ApplyPrepperTemplateResponse**](../Model/ApplyPrepperTemplateResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postGetDocumentTagFieldBoxPosition()`

```php
postGetDocumentTagFieldBoxPosition($content_type, $get_document_tag_field_box_position_request): \SigniFlowConnect\Model\GetDocumentTagFieldBoxPositionResponse
```

Get Document Tag Field Box Position

#### Used to get the tag field box position on a document.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');




$config = new SigniFlowConnect\Configuration();
$config->setHost('https://Server-Url/API/SignFlowAPIServiceRest.svc');

$apiInstance = new SigniFlowConnect\Api\TemplatesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$content_type = json_decode(''application/json')'; // string

$get_document_tag_field_box_position_request = json_decode('{"DocIDField":0,"TagNameField":"string","TokenField":{"TokenExpiryField":"2019-08-24T14:15:22Z","TokenField":"aaa111"}})'; // \SigniFlowConnect\Model\GetDocumentTagFieldBoxPositionRequest | ##### Get Document Tag Field Box Position Request Model


try {
    $result = $apiInstance->postGetDocumentTagFieldBoxPosition($content_type, $get_document_tag_field_box_position_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TemplatesApi->postGetDocumentTagFieldBoxPosition: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **content_type** | **string**|  | [default to &#39;application/json&#39;]
 **get_document_tag_field_box_position_request** | [**\SigniFlowConnect\Model\GetDocumentTagFieldBoxPositionRequest**](../Model/GetDocumentTagFieldBoxPositionRequest.md)| ##### Get Document Tag Field Box Position Request Model | [optional]

### Return type

[**\SigniFlowConnect\Model\GetDocumentTagFieldBoxPositionResponse**](../Model/GetDocumentTagFieldBoxPositionResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postGetDocumentTagFieldPosition()`

```php
postGetDocumentTagFieldPosition($content_type, $get_document_tag_field_position_request): \SigniFlowConnect\Model\GetDocumentTagFieldPositionResponse
```

Get Document Tag Field Position

#### Used to get the tag position on a document.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');




$config = new SigniFlowConnect\Configuration();
$config->setHost('https://Server-Url/API/SignFlowAPIServiceRest.svc');

$apiInstance = new SigniFlowConnect\Api\TemplatesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$content_type = json_decode(''application/json')'; // string

$get_document_tag_field_position_request = json_decode('{"DocIDField":0,"TagNameField":"string","TokenField":{"TokenExpiryField":"2019-08-24T14:15:22Z","TokenField":"aaa111"}})'; // \SigniFlowConnect\Model\GetDocumentTagFieldPositionRequest | ##### Get Document Tag Field Position Request Model


try {
    $result = $apiInstance->postGetDocumentTagFieldPosition($content_type, $get_document_tag_field_position_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TemplatesApi->postGetDocumentTagFieldPosition: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **content_type** | **string**|  | [default to &#39;application/json&#39;]
 **get_document_tag_field_position_request** | [**\SigniFlowConnect\Model\GetDocumentTagFieldPositionRequest**](../Model/GetDocumentTagFieldPositionRequest.md)| ##### Get Document Tag Field Position Request Model | [optional]

### Return type

[**\SigniFlowConnect\Model\GetDocumentTagFieldPositionResponse**](../Model/GetDocumentTagFieldPositionResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postGetPrepperTemplate()`

```php
postGetPrepperTemplate($content_type, $get_prepper_template_request): \SigniFlowConnect\Model\GetPrepperTemplateResponse
```

Get Prepper Template

#### Used to get a document template.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');




$config = new SigniFlowConnect\Configuration();
$config->setHost('https://Server-Url/API/SignFlowAPIServiceRest.svc');

$apiInstance = new SigniFlowConnect\Api\TemplatesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$content_type = json_decode(''application/json')'; // string

$get_prepper_template_request = json_decode('{"DocIDField":0,"PrepperTemplateIDField":0,"TokenField":{"TokenExpiryField":"2019-08-24T14:15:22Z","TokenField":"aaa111"}})'; // \SigniFlowConnect\Model\GetPrepperTemplateRequest | ##### Get Prepper Template Request Model


try {
    $result = $apiInstance->postGetPrepperTemplate($content_type, $get_prepper_template_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TemplatesApi->postGetPrepperTemplate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **content_type** | **string**|  | [default to &#39;application/json&#39;]
 **get_prepper_template_request** | [**\SigniFlowConnect\Model\GetPrepperTemplateRequest**](../Model/GetPrepperTemplateRequest.md)| ##### Get Prepper Template Request Model | [optional]

### Return type

[**\SigniFlowConnect\Model\GetPrepperTemplateResponse**](../Model/GetPrepperTemplateResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postGetPrepperTemplateList()`

```php
postGetPrepperTemplateList($content_type, $get_prepper_template_list_request): \SigniFlowConnect\Model\GetPrepperTemplateListResponse
```

Get Prepper Template List

#### Used to get a list of document templates.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');




$config = new SigniFlowConnect\Configuration();
$config->setHost('https://Server-Url/API/SignFlowAPIServiceRest.svc');

$apiInstance = new SigniFlowConnect\Api\TemplatesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$content_type = json_decode(''application/json')'; // string

$get_prepper_template_list_request = json_decode('{"TemplateFolderField":0,"TokenField":{"TokenExpiryField":"2019-08-24T14:15:22Z","TokenField":"aaa111"}})'; // \SigniFlowConnect\Model\GetPrepperTemplateListRequest | ##### Get Prepper Template List Request Model


try {
    $result = $apiInstance->postGetPrepperTemplateList($content_type, $get_prepper_template_list_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TemplatesApi->postGetPrepperTemplateList: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **content_type** | **string**|  | [default to &#39;application/json&#39;]
 **get_prepper_template_list_request** | [**\SigniFlowConnect\Model\GetPrepperTemplateListRequest**](../Model/GetPrepperTemplateListRequest.md)| ##### Get Prepper Template List Request Model | [optional]

### Return type

[**\SigniFlowConnect\Model\GetPrepperTemplateListResponse**](../Model/GetPrepperTemplateListResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
