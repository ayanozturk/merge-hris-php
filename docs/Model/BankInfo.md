# # BankInfo

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** |  | [optional] [readonly]
**remote_id** | **string** | The third-party API ID of the matching object. | [optional]
**employee** | **string** | The employee with this bank account. | [optional]
**account_number** | **string** | The account number. | [optional]
**routing_number** | **string** | The routing number. | [optional]
**bank_name** | **string** | The bank name. | [optional]
**account_type** | [**AccountTypeEnum**](AccountTypeEnum.md) | The bank account type | [optional]
**remote_created_at** | [**\DateTime**](\DateTime.md) | When the matching bank object was created in the third party system. | [optional]
**remote_data** | [**\MergeHRISClient\Model\RemoteData[]**](RemoteData.md) |  | [optional] [readonly]
**remote_was_deleted** | **bool** | Indicates whether or not this object has been deleted by third party webhooks. | [optional] [readonly]
**field_mappings** | **array<string,mixed>** |  | [optional] [readonly]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
