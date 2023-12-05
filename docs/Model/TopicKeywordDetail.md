# TopicKeywordDetail

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**keyword** | **string** | The exact keyword phrase for the returned related keyword. | [optional] 
**connection_strength** | **int** | The strength of the connection between the related keyword returned and the topic specified, in a range from 1 to 5, where 5 is a very strong connection. | [optional] 
**search_data** | [**\Swagger\Client\Model\ResearchSearchData**](ResearchSearchData.md) |  | [optional] 
**ranking_data** | [**\Swagger\Client\Model\ResearchRankingData**](ResearchRankingData.md) |  | [optional] 
**serp_data** | [**\Swagger\Client\Model\ResearchSerpData**](ResearchSerpData.md) |  | [optional] 
**tracked_keyword_id** | **int** | The unique ID used to identify and reference the keyword in the system. Returned only if the keyword is tracked in the SEOmonitor campaign. It can be stored and used in other endpoints for filtering. | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

