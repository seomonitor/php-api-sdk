# Swagger\Client\KeywordResearchApi

All URIs are relative to *https://apix.seomonitor.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**researchV30DomainOverviewGet**](KeywordResearchApi.md#researchv30domainoverviewget) | **GET** /research/v3.0/domain-overview | Get URL/Domain Overview
[**researchV30DomainRankingKeywordsGet**](KeywordResearchApi.md#researchv30domainrankingkeywordsget) | **GET** /research/v3.0/domain-ranking-keywords | Get Ranking Keywords
[**researchV30KeywordsGet**](KeywordResearchApi.md#researchv30keywordsget) | **GET** /research/v3.0/keywords | Get Keyword Data
[**researchV30RankingDataGet**](KeywordResearchApi.md#researchv30rankingdataget) | **GET** /research/v3.0/ranking-data | Get Ranking Data
[**researchV30RelatedKeywordsGet**](KeywordResearchApi.md#researchv30relatedkeywordsget) | **GET** /research/v3.0/related-keywords | Get Related Keywords
[**researchV30TopicOverviewGet**](KeywordResearchApi.md#researchv30topicoverviewget) | **GET** /research/v3.0/topic-overview | Get Topic Overview

# **researchV30DomainOverviewGet**
> \Swagger\Client\Model\ResearchDomainOverview researchV30DomainOverviewGet($campaign_id, $url, $gap_analysis)

Get URL/Domain Overview

This endpoint returns the overall aggregated search, SERP, and Visibility data for all the ranking keywords of a specified domain or URL.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: AuthorizationToken
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\KeywordResearchApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$campaign_id = 56; // int | This parameter specifies the ID of the campaign for which you want to return data.   Please refer to the Quick Start Guide to learn how to retrieve the IDs of your campaigns.
$url = "url_example"; // string | This parameter specifies the domain or URL path for which you want to return the data.   If you request a domain, the endpoint will return the data for the entire domain.   If you request a URL, the endpoint will return the data only for the specified URL path.
$gap_analysis = "gap_analysis_example"; // string | The type of keywords you want to return data for. Allowed values are `overlapping`, `non-overlapping`, or `all-keywords`.  If the `keyword_gap_type` is not specified, data for `all-keywords` is returned.

try {
    $result = $apiInstance->researchV30DomainOverviewGet($campaign_id, $url, $gap_analysis);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling KeywordResearchApi->researchV30DomainOverviewGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **campaign_id** | **int**| This parameter specifies the ID of the campaign for which you want to return data.   Please refer to the Quick Start Guide to learn how to retrieve the IDs of your campaigns. |
 **url** | **string**| This parameter specifies the domain or URL path for which you want to return the data.   If you request a domain, the endpoint will return the data for the entire domain.   If you request a URL, the endpoint will return the data only for the specified URL path. |
 **gap_analysis** | **string**| The type of keywords you want to return data for. Allowed values are &#x60;overlapping&#x60;, &#x60;non-overlapping&#x60;, or &#x60;all-keywords&#x60;.  If the &#x60;keyword_gap_type&#x60; is not specified, data for &#x60;all-keywords&#x60; is returned. | [optional]

### Return type

[**\Swagger\Client\Model\ResearchDomainOverview**](../Model/ResearchDomainOverview.md)

### Authorization

[AuthorizationToken](../../README.md#AuthorizationToken)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **researchV30DomainRankingKeywordsGet**
> \Swagger\Client\Model\DomainRankingsData researchV30DomainRankingKeywordsGet($campaign_id, $url, $limit, $offset, $order_by, $order_direction, $gap_analysis, $search)

Get Ranking Keywords

This endpoint returns the keywords on which the specified domain or URL ranks in top 100. For each keyword, it will return SERP, search and two sets of ranking data for your campaign domain, and for the requested one.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: AuthorizationToken
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\KeywordResearchApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$campaign_id = 56; // int | This parameter specifies the ID of the campaign for which you want to return data.   Please refer to the Quick Start Guide to learn how to retrieve the IDs of your campaigns.
$url = "url_example"; // string | This parameter specifies the domain or URL path for which you want to return the keywords ranking in top 100.  If you request a domain, the endpoint will return the data for the entire domain.   If you request a URL, the endpoint will return the data only for the specified URL path.
$limit = 56; // int | This parameter determines the maximum number of records to return in a single request.   Maximum Value: 1000 records per request  If you do not specify a `limit`, the default number of records returned per request will be 100.
$offset = 56; // int | This parameter specifies the starting point within the collection of resource results. It's typically used with the `limit` parameter to implement pagination.  If you do not specify an `offset`, the API will start from the first record.
$order_by = "order_by_example"; // string | This parameter enables you to sort the returned data based on a specified field.  The field names you can use to sort data are:  `search_volume`  `year-over-year`  `rank`: Sorts the data based on the keyword rank for the requested domain or URL.  `rank_trend`: Sorts the data based on the trend in keyword ranking for the requested domain or URL.  `my_rank`: Sorts the data based on the keyword rank for the tracked website.  `my_rank_trend`: Sorts the data based on the trend in keyword ranking for the tracked website.  `percentage_clicks`: Sorts the data based on the percentage of clicks that end up on organic results after discounting the impact of the top 10 SERP features present on the keyword.
$order_direction = "order_direction_example"; // string | This parameter determines the sorting direction of the `order_by` field. You can sort the data in either ascending (`asc`) or descending (`desc`) order.  If you do not specify an `order_direction`, the default is `asc`.
$gap_analysis = "gap_analysis_example"; // string | The type of keywords you want to return data for. Allowed values are `overlapping`, `non-overlapping`, or `all-keywords`.   If the `keyword_gap_type` is not specified, data for `all-keywords` is returned.
$search = "search_example"; // string | The `search` parameter allows you to filter the results based on a keyword name search. The API will return only those records where the keyword matches (fully or partially) the provided search term.  The search parameter is case-insensitive, allowing partial matches irrespective of casing.

try {
    $result = $apiInstance->researchV30DomainRankingKeywordsGet($campaign_id, $url, $limit, $offset, $order_by, $order_direction, $gap_analysis, $search);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling KeywordResearchApi->researchV30DomainRankingKeywordsGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **campaign_id** | **int**| This parameter specifies the ID of the campaign for which you want to return data.   Please refer to the Quick Start Guide to learn how to retrieve the IDs of your campaigns. |
 **url** | **string**| This parameter specifies the domain or URL path for which you want to return the keywords ranking in top 100.  If you request a domain, the endpoint will return the data for the entire domain.   If you request a URL, the endpoint will return the data only for the specified URL path. |
 **limit** | **int**| This parameter determines the maximum number of records to return in a single request.   Maximum Value: 1000 records per request  If you do not specify a &#x60;limit&#x60;, the default number of records returned per request will be 100. | [optional]
 **offset** | **int**| This parameter specifies the starting point within the collection of resource results. It&#x27;s typically used with the &#x60;limit&#x60; parameter to implement pagination.  If you do not specify an &#x60;offset&#x60;, the API will start from the first record. | [optional]
 **order_by** | **string**| This parameter enables you to sort the returned data based on a specified field.  The field names you can use to sort data are:  &#x60;search_volume&#x60;  &#x60;year-over-year&#x60;  &#x60;rank&#x60;: Sorts the data based on the keyword rank for the requested domain or URL.  &#x60;rank_trend&#x60;: Sorts the data based on the trend in keyword ranking for the requested domain or URL.  &#x60;my_rank&#x60;: Sorts the data based on the keyword rank for the tracked website.  &#x60;my_rank_trend&#x60;: Sorts the data based on the trend in keyword ranking for the tracked website.  &#x60;percentage_clicks&#x60;: Sorts the data based on the percentage of clicks that end up on organic results after discounting the impact of the top 10 SERP features present on the keyword. | [optional]
 **order_direction** | **string**| This parameter determines the sorting direction of the &#x60;order_by&#x60; field. You can sort the data in either ascending (&#x60;asc&#x60;) or descending (&#x60;desc&#x60;) order.  If you do not specify an &#x60;order_direction&#x60;, the default is &#x60;asc&#x60;. | [optional]
 **gap_analysis** | **string**| The type of keywords you want to return data for. Allowed values are &#x60;overlapping&#x60;, &#x60;non-overlapping&#x60;, or &#x60;all-keywords&#x60;.   If the &#x60;keyword_gap_type&#x60; is not specified, data for &#x60;all-keywords&#x60; is returned. | [optional]
 **search** | **string**| The &#x60;search&#x60; parameter allows you to filter the results based on a keyword name search. The API will return only those records where the keyword matches (fully or partially) the provided search term.  The search parameter is case-insensitive, allowing partial matches irrespective of casing. | [optional]

### Return type

[**\Swagger\Client\Model\DomainRankingsData**](../Model/DomainRankingsData.md)

### Authorization

[AuthorizationToken](../../README.md#AuthorizationToken)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **researchV30KeywordsGet**
> \Swagger\Client\Model\ResearchKeywords[] researchV30KeywordsGet($campaign_id, $keywords, $limit, $offset, $order_by, $order_direction)

Get Keyword Data

This endpoint returns the SERP, search and your ranking data for the keywords specified in the request.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: AuthorizationToken
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\KeywordResearchApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$campaign_id = 56; // int | This parameter specifies the ID of the campaign for which you want to return data.   Please refer to the Quick Start Guide to learn how to retrieve the IDs of your campaigns.
$keywords = "keywords_example"; // string | Comma-separated list of keyword phrases that you want to return data for.
$limit = 56; // int | This parameter determines the maximum number of records to return in a single request.   Maximum Value: 1000 records per request  If you do not specify a `limit`, the default number of records returned per request will be 100.
$offset = 56; // int | This parameter specifies the starting point within the collection of resource results. It's typically used with the `limit` parameter to implement pagination.  If you do not specify an `offset`, the API will start from the first record.
$order_by = "order_by_example"; // string | This parameter enables you to sort the returned data based on a specified field.  The field names you can use to sort data are:  `search_volume`  `year-over-year`  `rank`  `rank_trend`  `percentage_clicks`
$order_direction = "order_direction_example"; // string | This parameter determines the sorting direction of the `order_by` field. You can sort the data in either ascending (`asc`) or descending (`desc`) order.  If you do not specify an `order_direction`, the default is `asc`.

try {
    $result = $apiInstance->researchV30KeywordsGet($campaign_id, $keywords, $limit, $offset, $order_by, $order_direction);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling KeywordResearchApi->researchV30KeywordsGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **campaign_id** | **int**| This parameter specifies the ID of the campaign for which you want to return data.   Please refer to the Quick Start Guide to learn how to retrieve the IDs of your campaigns. |
 **keywords** | **string**| Comma-separated list of keyword phrases that you want to return data for. |
 **limit** | **int**| This parameter determines the maximum number of records to return in a single request.   Maximum Value: 1000 records per request  If you do not specify a &#x60;limit&#x60;, the default number of records returned per request will be 100. | [optional]
 **offset** | **int**| This parameter specifies the starting point within the collection of resource results. It&#x27;s typically used with the &#x60;limit&#x60; parameter to implement pagination.  If you do not specify an &#x60;offset&#x60;, the API will start from the first record. | [optional]
 **order_by** | **string**| This parameter enables you to sort the returned data based on a specified field.  The field names you can use to sort data are:  &#x60;search_volume&#x60;  &#x60;year-over-year&#x60;  &#x60;rank&#x60;  &#x60;rank_trend&#x60;  &#x60;percentage_clicks&#x60; | [optional]
 **order_direction** | **string**| This parameter determines the sorting direction of the &#x60;order_by&#x60; field. You can sort the data in either ascending (&#x60;asc&#x60;) or descending (&#x60;desc&#x60;) order.  If you do not specify an &#x60;order_direction&#x60;, the default is &#x60;asc&#x60;. | [optional]

### Return type

[**\Swagger\Client\Model\ResearchKeywords[]**](../Model/ResearchKeywords.md)

### Authorization

[AuthorizationToken](../../README.md#AuthorizationToken)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **researchV30RankingDataGet**
> \Swagger\Client\Model\KeywordResearchRankingData[] researchV30RankingDataGet($campaign_id, $keywords, $domains, $limit, $offset, $order_by, $order_direction)

Get Ranking Data

This endpoint returns the SERP, search, and ranking data for the keywords specified in the request, for both your campaign website and the specified domains or URLs.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: AuthorizationToken
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\KeywordResearchApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$campaign_id = 56; // int | This parameter specifies the ID of the campaign for which you want to return data.   Please refer to the Quick Start Guide to learn how to retrieve the IDs of your campaigns.
$keywords = array("keywords_example"); // string[] | A comma-separated list of keyword phrases that you want to return data for.
$domains = "domains_example"; // string | A comma-separated list of domains for which you want to return the ranking data. The maximum number of domains allowed is 10.
$limit = 56; // int | This parameter determines the maximum number of records to return in a single request.   Maximum Value: 1000 records per request   If you do not specify a `limit`, the default number of records returned per request will be 100.
$offset = 56; // int | This parameter specifies the starting point within the collection of resource results. It's typically used with the `limit` parameter to implement pagination.  If you do not specify an `offset`, the API will start from the first record.
$order_by = "order_by_example"; // string | This parameter enables you to sort the returned data based on a specified field.  The field names you can use to sort data are:  `rank`  `rank_trend`  If you do not specify an `order_by`parameter, the API will sort the data by `rank` by default.
$order_direction = "order_direction_example"; // string | This parameter determines the sorting direction of the `order_by` field. You can sort the data in either ascending (`asc`) or descending (`desc`) order.  If you do not specify an `order_direction`, the default is `asc`.

try {
    $result = $apiInstance->researchV30RankingDataGet($campaign_id, $keywords, $domains, $limit, $offset, $order_by, $order_direction);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling KeywordResearchApi->researchV30RankingDataGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **campaign_id** | **int**| This parameter specifies the ID of the campaign for which you want to return data.   Please refer to the Quick Start Guide to learn how to retrieve the IDs of your campaigns. |
 **keywords** | [**string[]**](../Model/string.md)| A comma-separated list of keyword phrases that you want to return data for. |
 **domains** | **string**| A comma-separated list of domains for which you want to return the ranking data. The maximum number of domains allowed is 10. |
 **limit** | **int**| This parameter determines the maximum number of records to return in a single request.   Maximum Value: 1000 records per request   If you do not specify a &#x60;limit&#x60;, the default number of records returned per request will be 100. | [optional]
 **offset** | **int**| This parameter specifies the starting point within the collection of resource results. It&#x27;s typically used with the &#x60;limit&#x60; parameter to implement pagination.  If you do not specify an &#x60;offset&#x60;, the API will start from the first record. | [optional]
 **order_by** | **string**| This parameter enables you to sort the returned data based on a specified field.  The field names you can use to sort data are:  &#x60;rank&#x60;  &#x60;rank_trend&#x60;  If you do not specify an &#x60;order_by&#x60;parameter, the API will sort the data by &#x60;rank&#x60; by default. | [optional]
 **order_direction** | **string**| This parameter determines the sorting direction of the &#x60;order_by&#x60; field. You can sort the data in either ascending (&#x60;asc&#x60;) or descending (&#x60;desc&#x60;) order.  If you do not specify an &#x60;order_direction&#x60;, the default is &#x60;asc&#x60;. | [optional]

### Return type

[**\Swagger\Client\Model\KeywordResearchRankingData[]**](../Model/KeywordResearchRankingData.md)

### Authorization

[AuthorizationToken](../../README.md#AuthorizationToken)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **researchV30RelatedKeywordsGet**
> \Swagger\Client\Model\TopicKeywordDetail[] researchV30RelatedKeywordsGet($campaign_id, $keyword, $limit, $offset, $order_by, $order_direction, $search)

Get Related Keywords

This endpoint returns the SERP, search, and your ranking data of the related keywords for a specified keyword (topic).

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: AuthorizationToken
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\KeywordResearchApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$campaign_id = 56; // int | This parameter specifies the ID of the campaign for which you want to return data.   Please refer to the Quick Start Guide to learn how to retrieve the IDs of your campaigns.
$keyword = "keyword_example"; // string | The topic for which you want to return related keywords' data.
$limit = 56; // int | This parameter determines the maximum number of records to return in a single request.   Maximum Value: 1000 records per request  If you do not specify a `limit`, the default number of records returned per request will be 100.
$offset = 56; // int | This parameter specifies the starting point within the collection of resource results. It's typically used with the `limit` parameter to implement pagination.  If you do not specify an `offset`, the API will start from the first record.
$order_by = "order_by_example"; // string | This parameter enables you to sort the returned data based on a specified field.  The field names you can use to sort data are:  `connection_strength`  `search_volume`  `year-over-year`  `rank`  `rank_trend`  `percentage_clicks`  If not otherwise specified, the returned data will be sorted by `connection_strength` by default.
$order_direction = "order_direction_example"; // string | This parameter determines the sorting direction of the `order_by` field. You can sort the data in either ascending (`asc`) or descending (`desc`) order.  If you do not specify an `order_direction`, the default is `asc`.
$search = "search_example"; // string | The `search` parameter allows you to filter the results based on a keyword search. The API will return only those records where the keyword matches (fully or partially) the provided search term. The search parameter is case-insensitive, allowing partial matches irrespective of casing.

try {
    $result = $apiInstance->researchV30RelatedKeywordsGet($campaign_id, $keyword, $limit, $offset, $order_by, $order_direction, $search);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling KeywordResearchApi->researchV30RelatedKeywordsGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **campaign_id** | **int**| This parameter specifies the ID of the campaign for which you want to return data.   Please refer to the Quick Start Guide to learn how to retrieve the IDs of your campaigns. |
 **keyword** | **string**| The topic for which you want to return related keywords&#x27; data. |
 **limit** | **int**| This parameter determines the maximum number of records to return in a single request.   Maximum Value: 1000 records per request  If you do not specify a &#x60;limit&#x60;, the default number of records returned per request will be 100. | [optional]
 **offset** | **int**| This parameter specifies the starting point within the collection of resource results. It&#x27;s typically used with the &#x60;limit&#x60; parameter to implement pagination.  If you do not specify an &#x60;offset&#x60;, the API will start from the first record. | [optional]
 **order_by** | **string**| This parameter enables you to sort the returned data based on a specified field.  The field names you can use to sort data are:  &#x60;connection_strength&#x60;  &#x60;search_volume&#x60;  &#x60;year-over-year&#x60;  &#x60;rank&#x60;  &#x60;rank_trend&#x60;  &#x60;percentage_clicks&#x60;  If not otherwise specified, the returned data will be sorted by &#x60;connection_strength&#x60; by default. | [optional]
 **order_direction** | **string**| This parameter determines the sorting direction of the &#x60;order_by&#x60; field. You can sort the data in either ascending (&#x60;asc&#x60;) or descending (&#x60;desc&#x60;) order.  If you do not specify an &#x60;order_direction&#x60;, the default is &#x60;asc&#x60;. | [optional]
 **search** | **string**| The &#x60;search&#x60; parameter allows you to filter the results based on a keyword search. The API will return only those records where the keyword matches (fully or partially) the provided search term. The search parameter is case-insensitive, allowing partial matches irrespective of casing. | [optional]

### Return type

[**\Swagger\Client\Model\TopicKeywordDetail[]**](../Model/TopicKeywordDetail.md)

### Authorization

[AuthorizationToken](../../README.md#AuthorizationToken)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **researchV30TopicOverviewGet**
> \Swagger\Client\Model\TopicsOverview researchV30TopicOverviewGet($campaign_id, $keyword)

Get Topic Overview

This endpoint returns the overall aggregated search, SERP, and your website's Visibility data for all the related keywords of a specified keyword (topic).

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: AuthorizationToken
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\KeywordResearchApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$campaign_id = 56; // int | This parameter specifies the ID of the campaign for which you want to return data.   Please refer to the Quick Start Guide to learn how to retrieve the IDs of your campaigns.
$keyword = "keyword_example"; // string | The topic for which you want to return related keywords' data.

try {
    $result = $apiInstance->researchV30TopicOverviewGet($campaign_id, $keyword);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling KeywordResearchApi->researchV30TopicOverviewGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **campaign_id** | **int**| This parameter specifies the ID of the campaign for which you want to return data.   Please refer to the Quick Start Guide to learn how to retrieve the IDs of your campaigns. |
 **keyword** | **string**| The topic for which you want to return related keywords&#x27; data. |

### Return type

[**\Swagger\Client\Model\TopicsOverview**](../Model/TopicsOverview.md)

### Authorization

[AuthorizationToken](../../README.md#AuthorizationToken)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

