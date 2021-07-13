# # CreateWorkflowRequest

#### The request sent to create a document workflow.

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**additional_data_field** | **string** | Sets additional data to be embedded in PDF Meta. |
**auto_expire_field** | [**\SigniFlowConnect\Model\AutoExpire**](AutoExpire.md) |  |
**auto_remind_field** | [**\SigniFlowConnect\Model\AutoRemind**](AutoRemind.md) |  |
**doc_field** | **string** | Base64 Encoded String of document |
**doc_name_field** | **string** | Name of document to display in SigniFlow |
**due_date_field** | [**\DateTime**](\DateTime.md) | Due date for the document, use in conjunction with Auto Expire. | [optional]
**extension_field** | [**\SigniFlowConnect\Model\DocExtension**](DocExtension.md) |  |
**message_field** | **string** | Custom message to display to participants |
**priority_field** | [**\SigniFlowConnect\Model\Priority**](Priority.md) |  |
**sla_field** | **int** | Deprecated field, Pass 0 | [default to 0]
**token_field** | [**\SigniFlowConnect\Model\TokenField**](TokenField.md) |  |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
