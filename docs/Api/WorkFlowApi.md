# SigniFlowConnect\WorkFlowApi

All URIs are relative to https://server-url/API/SignFlowAPIServiceRest.svc.

Method | HTTP request | Description
------------- | ------------- | -------------
[**createWorkflow()**](WorkFlowApi.md#createWorkflow) | **POST** /CreateWorkflow | Create Workflow
[**getDocument()**](WorkFlowApi.md#getDocument) | **POST** /GetDoc | Get Document
[**postAddWorkflowStep()**](WorkFlowApi.md#postAddWorkflowStep) | **POST** /AddWorkflowStepV2 | Add a Workflow step
[**postCancelFlow()**](WorkFlowApi.md#postCancelFlow) | **POST** /CancelFlow | Cancel Flow
[**postDeleteDoc()**](WorkFlowApi.md#postDeleteDoc) | **POST** /DeleteDoc | Delete Document
[**postDocPrepperAddField()**](WorkFlowApi.md#postDocPrepperAddField) | **POST** /DocPrepperAddFieldsFlowID | Document Prepper Add Fields
[**postDocPrepperAdvancedFields()**](WorkFlowApi.md#postDocPrepperAdvancedFields) | **POST** /DocPrepperAdvancedFields | Document Prepper Add Advanced Fields
[**postFullWorkflow()**](WorkFlowApi.md#postFullWorkflow) | **POST** /FullWorkflow | FullWorkflow
[**postGetDocStatus()**](WorkFlowApi.md#postGetDocStatus) | **POST** /GetDocStatus | Get Document Status
[**postInitiateFlow()**](WorkFlowApi.md#postInitiateFlow) | **POST** /InitiateFlow | Initiate Flow
[**postInitiateFlowNoEmail()**](WorkFlowApi.md#postInitiateFlowNoEmail) | **POST** /InitiateFlow_No_Email | Initiate Flow No Email
[**postInitiateFlowNoInitialEmail()**](WorkFlowApi.md#postInitiateFlowNoInitialEmail) | **POST** /InitiateFlow_No_Initial_Email | Initiate Flow No Initial Email
[**postWorkflowSign()**](WorkFlowApi.md#postWorkflowSign) | **POST** /WorkflowSign | Workflow Sign


## `createWorkflow()`

```php
createWorkflow($content_type, $create_workflow_request): \SigniFlowConnect\Model\CreateWorkflowResponse
```

Create Workflow

#### Used to start a new workflow by passing a Base64 encoded document to SigniFlow

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new SigniFlowConnect\Api\WorkFlowApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$content_type = 'application/json'; // string
$create_workflow_request = {"AdditionalDataField":"\"\"","AutoExpireField":0,"AutoRemindField":0,"DocField":"String content","DocNameField":"String content","DueDateField":"2019-08-24T14:15:22Z","ExtensionField":0,"MessageField":"String content","PriorityField":0,"SLAField":0,"TokenField":{"TokenExpiryField":"2019-08-24T14:15:22Z","TokenField":"aaa111"}}; // \SigniFlowConnect\Model\CreateWorkflowRequest | ##### Create Workflow Request Model

try {
    $result = $apiInstance->createWorkflow($content_type, $create_workflow_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorkFlowApi->createWorkflow: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **content_type** | **string**|  | [default to &#39;application/json&#39;]
 **create_workflow_request** | [**\SigniFlowConnect\Model\CreateWorkflowRequest**](../Model/CreateWorkflowRequest.md)| ##### Create Workflow Request Model |

### Return type

[**\SigniFlowConnect\Model\CreateWorkflowResponse**](../Model/CreateWorkflowResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getDocument()`

```php
getDocument($content_type, $get_document_request): \SigniFlowConnect\Model\GetDocumentResponse
```

Get Document

#### Used to download a document from SigniFlow.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new SigniFlowConnect\Api\WorkFlowApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$content_type = 'application/json'; // string
$get_document_request = {"DocIDField":2147483647,"TokenField":{"TokenExpiryField":"2019-08-24T14:15:22Z","TokenField":"aaa111"}}; // \SigniFlowConnect\Model\GetDocumentRequest | ##### Get Document Request Model

try {
    $result = $apiInstance->getDocument($content_type, $get_document_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorkFlowApi->getDocument: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **content_type** | **string**|  | [default to &#39;application/json&#39;]
 **get_document_request** | [**\SigniFlowConnect\Model\GetDocumentRequest**](../Model/GetDocumentRequest.md)| ##### Get Document Request Model | [optional]

### Return type

[**\SigniFlowConnect\Model\GetDocumentResponse**](../Model/GetDocumentResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postAddWorkflowStep()`

```php
postAddWorkflowStep($content_type, $add_workflow_step_v2_request): \SigniFlowConnect\Model\AddWokflowStepV2Response
```

Add a Workflow step

#### Used to add a step to a document Workflow process.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new SigniFlowConnect\Api\WorkFlowApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$content_type = 'application/json'; // string
$add_workflow_step_v2_request = {"ActionField":0,"CellField":"string","DocIDField":"2147483647","EmailField":"email@domain.com","FirstNameField":"John","LanguageCodeField":"ENG","LastNameField":"Smith","ProxyAllowedField":0,"TokenField":{"TokenExpiryField":"2019-08-24T14:15:22Z","TokenField":"aaa111"}}; // \SigniFlowConnect\Model\AddWorkflowStepV2Request | ##### Add A Workflow Step Request Model

try {
    $result = $apiInstance->postAddWorkflowStep($content_type, $add_workflow_step_v2_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorkFlowApi->postAddWorkflowStep: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **content_type** | **string**|  | [default to &#39;application/json&#39;]
 **add_workflow_step_v2_request** | [**\SigniFlowConnect\Model\AddWorkflowStepV2Request**](../Model/AddWorkflowStepV2Request.md)| ##### Add A Workflow Step Request Model | [optional]

### Return type

[**\SigniFlowConnect\Model\AddWokflowStepV2Response**](../Model/AddWokflowStepV2Response.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postCancelFlow()`

```php
postCancelFlow($content_type, $cancel_flow_request): \SigniFlowConnect\Model\CancelFlowResponse
```

Cancel Flow

#### Used to cancel a document workflow.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new SigniFlowConnect\Api\WorkFlowApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$content_type = 'application/json'; // string
$cancel_flow_request = {"DocIDField":"2147483647","TokenField":{"TokenExpiryField":"2019-08-24T14:15:22Z","TokenField":"aaa111"}}; // \SigniFlowConnect\Model\CancelFlowRequest | ##### Cancel Flow Request Model

try {
    $result = $apiInstance->postCancelFlow($content_type, $cancel_flow_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorkFlowApi->postCancelFlow: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **content_type** | **string**|  | [default to &#39;application/json&#39;]
 **cancel_flow_request** | [**\SigniFlowConnect\Model\CancelFlowRequest**](../Model/CancelFlowRequest.md)| ##### Cancel Flow Request Model | [optional]

### Return type

[**\SigniFlowConnect\Model\CancelFlowResponse**](../Model/CancelFlowResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postDeleteDoc()`

```php
postDeleteDoc($content_type, $delete_doc_request): \SigniFlowConnect\Model\DeleteDocResponse
```

Delete Document

#### This is used to delete a document.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new SigniFlowConnect\Api\WorkFlowApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$content_type = 'application/json'; // string
$delete_doc_request = {"DocIDField":2147483647,"TokenField":{"TokenExpiryField":"2019-08-24T14:15:22Z","TokenField":"aaa111"}}; // \SigniFlowConnect\Model\DeleteDocRequest | ##### Delete Document Request Model

try {
    $result = $apiInstance->postDeleteDoc($content_type, $delete_doc_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorkFlowApi->postDeleteDoc: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **content_type** | **string**|  | [default to &#39;application/json&#39;]
 **delete_doc_request** | [**\SigniFlowConnect\Model\DeleteDocRequest**](../Model/DeleteDocRequest.md)| ##### Delete Document Request Model | [optional]

### Return type

[**\SigniFlowConnect\Model\DeleteDocResponse**](../Model/DeleteDocResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postDocPrepperAddField()`

```php
postDocPrepperAddField($content_type, $doc_prepper_add_fields_flow_id_request): \SigniFlowConnect\Model\DocPrepperAddFieldsFlowIDResponse
```

Document Prepper Add Fields

#### Used to add fields to a document using the user's FlowID.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new SigniFlowConnect\Api\WorkFlowApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$content_type = 'application/json'; // string
$doc_prepper_add_fields_flow_id_request = {"DocFieldTypeField":0,"DocIDField":12344,"FlowIDField":11111,"HeightField":"25","WidthField":"20","IsInvisibleField":true,"LinkToField":"string","PageNumberField":2,"NameField":"string","UserEmailField":"email@domain.com","XCoordinateField":"50","YCoordinateField":"150","TokenField":{"TokenExpiryField":"2019-08-24T14:15:22Z","TokenField":"aaa111"}}; // \SigniFlowConnect\Model\DocPrepperAddFieldsFlowIDRequest | ##### Document Prepper Add Fields Request Model

try {
    $result = $apiInstance->postDocPrepperAddField($content_type, $doc_prepper_add_fields_flow_id_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorkFlowApi->postDocPrepperAddField: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **content_type** | **string**|  | [default to &#39;application/json&#39;]
 **doc_prepper_add_fields_flow_id_request** | [**\SigniFlowConnect\Model\DocPrepperAddFieldsFlowIDRequest**](../Model/DocPrepperAddFieldsFlowIDRequest.md)| ##### Document Prepper Add Fields Request Model | [optional]

### Return type

[**\SigniFlowConnect\Model\DocPrepperAddFieldsFlowIDResponse**](../Model/DocPrepperAddFieldsFlowIDResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postDocPrepperAdvancedFields()`

```php
postDocPrepperAdvancedFields($content_type, $doc_prepper_add_advanced_fields_request): \SigniFlowConnect\Model\DocPrepperAddAdvancedFieldsResponse
```

Document Prepper Add Advanced Fields

#### Used to add advanced fields to a document.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new SigniFlowConnect\Api\WorkFlowApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$content_type = 'application/json'; // string
$doc_prepper_add_advanced_fields_request = {"FieldInfoListField":[{"AdvancedFieldTypeField":0,"DocIDField":2147483647,"FieldOptionsListField":[{"LinkedValueField":"string","MaxField":5,"MinField":2,"ValueField":"string"}],"FlowIDField":11111,"FontFamilyField":"Arial","FontSizeField":12,"HeightField":"30","WidthField":"15","LinkToField":"string","NameField":"Text Field","PageNumberField":2,"SearchableField":true,"UserEmailField":"John@domain.com","ValueField":"string","XCoordinateField":"60","YCoordinateField":"120"}],"TokenField":{"TokenExpiryField":"2019-08-24T14:15:22Z","TokenField":"aaa111"}}; // \SigniFlowConnect\Model\DocPrepperAddAdvancedFieldsRequest | ##### Document Prepper Add Advanced Fields Request Model

try {
    $result = $apiInstance->postDocPrepperAdvancedFields($content_type, $doc_prepper_add_advanced_fields_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorkFlowApi->postDocPrepperAdvancedFields: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **content_type** | **string**|  | [default to &#39;application/json&#39;]
 **doc_prepper_add_advanced_fields_request** | [**\SigniFlowConnect\Model\DocPrepperAddAdvancedFieldsRequest**](../Model/DocPrepperAddAdvancedFieldsRequest.md)| ##### Document Prepper Add Advanced Fields Request Model | [optional]

### Return type

[**\SigniFlowConnect\Model\DocPrepperAddAdvancedFieldsResponse**](../Model/DocPrepperAddAdvancedFieldsResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postFullWorkflow()`

```php
postFullWorkflow($content_type, $full_workflow_request): \SigniFlowConnect\Model\FullWorkflowResponse
```

FullWorkflow

#### Used to create a fullworkflow for a document.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new SigniFlowConnect\Api\WorkFlowApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$content_type = 'application/json'; // string
$full_workflow_request = {"AdditionalDataField":"string","AutoRemindField":0,"CustomMessageField":"A message with things.","DocField":"string","DocNameField":"Document 1","DueDateField":"02/02/2021","ExtensionField":0,"FlattenDocumentField":true,"KeepContentSecurityField":true,"KeepCustomPropertiesField":true,"KeepXMPMetadataField":true,"PortfolioInformationField":{"CreatePortfolioField":true,"LinkToPortfolioField":true,"PortfolioIDField":11112,"PortfolioNameField":"Portfolio 1"},"PriorityField":0,"SLAField":0,"SendFirstEmailField":true,"SendWorkflowEmailsField":true,"TokenField":{"TokenExpiryField":"2019-08-24T14:15:22Z","TokenField":"aaa111"},"WorkflowUsersListField":[{"ActionField":0,"AllowProxyField":0,"AutoSignField":true,"EmailAddressField":"email@domain.com","GroupStepField":{"GroupMembersField":[{"LanguageCodeField":"string","UserEmailField":"string","UserFullNameField":"string","UserMobileNumberField":"string"}],"GroupNameField":"Managers","RequiredNumberOfSignaturesField":3},"LanguageCodeField":"ENG","LatitudeField":"string","LongitudeField":"string","MobileNumberField":"078 222 2222","PreloadedFaceToFaceSignersField":[{}],"SignReasonField":"Because yes","SignerPasswordField":"P@ssw0rd","UserFirstNameField":"John","UserFullNameField":"John Smith","UserLastNameField":"Smith","WorkflowUserFieldsField":[{"FieldTypeField":7,"FontFamilyField":"Arial","FontSizeField":15,"GroupUserNumberField":5,"HeightField":"15","IsInvisibleField":true,"PageNumberField":2,"TagNameField":"string","ValueField":"string","WidthField":"25","XCoordinateField":"60","XOffsetField":15,"YCoordinateField":"150","YOffsetField":20}]}]}; // \SigniFlowConnect\Model\FullWorkflowRequest | ##### FullWorkflow Request Model

try {
    $result = $apiInstance->postFullWorkflow($content_type, $full_workflow_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorkFlowApi->postFullWorkflow: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **content_type** | **string**|  | [default to &#39;application/json&#39;]
 **full_workflow_request** | [**\SigniFlowConnect\Model\FullWorkflowRequest**](../Model/FullWorkflowRequest.md)| ##### FullWorkflow Request Model | [optional]

### Return type

[**\SigniFlowConnect\Model\FullWorkflowResponse**](../Model/FullWorkflowResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postGetDocStatus()`

```php
postGetDocStatus($content_type, $get_doc_status_request): \SigniFlowConnect\Model\GetDocStatusResponse
```

Get Document Status

#### Used to get the status of the document ex. pending/completed/rejected.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new SigniFlowConnect\Api\WorkFlowApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$content_type = 'application/json'; // string
$get_doc_status_request = {"DocIDField":0,"TokenField":{"TokenExpiryField":"2019-08-24T14:15:22Z","TokenField":"aaa111"}}; // \SigniFlowConnect\Model\GetDocStatusRequest | ##### Get Document Status Request Model

try {
    $result = $apiInstance->postGetDocStatus($content_type, $get_doc_status_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorkFlowApi->postGetDocStatus: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **content_type** | **string**|  | [default to &#39;application/json&#39;]
 **get_doc_status_request** | [**\SigniFlowConnect\Model\GetDocStatusRequest**](../Model/GetDocStatusRequest.md)| ##### Get Document Status Request Model | [optional]

### Return type

[**\SigniFlowConnect\Model\GetDocStatusResponse**](../Model/GetDocStatusResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postInitiateFlow()`

```php
postInitiateFlow($content_type, $initiate_flow_request): \SigniFlowConnect\Model\InitiateFlowResponse
```

Initiate Flow

#### Used to initiate aworkflow of a document.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new SigniFlowConnect\Api\WorkFlowApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$content_type = 'application/json'; // string
$initiate_flow_request = {"DocIDField":"string","TokenField":{"TokenExpiryField":"2019-08-24T14:15:22Z","TokenField":"aaa111"}}; // \SigniFlowConnect\Model\InitiateFlowRequest | ##### Initiate Flow Request Model

try {
    $result = $apiInstance->postInitiateFlow($content_type, $initiate_flow_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorkFlowApi->postInitiateFlow: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **content_type** | **string**|  | [default to &#39;application/json&#39;]
 **initiate_flow_request** | [**\SigniFlowConnect\Model\InitiateFlowRequest**](../Model/InitiateFlowRequest.md)| ##### Initiate Flow Request Model | [optional]

### Return type

[**\SigniFlowConnect\Model\InitiateFlowResponse**](../Model/InitiateFlowResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postInitiateFlowNoEmail()`

```php
postInitiateFlowNoEmail($content_type, $initiate_flow_no_email_request): \SigniFlowConnect\Model\InitiateFlowNoEmailResponse
```

Initiate Flow No Email

#### Used to initiate a workflow without sending out emails.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new SigniFlowConnect\Api\WorkFlowApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$content_type = 'application/json'; // string
$initiate_flow_no_email_request = {"DocIDField":"string","TokenField":{"TokenExpiryField":"2019-08-24T14:15:22Z","TokenField":"aaa111"}}; // \SigniFlowConnect\Model\InitiateFlowNoEmailRequest | ##### Initiate Flow No Email Request Model

try {
    $result = $apiInstance->postInitiateFlowNoEmail($content_type, $initiate_flow_no_email_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorkFlowApi->postInitiateFlowNoEmail: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **content_type** | **string**|  | [default to &#39;application/json&#39;]
 **initiate_flow_no_email_request** | [**\SigniFlowConnect\Model\InitiateFlowNoEmailRequest**](../Model/InitiateFlowNoEmailRequest.md)| ##### Initiate Flow No Email Request Model | [optional]

### Return type

[**\SigniFlowConnect\Model\InitiateFlowNoEmailResponse**](../Model/InitiateFlowNoEmailResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postInitiateFlowNoInitialEmail()`

```php
postInitiateFlowNoInitialEmail($content_type, $initiate_flow_no_initial_email_request): \SigniFlowConnect\Model\InitiateFlowNoInitialEmailResponse
```

Initiate Flow No Initial Email

#### Used to initiate a document workflow without an initial email being sent to the user.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new SigniFlowConnect\Api\WorkFlowApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$content_type = 'application/json'; // string
$initiate_flow_no_initial_email_request = {"DocIDField":"string","TokenField":{"TokenExpiryField":"2019-08-24T14:15:22Z","TokenField":"aaa111"}}; // \SigniFlowConnect\Model\InitiateFlowNoInitialEmailRequest | ##### Initiate Flow No Initial Email Request Model

try {
    $result = $apiInstance->postInitiateFlowNoInitialEmail($content_type, $initiate_flow_no_initial_email_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorkFlowApi->postInitiateFlowNoInitialEmail: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **content_type** | **string**|  | [default to &#39;application/json&#39;]
 **initiate_flow_no_initial_email_request** | [**\SigniFlowConnect\Model\InitiateFlowNoInitialEmailRequest**](../Model/InitiateFlowNoInitialEmailRequest.md)| ##### Initiate Flow No Initial Email Request Model | [optional]

### Return type

[**\SigniFlowConnect\Model\InitiateFlowNoInitialEmailResponse**](../Model/InitiateFlowNoInitialEmailResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postWorkflowSign()`

```php
postWorkflowSign($content_type, $workflow_sign_request): \SigniFlowConnect\Model\WorkflowSignResponse
```

Workflow Sign

#### Used to send a request to a user to sign a document workflow.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new SigniFlowConnect\Api\WorkFlowApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$content_type = 'application/json'; // string
$workflow_sign_request = {"DocIDField":"string","LatitudeField":"string","LoginPasswordField":"pa$$word","LoginUserNameField":"email@domain.com","LongitudeField":"string","SignReasonField":"string","TimeZoneOffsetField":0,"TokenField":{"TokenExpiryField":"2019-08-24T14:15:22Z","TokenField":"aaa111"}}; // \SigniFlowConnect\Model\WorkflowSignRequest | ##### Workflow Sign Request Model

try {
    $result = $apiInstance->postWorkflowSign($content_type, $workflow_sign_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorkFlowApi->postWorkflowSign: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **content_type** | **string**|  | [default to &#39;application/json&#39;]
 **workflow_sign_request** | [**\SigniFlowConnect\Model\WorkflowSignRequest**](../Model/WorkflowSignRequest.md)| ##### Workflow Sign Request Model | [optional]

### Return type

[**\SigniFlowConnect\Model\WorkflowSignResponse**](../Model/WorkflowSignResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
