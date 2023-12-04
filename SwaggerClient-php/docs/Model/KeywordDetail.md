# KeywordDetail

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**keyword_id** | **int** | The unique ID used to identify and reference the keyword in the system. It can be stored and used in other endpoints for filtering. | [optional] 
**keyword** | **string** | The exact keyword phrase. | [optional] 
**main_keyword_id** | **int** | The ID of the main keyword, if the current keyword is aggregated under another keyword as its close variation. | [optional] 
**search_intent** | **string** | The search intent of the keyword.  Possible values: &#x60;informational&#x60;, &#x60;commercial&#x60;, or &#x60;transactional&#x60;. | [optional] 
**labels** | **string** | The label associated with the keyword, either manually or automatically applied, that indicate specific attributes or characteristics of a keyword.  Possible values: automatic labels: &#x60;misspelled&#x60;, &#x60;low relevance&#x60;, &#x60;brands&#x60;, &#x60;localized&#x60;. for keywords labeled as &#x60;seasonal&#x60; in the platform, the endpoint will return one of the following possible values: &#x60;in_full_season&#x60;, &#x60;out_of_season&#x60;, &#x60;season_approaching&#x60;. custom labels: User-defined label name. | [optional] 
**groups** | **string** | The group_ids of the groups this keyword is included in. | [optional] 
**serp_data** | [**\Swagger\Client\Model\KeywordSerpData**](KeywordSerpData.md) |  | [optional] 
**search_data** | [**\Swagger\Client\Model\SearchData**](SearchData.md) |  | [optional] 
**ranking_data** | [**\Swagger\Client\Model\KeywordRankingData**](KeywordRankingData.md) |  | [optional] 
**landing_pages** | [**\Swagger\Client\Model\KeywordLandingPages**](KeywordLandingPages.md) |  | [optional] 
**traffic_data** | [**\Swagger\Client\Model\KeywordTrafficData**](KeywordTrafficData.md) |  | [optional] 
**opportunity** | [**\Swagger\Client\Model\Opportunity**](Opportunity.md) |  | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

