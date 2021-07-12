# SigniFlowConnect\SigningCeremonyApi

All URIs are relative to https://server-url/API/SignFlowAPIServiceRest.svc.

Method | HTTP request | Description
------------- | ------------- | -------------
[**postMultipleSignersSigningCeremony()**](SigningCeremonyApi.md#postMultipleSignersSigningCeremony) | **POST** /MultipleSignersSigningCeremony | Multiple Signers Signing Ceremony
[**postSigningCeremonyV2()**](SigningCeremonyApi.md#postSigningCeremonyV2) | **POST** /SigningCeremonyV2 | Signing Ceremony V2


## `postMultipleSignersSigningCeremony()`

```php
postMultipleSignersSigningCeremony($content_type, $multiple_signers_signing_ceremony_request): \SigniFlowConnect\Model\MultipleSignersSigningCeremonyResponse
```

Multiple Signers Signing Ceremony

#### Used when there are multiple signers on a document.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');




$config = new SigniFlowConnect\Configuration();
$config->setHost('https://Server-Url/API/SignFlowAPIServiceRest.svc');

$apiInstance = new SigniFlowConnect\Api\SigningCeremonyApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$content_type = json_decode(''application/json')'; // string

$multiple_signers_signing_ceremony_request = json_decode('{"DocField":"string","DocNameField":"string","LoginPasswordField":"12345","LoginUserNameField":"John@gmail.com","SignerListField":[{"SignatureHField":0,"SignatureImageField":"string","SignatureImageIncludeBorderField":true,"SignatureImageIncludeReasonField":true,"SignatureImageIncludeSignedByField":true,"SignatureImageIncludeSignedDateField":true,"SignatureImageTypeField":0,"SignaturePageField":0,"SignatureWField":0,"SignatureXField":0,"SignatureYField":0,"SignerEmailField":"string","SignerFullNameField":"string","SignerIndentificationNumberField":"string","SignerLocationField":"string","SignerMobileNumberField":"string","SignerReasonField":"string","SignerTrustOriginField":"string","SignerTrustReferenceField":"string"}]})'; // \SigniFlowConnect\Model\MultipleSignersSigningCeremonyRequest | ##### Multiple Signers Signing Ceremony Request Model


try {
    $result = $apiInstance->postMultipleSignersSigningCeremony($content_type, $multiple_signers_signing_ceremony_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SigningCeremonyApi->postMultipleSignersSigningCeremony: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **content_type** | **string**|  | [default to &#39;application/json&#39;]
 **multiple_signers_signing_ceremony_request** | [**\SigniFlowConnect\Model\MultipleSignersSigningCeremonyRequest**](../Model/MultipleSignersSigningCeremonyRequest.md)| ##### Multiple Signers Signing Ceremony Request Model | [optional]

### Return type

[**\SigniFlowConnect\Model\MultipleSignersSigningCeremonyResponse**](../Model/MultipleSignersSigningCeremonyResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postSigningCeremonyV2()`

```php
postSigningCeremonyV2($content_type, $signing_ceremony_v2_request): \SigniFlowConnect\Model\SigningCeremonyV2Response
```

Signing Ceremony V2

#### Used to initiate the signing process of a document.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');




$config = new SigniFlowConnect\Configuration();
$config->setHost('https://Server-Url/API/SignFlowAPIServiceRest.svc');

$apiInstance = new SigniFlowConnect\Api\SigningCeremonyApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$content_type = json_decode(''application/json')'; // string

$signing_ceremony_v2_request = json_decode('{"CheckboxFieldsListField":[{"CheckboxHField":0,"CheckboxPageField":0,"CheckboxWField":0,"CheckboxXField":0,"CheckboxYField":0,"IsCheckedField":true}],"DocField":"string","DocNameField":"string","InitialFieldsListField":[{"InitialHField":0,"InitialImageField":"string","InitialImageTypeField":0,"InitialPageField":0,"InitialWField":0,"InitialXField":0,"InitialYField":0}],"LoginPasswordField":"string","LoginUserNameField":"string","SignatureHField":0,"SignatureImageField":"string","SignatureImageIncludeBorderField":true,"SignatureImageIncludeReasonField":true,"SignatureImageIncludeSignedByField":true,"SignatureImageIncludeSignedDateField":true,"SignatureImageTypeField":0,"SignaturePageField":0,"SignatureWField":0,"SignatureXField":0,"SignatureYField":0,"SignerEmailField":"string","SignerFullNameField":"string","SignerIdentificationNumberField":"string","SignerLocationField":"string","SignerMobileNumberField":"string","SignerReasonField":"string","SignerTrustOriginField":"string","SignerTrustReferenceField":"string","TextFieldsListField":[{"TextFieldHField":0,"TextFieldPageField":0,"TextFieldValueField":"string","TextFieldWField":0,"TextFieldXField":0,"TextFieldYField":0}]})'; // \SigniFlowConnect\Model\SigningCeremonyV2Request | ##### Signing Ceremony V2 Request Model


try {
    $result = $apiInstance->postSigningCeremonyV2($content_type, $signing_ceremony_v2_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SigningCeremonyApi->postSigningCeremonyV2: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **content_type** | **string**|  | [default to &#39;application/json&#39;]
 **signing_ceremony_v2_request** | [**\SigniFlowConnect\Model\SigningCeremonyV2Request**](../Model/SigningCeremonyV2Request.md)| ##### Signing Ceremony V2 Request Model | [optional]

### Return type

[**\SigniFlowConnect\Model\SigningCeremonyV2Response**](../Model/SigningCeremonyV2Response.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
