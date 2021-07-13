# SigniFlowConnect\PortfoliosApi

All URIs are relative to https://server-url/API/SignFlowAPIServiceRest.svc.

Method | HTTP request | Description
------------- | ------------- | -------------
[**postCreatePortfolio()**](PortfoliosApi.md#postCreatePortfolio) | **POST** /CreatePortfolio | Create Portfolio
[**postDownloadPortfolio()**](PortfoliosApi.md#postDownloadPortfolio) | **POST** /DownloadPortfolio | Download Portfolio
[**postLinkToPortfolio()**](PortfoliosApi.md#postLinkToPortfolio) | **POST** /LinkToPortfolio | Link To Portfolio
[**postSetDocumentOrder()**](PortfoliosApi.md#postSetDocumentOrder) | **POST** /SetDocumentOrder | Set Document Order
[**postSharePortfolio()**](PortfoliosApi.md#postSharePortfolio) | **POST** /SharePortfolio | Share Portfolio
[**postSharePortfolioNoEmail()**](PortfoliosApi.md#postSharePortfolioNoEmail) | **POST** /SharePortfolio_No_Email | Share Portfolio No Email


## `postCreatePortfolio()`

```php
postCreatePortfolio($content_type, $create_portfolio_request): \SigniFlowConnect\Model\CreatePortfolioResponse
```

Create Portfolio

#### Used to create a portfolio to group documents.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');




$config = new SigniFlowConnect\Configuration();
$config->setHost('https://Server-Url/API/SignFlowAPIServiceRest.svc');

$apiInstance = new SigniFlowConnect\Api\PortfoliosApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$content_type = 'application/json'

$create_portfolio_request = 
json_decode('{"DocIDField":2147483647,"PortfolioNameField":"Application Portfolio","TokenIDField":{"TokenExpiryField":"2019-08-24T14:15:22Z","TokenField":"aaa111"}}')
 // \SigniFlowConnect\Model\CreatePortfolioRequest | ##### Create Portfolio Request Model


try {
    $result = $apiInstance->postCreatePortfolio($content_type, $create_portfolio_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PortfoliosApi->postCreatePortfolio: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **content_type** | **string**|  | [default to &#39;application/json&#39;]
 **create_portfolio_request** | [**\SigniFlowConnect\Model\CreatePortfolioRequest**](../Model/CreatePortfolioRequest.md)| ##### Create Portfolio Request Model | [optional]

### Return type

[**\SigniFlowConnect\Model\CreatePortfolioResponse**](../Model/CreatePortfolioResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postDownloadPortfolio()`

```php
postDownloadPortfolio($content_type, $download_portfolio_request): \SigniFlowConnect\Model\DownloadPortfolioResponse
```

Download Portfolio

#### Used to return a string that is then used to download a portfolio.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');




$config = new SigniFlowConnect\Configuration();
$config->setHost('https://Server-Url/API/SignFlowAPIServiceRest.svc');

$apiInstance = new SigniFlowConnect\Api\PortfoliosApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$content_type = 'application/json'

$download_portfolio_request = 
json_decode('{"PortfolioIDField":111112,"TokenField":{"TokenExpiryField":"2019-08-24T14:15:22Z","TokenField":"aaa111"}}')
 // \SigniFlowConnect\Model\DownloadPortfolioRequest | ##### Download Portfolio Request Model


try {
    $result = $apiInstance->postDownloadPortfolio($content_type, $download_portfolio_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PortfoliosApi->postDownloadPortfolio: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **content_type** | **string**|  | [default to &#39;application/json&#39;]
 **download_portfolio_request** | [**\SigniFlowConnect\Model\DownloadPortfolioRequest**](../Model/DownloadPortfolioRequest.md)| ##### Download Portfolio Request Model | [optional]

### Return type

[**\SigniFlowConnect\Model\DownloadPortfolioResponse**](../Model/DownloadPortfolioResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postLinkToPortfolio()`

```php
postLinkToPortfolio($content_type, $link_to_portfolio_request): \SigniFlowConnect\Model\LinkToPortfolioResponse
```

Link To Portfolio

#### Used to get the url link to a portfolio.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');




$config = new SigniFlowConnect\Configuration();
$config->setHost('https://Server-Url/API/SignFlowAPIServiceRest.svc');

$apiInstance = new SigniFlowConnect\Api\PortfoliosApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$content_type = 'application/json'

$link_to_portfolio_request = 
json_decode('{"DocIDField":"string","DocumentNameField":"string","PortfolioIDField":"string","TokenField":{"TokenExpiryField":"2019-08-24T14:15:22Z","TokenField":"aaa111"}}')
 // \SigniFlowConnect\Model\LinkToPortfolioRequest | ##### Link To Portfolio Request Model


try {
    $result = $apiInstance->postLinkToPortfolio($content_type, $link_to_portfolio_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PortfoliosApi->postLinkToPortfolio: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **content_type** | **string**|  | [default to &#39;application/json&#39;]
 **link_to_portfolio_request** | [**\SigniFlowConnect\Model\LinkToPortfolioRequest**](../Model/LinkToPortfolioRequest.md)| ##### Link To Portfolio Request Model | [optional]

### Return type

[**\SigniFlowConnect\Model\LinkToPortfolioResponse**](../Model/LinkToPortfolioResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postSetDocumentOrder()`

```php
postSetDocumentOrder($content_type, $set_document_order_request): \SigniFlowConnect\Model\SetDocumentOrderResponse
```

Set Document Order

#### Used to set the order of documents that needs to be signed.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');




$config = new SigniFlowConnect\Configuration();
$config->setHost('https://Server-Url/API/SignFlowAPIServiceRest.svc');

$apiInstance = new SigniFlowConnect\Api\PortfoliosApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$content_type = 'application/json'

$set_document_order_request = 
json_decode('{"DocIDField":"string","DocumentOrderField":"string","TokenField":{"TokenExpiryField":"2019-08-24T14:15:22Z","TokenField":"aaa111"}}')
 // \SigniFlowConnect\Model\SetDocumentOrderRequest | ##### Set Document Order Request Model


try {
    $result = $apiInstance->postSetDocumentOrder($content_type, $set_document_order_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PortfoliosApi->postSetDocumentOrder: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **content_type** | **string**|  | [default to &#39;application/json&#39;]
 **set_document_order_request** | [**\SigniFlowConnect\Model\SetDocumentOrderRequest**](../Model/SetDocumentOrderRequest.md)| ##### Set Document Order Request Model | [optional]

### Return type

[**\SigniFlowConnect\Model\SetDocumentOrderResponse**](../Model/SetDocumentOrderResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postSharePortfolio()`

```php
postSharePortfolio($content_type, $share_portfolio_request): \SigniFlowConnect\Model\SharePortfolioResponse
```

Share Portfolio

#### Used when a user wants to share a portfolio with someone else.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');




$config = new SigniFlowConnect\Configuration();
$config->setHost('https://Server-Url/API/SignFlowAPIServiceRest.svc');

$apiInstance = new SigniFlowConnect\Api\PortfoliosApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$content_type = 'application/json'

$share_portfolio_request = 
json_decode('{"AccessLevelField":0,"PortfolioIDField":"string","ShareOptionField":0,"TokenField":{"TokenExpiryField":"2019-08-24T14:15:22Z","TokenField":"aaa111"},"UniqueIDField":"string"}')
 // \SigniFlowConnect\Model\SharePortfolioRequest | ##### Share Portfolio Request Model


try {
    $result = $apiInstance->postSharePortfolio($content_type, $share_portfolio_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PortfoliosApi->postSharePortfolio: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **content_type** | **string**|  | [default to &#39;application/json&#39;]
 **share_portfolio_request** | [**\SigniFlowConnect\Model\SharePortfolioRequest**](../Model/SharePortfolioRequest.md)| ##### Share Portfolio Request Model | [optional]

### Return type

[**\SigniFlowConnect\Model\SharePortfolioResponse**](../Model/SharePortfolioResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postSharePortfolioNoEmail()`

```php
postSharePortfolioNoEmail($content_type, $share_portfolio_no_email_request): \SigniFlowConnect\Model\SharePortfolioNoEmailResponse
```

Share Portfolio No Email

#### Used when a user wants to share a portfolio without sending out an email.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');




$config = new SigniFlowConnect\Configuration();
$config->setHost('https://Server-Url/API/SignFlowAPIServiceRest.svc');

$apiInstance = new SigniFlowConnect\Api\PortfoliosApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$content_type = 'application/json'

$share_portfolio_no_email_request = 
json_decode('{"AccessLevelField":0,"PortfolioIDField":"string","ShareOptionField":0,"TokenField":{"TokenExpiryField":"2019-08-24T14:15:22Z","TokenField":"aaa111"},"UniqueIDField":"string"}')
 // \SigniFlowConnect\Model\SharePortfolioNoEmailRequest | ##### Share Portfolio No Email Request Model


try {
    $result = $apiInstance->postSharePortfolioNoEmail($content_type, $share_portfolio_no_email_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PortfoliosApi->postSharePortfolioNoEmail: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **content_type** | **string**|  | [default to &#39;application/json&#39;]
 **share_portfolio_no_email_request** | [**\SigniFlowConnect\Model\SharePortfolioNoEmailRequest**](../Model/SharePortfolioNoEmailRequest.md)| ##### Share Portfolio No Email Request Model | [optional]

### Return type

[**\SigniFlowConnect\Model\SharePortfolioNoEmailResponse**](../Model/SharePortfolioNoEmailResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
