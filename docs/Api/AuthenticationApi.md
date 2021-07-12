# SigniFlowConnect\AuthenticationApi

All URIs are relative to https://server-url/API/SignFlowAPIServiceRest.svc.

Method | HTTP request | Description
------------- | ------------- | -------------
[**login()**](AuthenticationApi.md#login) | **POST** /Login | Login
[**postLogout()**](AuthenticationApi.md#postLogout) | **POST** /Logout | Logout
[**postTokenExtend()**](AuthenticationApi.md#postTokenExtend) | **POST** /TokenExtend | Token Extend
[**postTokenValidate()**](AuthenticationApi.md#postTokenValidate) | **POST** /TokenValidate | Token Validate


## `login()`

```php
login($content_type, $login_request): \SigniFlowConnect\Model\LoginResponse
```

Login

#### Generates a API Token for the User

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');




$config = new SigniFlowConnect\Configuration();
$config->setHost('https://Server-Url/API/SignFlowAPIServiceRest.svc');

$apiInstance = new SigniFlowConnect\Api\AuthenticationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$content_type = json_decode(''application/json')'; // string

$login_request = json_decode('{"UserNameField":"email@domain.com","PasswordField":"P@ssword"})'; // \SigniFlowConnect\Model\LoginRequest | ##### Login Request Model


try {
    $result = $apiInstance->login($content_type, $login_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AuthenticationApi->login: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **content_type** | **string**|  | [default to &#39;application/json&#39;]
 **login_request** | [**\SigniFlowConnect\Model\LoginRequest**](../Model/LoginRequest.md)| ##### Login Request Model |

### Return type

[**\SigniFlowConnect\Model\LoginResponse**](../Model/LoginResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postLogout()`

```php
postLogout($content_type, $logout_request): \SigniFlowConnect\Model\LogoutResponse
```

Logout

#### Used to log out a user from SigniFlow.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');




$config = new SigniFlowConnect\Configuration();
$config->setHost('https://Server-Url/API/SignFlowAPIServiceRest.svc');

$apiInstance = new SigniFlowConnect\Api\AuthenticationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$content_type = json_decode(''application/json')'; // string

$logout_request = json_decode('{"TokenField":"aaa111"})'; // \SigniFlowConnect\Model\LogoutRequest | ##### Logout Request Model


try {
    $result = $apiInstance->postLogout($content_type, $logout_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AuthenticationApi->postLogout: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **content_type** | **string**|  | [default to &#39;application/json&#39;]
 **logout_request** | [**\SigniFlowConnect\Model\LogoutRequest**](../Model/LogoutRequest.md)| ##### Logout Request Model | [optional]

### Return type

[**\SigniFlowConnect\Model\LogoutResponse**](../Model/LogoutResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postTokenExtend()`

```php
postTokenExtend($content_type, $token_extend_request): \SigniFlowConnect\Model\TokenExtendResponse
```

Token Extend

#### Used to extend the period of time in which the session token is valid.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');




$config = new SigniFlowConnect\Configuration();
$config->setHost('https://Server-Url/API/SignFlowAPIServiceRest.svc');

$apiInstance = new SigniFlowConnect\Api\AuthenticationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$content_type = json_decode(''application/json')'; // string

$token_extend_request = json_decode('{"TokenField":{"TokenExpiryField":"2019-08-24T14:15:22Z","TokenField":"aaa111"},"TokenValidityField":0})'; // \SigniFlowConnect\Model\TokenExtendRequest | ##### Token Extend Request Model


try {
    $result = $apiInstance->postTokenExtend($content_type, $token_extend_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AuthenticationApi->postTokenExtend: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **content_type** | **string**|  | [default to &#39;application/json&#39;]
 **token_extend_request** | [**\SigniFlowConnect\Model\TokenExtendRequest**](../Model/TokenExtendRequest.md)| ##### Token Extend Request Model | [optional]

### Return type

[**\SigniFlowConnect\Model\TokenExtendResponse**](../Model/TokenExtendResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postTokenValidate()`

```php
postTokenValidate($content_type, $token_validate_request): \SigniFlowConnect\Model\TokenValidateResponse
```

Token Validate

#### Used to validate the user's session token.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');




$config = new SigniFlowConnect\Configuration();
$config->setHost('https://Server-Url/API/SignFlowAPIServiceRest.svc');

$apiInstance = new SigniFlowConnect\Api\AuthenticationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$content_type = json_decode(''application/json')'; // string

$token_validate_request = json_decode('{"0":"string"})'; // \SigniFlowConnect\Model\TokenValidateRequest | ##### Token Validate Request Model


try {
    $result = $apiInstance->postTokenValidate($content_type, $token_validate_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AuthenticationApi->postTokenValidate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **content_type** | **string**|  | [default to &#39;application/json&#39;]
 **token_validate_request** | [**\SigniFlowConnect\Model\TokenValidateRequest**](../Model/TokenValidateRequest.md)| ##### Token Validate Request Model | [optional]

### Return type

[**\SigniFlowConnect\Model\TokenValidateResponse**](../Model/TokenValidateResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
