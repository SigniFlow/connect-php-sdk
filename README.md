![SigniFlow Logo]
---

[![PHP Composer](https://github.com/SigniFlow/connect-php-sdk/actions/workflows/php.yml/badge.svg?branch=master)](https://github.com/SigniFlow/connect-php-sdk/actions/workflows/php.yml)
[![PHP version](https://badge.fury.io/ph/signiflow%2Fconnect-php-sdk.svg)](https://badge.fury.io/ph/signiflow%2Fconnect-php-sdk)
[![Apache-2 license](https://img.shields.io/badge/license-Apache2-brightgreen.svg)](https://www.apache.org/licenses/LICENSE-2.0)

# SigniFlow/connect-php-sdk - the PHP library for the SigniFlow OpenAPI Spec v1

## SigniFlow API used to automate esignature workflow creation and management.


For more information, please visit [https://www.signiflow.com/contact](https://www.signiflow.com/contact).

## Installation & Usage

### Requirements

PHP 7.2 and later.

### Composer

To install the bindings via [Composer](https://getcomposer.org/), add the following to `composer.json`:

```json
{
  "repositories": [
    {
      "type": "vcs",
      "url": "https://github.com/signiflow/connect-php-sdk.git"
    }
  ],
  "require": {
    "signiflow/connect-php-sdk": ">=1.0.1*"
  }
}
```

Then run `composer install`

### Manual Installation

Download the files and include `autoload.php`:

```php
<?php
require_once('/path/to/OpenAPIClient-php/vendor/autoload.php');
```

## Getting Started

Please follow the [installation procedure](#installation--usage) and then run the following:

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');





$config = new SigniFlowConnect\Configuration();
$config->setHost('https://Server-Url/API/SignFlowAPIServiceRest.svc');

$apiInstance = new SigniFlowConnect\Api\AuditsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$content_type = 'application/json'

$get_audit_document_request = 
json_decode('{"DocIDField":"string","TokenField":{"TokenExpiryField":"2019-08-24T14:15:22Z","TokenField":"aaa111"}}')
 // \SigniFlowConnect\Model\GetAuditDocumentRequest | ##### Get Audit Document Request Model


try {
    $result = $apiInstance->postGetAuditDocument($content_type, $get_audit_document_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AuditsApi->postGetAuditDocument: ', $e->getMessage(), PHP_EOL;
}

```

## API Endpoints

All URIs are relative to *https://server-url/API/SignFlowAPIServiceRest.svc*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*AuditsApi* | [**postGetAuditDocument**](docs/Api/AuditsApi.md#postgetauditdocument) | **POST** /GetAuditDocument | Get Audit Document
*AuditsApi* | [**postGetDocumentAudit**](docs/Api/AuditsApi.md#postgetdocumentaudit) | **POST** /GetDocumentAudit | Get Document Audit
*AuthenticationApi* | [**login**](docs/Api/AuthenticationApi.md#login) | **POST** /Login | Login
*AuthenticationApi* | [**postLogout**](docs/Api/AuthenticationApi.md#postlogout) | **POST** /Logout | Logout
*AuthenticationApi* | [**postTokenExtend**](docs/Api/AuthenticationApi.md#posttokenextend) | **POST** /TokenExtend | Token Extend
*AuthenticationApi* | [**postTokenValidate**](docs/Api/AuthenticationApi.md#posttokenvalidate) | **POST** /TokenValidate | Token Validate
*PortfoliosApi* | [**postCreatePortfolio**](docs/Api/PortfoliosApi.md#postcreateportfolio) | **POST** /CreatePortfolio | Create Portfolio
*PortfoliosApi* | [**postDownloadPortfolio**](docs/Api/PortfoliosApi.md#postdownloadportfolio) | **POST** /DownloadPortfolio | Download Portfolio
*PortfoliosApi* | [**postLinkToPortfolio**](docs/Api/PortfoliosApi.md#postlinktoportfolio) | **POST** /LinkToPortfolio | Link To Portfolio
*PortfoliosApi* | [**postSetDocumentOrder**](docs/Api/PortfoliosApi.md#postsetdocumentorder) | **POST** /SetDocumentOrder | Set Document Order
*PortfoliosApi* | [**postSharePortfolio**](docs/Api/PortfoliosApi.md#postshareportfolio) | **POST** /SharePortfolio | Share Portfolio
*PortfoliosApi* | [**postSharePortfolioNoEmail**](docs/Api/PortfoliosApi.md#postshareportfolionoemail) | **POST** /SharePortfolio_No_Email | Share Portfolio No Email
*SigningCeremonyApi* | [**postMultipleSignersSigningCeremony**](docs/Api/SigningCeremonyApi.md#postmultiplesignerssigningceremony) | **POST** /MultipleSignersSigningCeremony | Multiple Signers Signing Ceremony
*SigningCeremonyApi* | [**postSigningCeremonyV2**](docs/Api/SigningCeremonyApi.md#postsigningceremonyv2) | **POST** /SigningCeremonyV2 | Signing Ceremony V2
*TemplatesApi* | [**postApplyPrepperTemplate**](docs/Api/TemplatesApi.md#postapplypreppertemplate) | **POST** /ApplyPrepperTemplate | Apply a Prepper template
*TemplatesApi* | [**postGetDocumentTagFieldBoxPosition**](docs/Api/TemplatesApi.md#postgetdocumenttagfieldboxposition) | **POST** /GetDocumentTagFieldBoxPosition | Get Document Tag Field Box Position
*TemplatesApi* | [**postGetDocumentTagFieldPosition**](docs/Api/TemplatesApi.md#postgetdocumenttagfieldposition) | **POST** /GetDocumentTagFieldPosition | Get Document Tag Field Position
*TemplatesApi* | [**postGetPrepperTemplate**](docs/Api/TemplatesApi.md#postgetpreppertemplate) | **POST** /GetPrepperTemplate | Get Prepper Template
*TemplatesApi* | [**postGetPrepperTemplateList**](docs/Api/TemplatesApi.md#postgetpreppertemplatelist) | **POST** /GetPrepperTemplateList | Get Prepper Template List
*ViewersApi* | [**postGetDocLink**](docs/Api/ViewersApi.md#postgetdoclink) | **POST** /GetDocLink | Get Document Link
*ViewersApi* | [**postGetDocumentPrepperLink**](docs/Api/ViewersApi.md#postgetdocumentprepperlink) | **POST** /GetDocumentPrepperLink | Get Document Prepper Link
*WorkFlowApi* | [**createWorkflow**](docs/Api/WorkFlowApi.md#createworkflow) | **POST** /CreateWorkflow | Create Workflow
*WorkFlowApi* | [**getDocument**](docs/Api/WorkFlowApi.md#getdocument) | **POST** /GetDoc | Get Document
*WorkFlowApi* | [**postAddWorkflowStep**](docs/Api/WorkFlowApi.md#postaddworkflowstep) | **POST** /AddWorkflowStepV2 | Add a Workflow step
*WorkFlowApi* | [**postCancelFlow**](docs/Api/WorkFlowApi.md#postcancelflow) | **POST** /CancelFlow | Cancel Flow
*WorkFlowApi* | [**postDeleteDoc**](docs/Api/WorkFlowApi.md#postdeletedoc) | **POST** /DeleteDoc | Delete Document
*WorkFlowApi* | [**postDocPrepperAddField**](docs/Api/WorkFlowApi.md#postdocprepperaddfield) | **POST** /DocPrepperAddFieldsFlowID | Document Prepper Add Fields
*WorkFlowApi* | [**postDocPrepperAdvancedFields**](docs/Api/WorkFlowApi.md#postdocprepperadvancedfields) | **POST** /DocPrepperAdvancedFields | Document Prepper Add Advanced Fields
*WorkFlowApi* | [**postFullWorkflow**](docs/Api/WorkFlowApi.md#postfullworkflow) | **POST** /FullWorkflow | FullWorkflow
*WorkFlowApi* | [**postGetDocStatus**](docs/Api/WorkFlowApi.md#postgetdocstatus) | **POST** /GetDocStatus | Get Document Status
*WorkFlowApi* | [**postInitiateFlow**](docs/Api/WorkFlowApi.md#postinitiateflow) | **POST** /InitiateFlow | Initiate Flow
*WorkFlowApi* | [**postInitiateFlowNoEmail**](docs/Api/WorkFlowApi.md#postinitiateflownoemail) | **POST** /InitiateFlow_No_Email | Initiate Flow No Email
*WorkFlowApi* | [**postInitiateFlowNoInitialEmail**](docs/Api/WorkFlowApi.md#postinitiateflownoinitialemail) | **POST** /InitiateFlow_No_Initial_Email | Initiate Flow No Initial Email
*WorkFlowApi* | [**postWorkflowSign**](docs/Api/WorkFlowApi.md#postworkflowsign) | **POST** /WorkflowSign | Workflow Sign

## Models

- [ActionField](docs/Model/ActionField.md)
- [AddWokflowStepV2Response](docs/Model/AddWokflowStepV2Response.md)
- [AddWokflowStepV2ResponseFlowStepsField](docs/Model/AddWokflowStepV2ResponseFlowStepsField.md)
- [AddWorkflowStepV2Request](docs/Model/AddWorkflowStepV2Request.md)
- [AdvancedFieldType](docs/Model/AdvancedFieldType.md)
- [ApplyPrepperTemplateRequest](docs/Model/ApplyPrepperTemplateRequest.md)
- [ApplyPrepperTemplateResponse](docs/Model/ApplyPrepperTemplateResponse.md)
- [AutoExpire](docs/Model/AutoExpire.md)
- [AutoRemind](docs/Model/AutoRemind.md)
- [CancelFlowRequest](docs/Model/CancelFlowRequest.md)
- [CancelFlowResponse](docs/Model/CancelFlowResponse.md)
- [CreatePortfolioRequest](docs/Model/CreatePortfolioRequest.md)
- [CreatePortfolioResponse](docs/Model/CreatePortfolioResponse.md)
- [CreateWorkflowRequest](docs/Model/CreateWorkflowRequest.md)
- [CreateWorkflowResponse](docs/Model/CreateWorkflowResponse.md)
- [DeleteDocRequest](docs/Model/DeleteDocRequest.md)
- [DeleteDocResponse](docs/Model/DeleteDocResponse.md)
- [DocExtension](docs/Model/DocExtension.md)
- [DocPrepperAddAdvancedFieldsRequest](docs/Model/DocPrepperAddAdvancedFieldsRequest.md)
- [DocPrepperAddAdvancedFieldsRequestFieldInfoListField](docs/Model/DocPrepperAddAdvancedFieldsRequestFieldInfoListField.md)
- [DocPrepperAddAdvancedFieldsRequestFieldOptionsListField](docs/Model/DocPrepperAddAdvancedFieldsRequestFieldOptionsListField.md)
- [DocPrepperAddAdvancedFieldsResponse](docs/Model/DocPrepperAddAdvancedFieldsResponse.md)
- [DocPrepperAddAdvancedFieldsResponseAdvancedFieldResponseListField](docs/Model/DocPrepperAddAdvancedFieldsResponseAdvancedFieldResponseListField.md)
- [DocPrepperAddFieldsFlowIDRequest](docs/Model/DocPrepperAddFieldsFlowIDRequest.md)
- [DocPrepperAddFieldsFlowIDResponse](docs/Model/DocPrepperAddFieldsFlowIDResponse.md)
- [DownloadPortfolioRequest](docs/Model/DownloadPortfolioRequest.md)
- [DownloadPortfolioResponse](docs/Model/DownloadPortfolioResponse.md)
- [FieldType](docs/Model/FieldType.md)
- [FullWorkflowRequest](docs/Model/FullWorkflowRequest.md)
- [FullWorkflowRequestGroupStepField](docs/Model/FullWorkflowRequestGroupStepField.md)
- [FullWorkflowRequestGroupStepFieldGroupMembersField](docs/Model/FullWorkflowRequestGroupStepFieldGroupMembersField.md)
- [FullWorkflowRequestPortfolioInformationField](docs/Model/FullWorkflowRequestPortfolioInformationField.md)
- [FullWorkflowRequestWorkflowUserFieldsField](docs/Model/FullWorkflowRequestWorkflowUserFieldsField.md)
- [FullWorkflowRequestWorkflowUsersListField](docs/Model/FullWorkflowRequestWorkflowUsersListField.md)
- [FullWorkflowResponse](docs/Model/FullWorkflowResponse.md)
- [GetAuditDocumentRequest](docs/Model/GetAuditDocumentRequest.md)
- [GetAuditDocumentResponse](docs/Model/GetAuditDocumentResponse.md)
- [GetDocLinkRequest](docs/Model/GetDocLinkRequest.md)
- [GetDocLinkResponse](docs/Model/GetDocLinkResponse.md)
- [GetDocStatusRequest](docs/Model/GetDocStatusRequest.md)
- [GetDocStatusResponse](docs/Model/GetDocStatusResponse.md)
- [GetDocumentAuditRequest](docs/Model/GetDocumentAuditRequest.md)
- [GetDocumentAuditResponse](docs/Model/GetDocumentAuditResponse.md)
- [GetDocumentAuditResponseActivityField](docs/Model/GetDocumentAuditResponseActivityField.md)
- [GetDocumentPrepperLinkRequest](docs/Model/GetDocumentPrepperLinkRequest.md)
- [GetDocumentPrepperLinkResponse](docs/Model/GetDocumentPrepperLinkResponse.md)
- [GetDocumentRequest](docs/Model/GetDocumentRequest.md)
- [GetDocumentResponse](docs/Model/GetDocumentResponse.md)
- [GetDocumentTagFieldBoxPositionRequest](docs/Model/GetDocumentTagFieldBoxPositionRequest.md)
- [GetDocumentTagFieldBoxPositionResponse](docs/Model/GetDocumentTagFieldBoxPositionResponse.md)
- [GetDocumentTagFieldBoxPositionResponseDocumentTagFieldsBoxPositionField](docs/Model/GetDocumentTagFieldBoxPositionResponseDocumentTagFieldsBoxPositionField.md)
- [GetDocumentTagFieldPositionRequest](docs/Model/GetDocumentTagFieldPositionRequest.md)
- [GetDocumentTagFieldPositionResponse](docs/Model/GetDocumentTagFieldPositionResponse.md)
- [GetDocumentTagFieldPositionResponseDocumentTagFieldsPositionField](docs/Model/GetDocumentTagFieldPositionResponseDocumentTagFieldsPositionField.md)
- [GetPrepperTemplateListRequest](docs/Model/GetPrepperTemplateListRequest.md)
- [GetPrepperTemplateListResponse](docs/Model/GetPrepperTemplateListResponse.md)
- [GetPrepperTemplateListResponseTemplateInformationValuesField](docs/Model/GetPrepperTemplateListResponseTemplateInformationValuesField.md)
- [GetPrepperTemplateRequest](docs/Model/GetPrepperTemplateRequest.md)
- [GetPrepperTemplateResponse](docs/Model/GetPrepperTemplateResponse.md)
- [GetPrepperTemplateResponsePrepperTemplateValuesField](docs/Model/GetPrepperTemplateResponsePrepperTemplateValuesField.md)
- [InitiateFlowNoEmailRequest](docs/Model/InitiateFlowNoEmailRequest.md)
- [InitiateFlowNoEmailResponse](docs/Model/InitiateFlowNoEmailResponse.md)
- [InitiateFlowNoInitialEmailRequest](docs/Model/InitiateFlowNoInitialEmailRequest.md)
- [InitiateFlowNoInitialEmailResponse](docs/Model/InitiateFlowNoInitialEmailResponse.md)
- [InitiateFlowRequest](docs/Model/InitiateFlowRequest.md)
- [InitiateFlowResponse](docs/Model/InitiateFlowResponse.md)
- [LinkToPortfolioRequest](docs/Model/LinkToPortfolioRequest.md)
- [LinkToPortfolioResponse](docs/Model/LinkToPortfolioResponse.md)
- [LoginRequest](docs/Model/LoginRequest.md)
- [LoginResponse](docs/Model/LoginResponse.md)
- [LogoutRequest](docs/Model/LogoutRequest.md)
- [LogoutResponse](docs/Model/LogoutResponse.md)
- [MultipleSignersSigningCeremonyRequest](docs/Model/MultipleSignersSigningCeremonyRequest.md)
- [MultipleSignersSigningCeremonyRequestSignerListField](docs/Model/MultipleSignersSigningCeremonyRequestSignerListField.md)
- [MultipleSignersSigningCeremonyResponse](docs/Model/MultipleSignersSigningCeremonyResponse.md)
- [Priority](docs/Model/Priority.md)
- [ProxyAllowedField](docs/Model/ProxyAllowedField.md)
- [SetDocumentOrderRequest](docs/Model/SetDocumentOrderRequest.md)
- [SetDocumentOrderResponse](docs/Model/SetDocumentOrderResponse.md)
- [SharePortfolioNoEmailRequest](docs/Model/SharePortfolioNoEmailRequest.md)
- [SharePortfolioNoEmailResponse](docs/Model/SharePortfolioNoEmailResponse.md)
- [SharePortfolioRequest](docs/Model/SharePortfolioRequest.md)
- [SharePortfolioResponse](docs/Model/SharePortfolioResponse.md)
- [SigningCeremonyV2Request](docs/Model/SigningCeremonyV2Request.md)
- [SigningCeremonyV2Response](docs/Model/SigningCeremonyV2Response.md)
- [TokenExtendRequest](docs/Model/TokenExtendRequest.md)
- [TokenExtendResponse](docs/Model/TokenExtendResponse.md)
- [TokenField](docs/Model/TokenField.md)
- [TokenValidateRequest](docs/Model/TokenValidateRequest.md)
- [TokenValidateResponse](docs/Model/TokenValidateResponse.md)
- [WorkflowSignRequest](docs/Model/WorkflowSignRequest.md)
- [WorkflowSignResponse](docs/Model/WorkflowSignResponse.md)

## Authorization
All endpoints do not require authorization.
## Tests

To run the tests, use:

```bash
composer install
vendor/bin/phpunit
```

## Author

support@signiflow.com

## About this package

This PHP package is automatically generated by the [OpenAPI Generator](https://openapi-generator.tech) project:

- API version: `1.0`
    - Package version: `1.0.1`
- Build package: `org.openapitools.codegen.languages.PhpClientCodegen`



## Contributing

Send bug reports, feature requests, and code contributions to the [API
specifications repository](https://github.com/SigniFlow/OpenAPI-Specifications),
as this repository contains only the generated SDK code.

## License

```
Copyright 2021 SigniFlow, Inc.

Licensed under the Apache License, Version 2.0 (the "License");
you may not use this file except in compliance with the License.
You may obtain a copy of the License at

   http://www.apache.org/licenses/LICENSE-2.0

Unless required by applicable law or agreed to in writing, software
distributed under the License is distributed on an "AS IS" BASIS,
WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
See the License for the specific language governing permissions and
limitations under the License.
```

[//]: # "Link anchor definitions"
[SigniFlow Logo]: https://www.signiflow.com/wp-content/uploads/2020/12/WEB-GENERIC-LOGO-REGISTERED-1024x256-1-300x75.png
