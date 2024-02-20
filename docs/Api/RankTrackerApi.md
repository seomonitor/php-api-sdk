# Swagger\Client\RankTrackerApi

All URIs are relative to *https://apigw.seomonitor.com/v3/*

Method | HTTP request | Description
------------- | ------------- | -------------
[**rankTrackerV30DailyShareOfClicksGet**](RankTrackerApi.md#ranktrackerv30dailyshareofclicksget) | **GET** /rank-tracker/v3.0/daily-share-of-clicks | Get Daily Share of Clicks
[**rankTrackerV30GroupsDailyVisibilityGet**](RankTrackerApi.md#ranktrackerv30groupsdailyvisibilityget) | **GET** /rank-tracker/v3.0/groups/daily-visibility | Get Daily Group Visibility
[**rankTrackerV30GroupsDataGet**](RankTrackerApi.md#ranktrackerv30groupsdataget) | **GET** /rank-tracker/v3.0/groups/data | Get Groups Data
[**rankTrackerV30GroupsGet**](RankTrackerApi.md#ranktrackerv30groupsget) | **GET** /rank-tracker/v3.0/groups | Get Groups List
[**rankTrackerV30KeywordsCompetitionGet**](RankTrackerApi.md#ranktrackerv30keywordscompetitionget) | **GET** /rank-tracker/v3.0/keywords/competition | Get Keywords Competition Data
[**rankTrackerV30KeywordsDailyRanksGet**](RankTrackerApi.md#ranktrackerv30keywordsdailyranksget) | **GET** /rank-tracker/v3.0/keywords/daily-ranks | Get Daily Keyword Ranks
[**rankTrackerV30KeywordsGet**](RankTrackerApi.md#ranktrackerv30keywordsget) | **GET** /rank-tracker/v3.0/keywords | Get Keyword Data
[**rankTrackerV30KeywordsImportPost**](RankTrackerApi.md#ranktrackerv30keywordsimportpost) | **POST** /rank-tracker/v3.0/keywords/import | Add New Keywords
[**rankTrackerV30KeywordsImportStatusGet**](RankTrackerApi.md#ranktrackerv30keywordsimportstatusget) | **GET** /rank-tracker/v3.0/keywords/import-status | Get Keywords Import Status
[**rankTrackerV30KeywordsRankingPagesGet**](RankTrackerApi.md#ranktrackerv30keywordsrankingpagesget) | **GET** /rank-tracker/v3.0/keywords/ranking-pages | Get Ranking Pages
[**rankTrackerV30KeywordsSerpFeaturePresenceGet**](RankTrackerApi.md#ranktrackerv30keywordsserpfeaturepresenceget) | **GET** /rank-tracker/v3.0/keywords/serp-feature-presence | Get Daily SERP Feature Presence
[**rankTrackerV30KeywordsTopResultsGet**](RankTrackerApi.md#ranktrackerv30keywordstopresultsget) | **GET** /rank-tracker/v3.0/keywords/top-results | Get Top 100 Results

# **rankTrackerV30DailyShareOfClicksGet**
> \Swagger\Client\Model\DailyShareOfClicks rankTrackerV30DailyShareOfClicksGet($campaign_id, $start_date, $end_date, $group_id, $keyword_ids)

Get Daily Share of Clicks

Retrieves the daily share of clicks of your domain and the top ten ones by visibility, on a specific keyword list, for the selected timeframe.   You can use this endpoint in two ways:  to retrieve the Share of Clicks data of an existing keyword group created in the SEOmonitor campaign, by specifying the `group_id` in the request.  to retrieve the Share of Clicks data of a list of requested keywords, by specifying the list of `keyword_ids` in the request.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: AuthorizationToken
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\RankTrackerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$campaign_id = 56; // int | This parameter specifies the ID of the campaign for which you want to return data.    Please refer to the Quick Start Guide to learn how to retrieve the IDs of your campaigns.
$start_date = new \DateTime("2013-10-20"); // \DateTime | This parameter specifies the start date of the timeframe for which you want to return the data, in YYYY-MM-DD format.
$end_date = new \DateTime("2013-10-20"); // \DateTime | This parameter specifies the end date of the timeframe for which you want to return the data in YYYY-MM-DD format.
$group_id = 56; // int | The ID for the group of keywords for which the data must be returned.   Please refer to the Quick Start Guide to learn how to retrieve the IDs of your groups.  If you do not specify a `group_id`, the default value is the `All Keywords` group, which means data will be returned for all active keywords in the campaign.
$keyword_ids = "keyword_ids_example"; // string | This parameter allows you to specify the IDs of the keywords for which you want to return Visibility data. `keyword_ids` should be a comma-separated list of keyword IDs.   Please refer to the Quick Start Guide to learn how to retrieve the IDs of your keywords.  If you do not specify `keyword_ids`, the API will return data for all keywords that meet the other specified criteria (e.g. `group_id`).

try {
    $result = $apiInstance->rankTrackerV30DailyShareOfClicksGet($campaign_id, $start_date, $end_date, $group_id, $keyword_ids);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RankTrackerApi->rankTrackerV30DailyShareOfClicksGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **campaign_id** | **int**| This parameter specifies the ID of the campaign for which you want to return data.    Please refer to the Quick Start Guide to learn how to retrieve the IDs of your campaigns. |
 **start_date** | **\DateTime**| This parameter specifies the start date of the timeframe for which you want to return the data, in YYYY-MM-DD format. | [optional]
 **end_date** | **\DateTime**| This parameter specifies the end date of the timeframe for which you want to return the data in YYYY-MM-DD format. | [optional]
 **group_id** | **int**| The ID for the group of keywords for which the data must be returned.   Please refer to the Quick Start Guide to learn how to retrieve the IDs of your groups.  If you do not specify a &#x60;group_id&#x60;, the default value is the &#x60;All Keywords&#x60; group, which means data will be returned for all active keywords in the campaign. | [optional]
 **keyword_ids** | **string**| This parameter allows you to specify the IDs of the keywords for which you want to return Visibility data. &#x60;keyword_ids&#x60; should be a comma-separated list of keyword IDs.   Please refer to the Quick Start Guide to learn how to retrieve the IDs of your keywords.  If you do not specify &#x60;keyword_ids&#x60;, the API will return data for all keywords that meet the other specified criteria (e.g. &#x60;group_id&#x60;). | [optional]

### Return type

[**\Swagger\Client\Model\DailyShareOfClicks**](../Model/DailyShareOfClicks.md)

### Authorization

[AuthorizationToken](../../README.md#AuthorizationToken)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **rankTrackerV30GroupsDailyVisibilityGet**
> \Swagger\Client\Model\GroupDailyVisibility rankTrackerV30GroupsDailyVisibilityGet($campaign_id, $start_date, $end_date, $group_id, $keyword_ids, $domain, $feature_visibility)

Get Daily Group Visibility

Retrieves the daily Visibility and average weighted ranks of your website or of any other domain, for a group of keywords, over a specified timeframe.  You can use this endpoint in two ways:   to retrieve the Visibility data of an existing keyword group created in the SEOmonitor campaign, by specifying the `group_id` in the request.  to retrieve the Visibility data of a list of requested keywords, by specifying the list of `keyword_ids` in the request.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: AuthorizationToken
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\RankTrackerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$campaign_id = 56; // int | This parameter specifies the ID of the campaign for which you want to return data.   Please refer to the Quick Start Guide to learn how to retrieve the IDs of your campaigns.
$start_date = new \DateTime("2013-10-20"); // \DateTime | This parameter specifies the start date of the timeframe for which you want to return the data, in YYYY-MM-DD format.
$end_date = new \DateTime("2013-10-20"); // \DateTime | This parameter specifies the end date of the timeframe for which you want to return the data in YYYY-MM-DD format.
$group_id = 56; // int | The ID for the group of keywords for which the data must be returned.  Please refer to the Quick Start Guide to learn how to retrieve the IDs of your groups.  If you do not specify a `group_id`, the default value is the `All Keywords` group, which means data will be returned for all active keywords in the campaign.
$keyword_ids = "keyword_ids_example"; // string | This parameter allows you to specify the IDs of the keywords for which you want to return Visibility data. `keyword_ids` should be a comma-separated list of keyword IDs.  Please refer to the Quick Start Guide to learn how to retrieve the IDs of your keywords.   If you do not specify `keyword_ids`, the API will return data for all keywords that meet the other specified criteria (e.g. `group_id`).
$domain = "domain_example"; // string | The domain name for which the Visibility will be returned.   If no domain is provided, the endpoint will return the data for the campaign's website.
$feature_visibility = "feature_visibility_example"; // string | This parameter enables you to also retrieve the Visibility for one of the following SERP features: product_listing  `images_pack`  `questions`  `ads_pack`  `knowledge_graph`  `top_stories`  `local_pack`  `featured_snippet`  `recipes`  `news`  If no `feature_visibility` is specified, the endpoint will return an empty array.

try {
    $result = $apiInstance->rankTrackerV30GroupsDailyVisibilityGet($campaign_id, $start_date, $end_date, $group_id, $keyword_ids, $domain, $feature_visibility);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RankTrackerApi->rankTrackerV30GroupsDailyVisibilityGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **campaign_id** | **int**| This parameter specifies the ID of the campaign for which you want to return data.   Please refer to the Quick Start Guide to learn how to retrieve the IDs of your campaigns. |
 **start_date** | **\DateTime**| This parameter specifies the start date of the timeframe for which you want to return the data, in YYYY-MM-DD format. |
 **end_date** | **\DateTime**| This parameter specifies the end date of the timeframe for which you want to return the data in YYYY-MM-DD format. |
 **group_id** | **int**| The ID for the group of keywords for which the data must be returned.  Please refer to the Quick Start Guide to learn how to retrieve the IDs of your groups.  If you do not specify a &#x60;group_id&#x60;, the default value is the &#x60;All Keywords&#x60; group, which means data will be returned for all active keywords in the campaign. | [optional]
 **keyword_ids** | **string**| This parameter allows you to specify the IDs of the keywords for which you want to return Visibility data. &#x60;keyword_ids&#x60; should be a comma-separated list of keyword IDs.  Please refer to the Quick Start Guide to learn how to retrieve the IDs of your keywords.   If you do not specify &#x60;keyword_ids&#x60;, the API will return data for all keywords that meet the other specified criteria (e.g. &#x60;group_id&#x60;). | [optional]
 **domain** | **string**| The domain name for which the Visibility will be returned.   If no domain is provided, the endpoint will return the data for the campaign&#x27;s website. | [optional]
 **feature_visibility** | **string**| This parameter enables you to also retrieve the Visibility for one of the following SERP features: product_listing  &#x60;images_pack&#x60;  &#x60;questions&#x60;  &#x60;ads_pack&#x60;  &#x60;knowledge_graph&#x60;  &#x60;top_stories&#x60;  &#x60;local_pack&#x60;  &#x60;featured_snippet&#x60;  &#x60;recipes&#x60;  &#x60;news&#x60;  If no &#x60;feature_visibility&#x60; is specified, the endpoint will return an empty array. | [optional]

### Return type

[**\Swagger\Client\Model\GroupDailyVisibility**](../Model/GroupDailyVisibility.md)

### Authorization

[AuthorizationToken](../../README.md#AuthorizationToken)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **rankTrackerV30GroupsDataGet**
> \Swagger\Client\Model\GroupDetails[] rankTrackerV30GroupsDataGet($campaign_id, $start_date, $end_date, $group_ids, $limit, $offset)

Get Groups Data

With this endpoint, you can retrieve overall aggregated search and SERP data along with Visibility metrics and trends for all the keywords of the groups specified through group IDs.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: AuthorizationToken
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\RankTrackerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$campaign_id = 56; // int | This parameter specifies the ID of the campaign for which you want to return data.   Please refer to the Quick Start Guide to learn how to retrieve the IDs of your campaigns.
$start_date = new \DateTime("2013-10-20"); // \DateTime | The start date of the timeframe for which you want to return the data in YYYY-MM-DD format.
$end_date = new \DateTime("2013-10-20"); // \DateTime | The end date of the timeframe for which you want to return the data in YYYY-MM-DD format.
$group_ids = "group_ids_example"; // string | The ID(s) of the group(s) for which you want to return data.  Please refer to the Quick Start Guide to learn how to retrieve the IDs of your groups.  If you do not specify a `group_id`, the default value is `All Keywords` group, which means data will be returned for all keywords in the campaign.
$limit = 56; // int | This parameter determines the maximum number of records to return in a single request.   Maximum Value: 1000 records per request  If you do not specify a `limit`, the default number of records returned per request will be 100.
$offset = 56; // int | This parameter specifies the starting point within the collection of resource results. It's typically used with the `limit` parameter to implement pagination.  If you do not specify an `offset`, the API will start from the first record.

try {
    $result = $apiInstance->rankTrackerV30GroupsDataGet($campaign_id, $start_date, $end_date, $group_ids, $limit, $offset);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RankTrackerApi->rankTrackerV30GroupsDataGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **campaign_id** | **int**| This parameter specifies the ID of the campaign for which you want to return data.   Please refer to the Quick Start Guide to learn how to retrieve the IDs of your campaigns. |
 **start_date** | **\DateTime**| The start date of the timeframe for which you want to return the data in YYYY-MM-DD format. |
 **end_date** | **\DateTime**| The end date of the timeframe for which you want to return the data in YYYY-MM-DD format. |
 **group_ids** | **string**| The ID(s) of the group(s) for which you want to return data.  Please refer to the Quick Start Guide to learn how to retrieve the IDs of your groups.  If you do not specify a &#x60;group_id&#x60;, the default value is &#x60;All Keywords&#x60; group, which means data will be returned for all keywords in the campaign. | [optional]
 **limit** | **int**| This parameter determines the maximum number of records to return in a single request.   Maximum Value: 1000 records per request  If you do not specify a &#x60;limit&#x60;, the default number of records returned per request will be 100. | [optional]
 **offset** | **int**| This parameter specifies the starting point within the collection of resource results. It&#x27;s typically used with the &#x60;limit&#x60; parameter to implement pagination.  If you do not specify an &#x60;offset&#x60;, the API will start from the first record. | [optional]

### Return type

[**\Swagger\Client\Model\GroupDetails[]**](../Model/GroupDetails.md)

### Authorization

[AuthorizationToken](../../README.md#AuthorizationToken)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **rankTrackerV30GroupsGet**
> \Swagger\Client\Model\Group[] rankTrackerV30GroupsGet($campaign_id)

Get Groups List

This endpoint allows you to retrieve all keyword groups including their structure within folders, for a particular campaign ID. It provides the hierarchical data in a nested JSON structure, with the top-level groups (folders) for the campaign ID at the root level, and any groups nested under them. The response contains details on each group, including its unique ID, name, and type (folder, group, or smart group).

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: AuthorizationToken
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\RankTrackerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$campaign_id = 56; // int | The campaign ID for which the group structure will be returned.  Please refer to the Quick Start Guide to learn how to retrieve the IDs of your campaigns.

try {
    $result = $apiInstance->rankTrackerV30GroupsGet($campaign_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RankTrackerApi->rankTrackerV30GroupsGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **campaign_id** | **int**| The campaign ID for which the group structure will be returned.  Please refer to the Quick Start Guide to learn how to retrieve the IDs of your campaigns. |

### Return type

[**\Swagger\Client\Model\Group[]**](../Model/Group.md)

### Authorization

[AuthorizationToken](../../README.md#AuthorizationToken)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **rankTrackerV30KeywordsCompetitionGet**
> \Swagger\Client\Model\KeywordCompetition rankTrackerV30KeywordsCompetitionGet($campaign_id, $start_date, $end_date, $device, $search, $keyword_ids, $group_id, $competitors, $limit, $offset, $order_by, $order_direction)

Get Keywords Competition Data

This endpoint returns the specified competitors' ranking data for a campaign.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: AuthorizationToken
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\RankTrackerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$campaign_id = 56; // int | The ID of the campaign for which keyword competitor ranking data must be returned.   Please refer to the Quick Start Guide to learn how to retrieve the IDs of your campaigns.
$start_date = new \DateTime("2013-10-20"); // \DateTime | The start date of the date range to get ranking data for, in YYYY-MM-DD format. This is the earliest date of rankings to include.
$end_date = new \DateTime("2013-10-20"); // \DateTime | The end date of the date range to get ranking data for, in YYYY-MM-DD format. This is the most recent date of rankings to include.
$device = "device_example"; // string | The device type to get ranking data for–either `desktop` or `mobile`.  The default selection is `desktop`.
$search = "search_example"; // string | Allows you to filter the results based on a keyword search. The API will return only those records where the keyword matches (fully or partially) the provided search term.
$keyword_ids = "keyword_ids_example"; // string | The IDs of the keywords for which you want to get competitor ranking data. `keyword_ids` should be a comma-separated list of keyword IDs.   Please refer to the Quick Start Guide to learn how to retrieve the IDs of your keywords.  If you do not specify `keyword_ids`, the API will return data for all keywords in the campaign that meet the other specified criteria (e.g. `group_id`).
$group_id = 56; // int | The ID of a specific group in the campaign to get competitor ranking data for. If not specified, returns data for all of the keywords in the campaign.  Please refer to the Quick Start Guide to learn how to retrieve the IDs of your groups.  If you do not specify a `group_id`, the default value is the `All Keywords` group, which means data will be returned for all active keywords in the campaign.
$competitors = "competitors_example"; // string | An optional list of competitor domain names to filter the results by. The ranking data returned will only include the specified competitors. This parameter should be an array of strings containing one or more competitor domains, formatted as follows: `[\"examplecompetitor1.com\", \"examplecompetitor2.net\"]`   If you do not specify the competitors, the endpoint will return data for the competitors configured in the interface for the specified keyword group.
$limit = 56; // int | Determines the maximum number of records to return in a single request. Maximum Value: 1000 records per request  If you do not specify a `limit`, the default number of records returned per request will be 100.
$offset = 56; // int | The starting index within the results to begin returning data. Typically used with the `limit` parameter to implement pagination.  If you do not specify an `offset`, the API will start from the first record.
$order_by = "order_by_example"; // string | This parameter enables you to sort the returned data based on the parameter specified. Allowed values:  `keyword`  `rank`  `rank_trend`: Sorts the data based on the trend in keyword ranking.   If you do not specify the `order_by` parameter, the data will be sorted by default by the keyword name (`keyword`).
$order_direction = "order_direction_example"; // string | Determines the sorting direction of the `order_by` field. You can sort the data in either ascending (`asc`) or descending (`desc`) order.  Note: The `order_direction` parameter works in conjunction with the `order_by` parameter. Use it to specify the direction of the sort after choosing the field to order by.  If you do not specify an `order_direction`, the default is `asc`.

try {
    $result = $apiInstance->rankTrackerV30KeywordsCompetitionGet($campaign_id, $start_date, $end_date, $device, $search, $keyword_ids, $group_id, $competitors, $limit, $offset, $order_by, $order_direction);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RankTrackerApi->rankTrackerV30KeywordsCompetitionGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **campaign_id** | **int**| The ID of the campaign for which keyword competitor ranking data must be returned.   Please refer to the Quick Start Guide to learn how to retrieve the IDs of your campaigns. |
 **start_date** | **\DateTime**| The start date of the date range to get ranking data for, in YYYY-MM-DD format. This is the earliest date of rankings to include. |
 **end_date** | **\DateTime**| The end date of the date range to get ranking data for, in YYYY-MM-DD format. This is the most recent date of rankings to include. |
 **device** | **string**| The device type to get ranking data for–either &#x60;desktop&#x60; or &#x60;mobile&#x60;.  The default selection is &#x60;desktop&#x60;. |
 **search** | **string**| Allows you to filter the results based on a keyword search. The API will return only those records where the keyword matches (fully or partially) the provided search term. | [optional]
 **keyword_ids** | **string**| The IDs of the keywords for which you want to get competitor ranking data. &#x60;keyword_ids&#x60; should be a comma-separated list of keyword IDs.   Please refer to the Quick Start Guide to learn how to retrieve the IDs of your keywords.  If you do not specify &#x60;keyword_ids&#x60;, the API will return data for all keywords in the campaign that meet the other specified criteria (e.g. &#x60;group_id&#x60;). | [optional]
 **group_id** | **int**| The ID of a specific group in the campaign to get competitor ranking data for. If not specified, returns data for all of the keywords in the campaign.  Please refer to the Quick Start Guide to learn how to retrieve the IDs of your groups.  If you do not specify a &#x60;group_id&#x60;, the default value is the &#x60;All Keywords&#x60; group, which means data will be returned for all active keywords in the campaign. | [optional]
 **competitors** | **string**| An optional list of competitor domain names to filter the results by. The ranking data returned will only include the specified competitors. This parameter should be an array of strings containing one or more competitor domains, formatted as follows: &#x60;[\&quot;examplecompetitor1.com\&quot;, \&quot;examplecompetitor2.net\&quot;]&#x60;   If you do not specify the competitors, the endpoint will return data for the competitors configured in the interface for the specified keyword group. | [optional]
 **limit** | **int**| Determines the maximum number of records to return in a single request. Maximum Value: 1000 records per request  If you do not specify a &#x60;limit&#x60;, the default number of records returned per request will be 100. | [optional]
 **offset** | **int**| The starting index within the results to begin returning data. Typically used with the &#x60;limit&#x60; parameter to implement pagination.  If you do not specify an &#x60;offset&#x60;, the API will start from the first record. | [optional]
 **order_by** | **string**| This parameter enables you to sort the returned data based on the parameter specified. Allowed values:  &#x60;keyword&#x60;  &#x60;rank&#x60;  &#x60;rank_trend&#x60;: Sorts the data based on the trend in keyword ranking.   If you do not specify the &#x60;order_by&#x60; parameter, the data will be sorted by default by the keyword name (&#x60;keyword&#x60;). | [optional]
 **order_direction** | **string**| Determines the sorting direction of the &#x60;order_by&#x60; field. You can sort the data in either ascending (&#x60;asc&#x60;) or descending (&#x60;desc&#x60;) order.  Note: The &#x60;order_direction&#x60; parameter works in conjunction with the &#x60;order_by&#x60; parameter. Use it to specify the direction of the sort after choosing the field to order by.  If you do not specify an &#x60;order_direction&#x60;, the default is &#x60;asc&#x60;. | [optional]

### Return type

[**\Swagger\Client\Model\KeywordCompetition**](../Model/KeywordCompetition.md)

### Authorization

[AuthorizationToken](../../README.md#AuthorizationToken)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **rankTrackerV30KeywordsDailyRanksGet**
> \Swagger\Client\Model\KeywordDailyRanks rankTrackerV30KeywordsDailyRanksGet($campaign_id, $start_date, $end_date, $search, $domain, $group_id, $keyword_ids, $get_archive, $limit, $offset)

Get Daily Keyword Ranks

This endpoint returns the daily desktop and mobile ranks for your website or any other domain in a specified timeframe for actively tracked or archived keywords.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: AuthorizationToken
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\RankTrackerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$campaign_id = 56; // int | This parameter specifies the ID of the campaign for which you want to return data.   Please refer to the Quick Start Guide to learn how to retrieve the IDs of your campaigns.
$start_date = new \DateTime("2013-10-20"); // \DateTime | The start date of the timeframe for which you want to return the data, in YYYY-MM-DD format.
$end_date = new \DateTime("2013-10-20"); // \DateTime | The end date of the timeframe for which you want to return the data, in YYYY-MM-DD format.
$search = "search_example"; // string | The `search` parameter allows you to filter the results based on a keyword search. The API will return only those records where the keyword matches (fully or partially) the provided search term.  The search parameter is case-insensitive, allowing partial matches irrespective of casing.
$domain = "domain_example"; // string | The domain name for which the ranks will be returned.   If no `domain` is provided, the endpoint will return the data for the campaign's website.
$group_id = "group_id_example"; // string | The IDs of specific groups in the campaign to get keyword data for.   Please refer to the Quick Start Guide to learn how to retrieve the IDs of your groups.   If you do not specify a `group_id`, the default value is the `All Keywords` group, which means data will be returned for all active keywords in the campaign.
$keyword_ids = "keyword_ids_example"; // string | The IDs of the keywords for which you want to return data. keyword_idsshould be a comma-separated list of keyword IDs.   Please refer to the Quick Start Guide to learn how to retrieve the IDs of your keywords.   If you do not specify `keyword_ids`, the API will return data for all keywords that meet the other specified criteria (e.g. `group_id`).
$get_archive = true; // bool | If true, it returns data only for the archived (deleted) keywords that had been active during the requested timeframe.  The default value is `false` and will return the data only for actively tracked keywords.
$limit = 56; // int | Determines the maximum number of records to return in a single request.   Maximum Value: 1000 records per request  If you do not specify a `limit`, the default number of records returned per request will be 100.
$offset = 56; // int | The starting point within the collection of resource results. It's typically used with the `limit` parameter to implement pagination.  If you do not specify an `offset`, the API will start from the first record.

try {
    $result = $apiInstance->rankTrackerV30KeywordsDailyRanksGet($campaign_id, $start_date, $end_date, $search, $domain, $group_id, $keyword_ids, $get_archive, $limit, $offset);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RankTrackerApi->rankTrackerV30KeywordsDailyRanksGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **campaign_id** | **int**| This parameter specifies the ID of the campaign for which you want to return data.   Please refer to the Quick Start Guide to learn how to retrieve the IDs of your campaigns. |
 **start_date** | **\DateTime**| The start date of the timeframe for which you want to return the data, in YYYY-MM-DD format. |
 **end_date** | **\DateTime**| The end date of the timeframe for which you want to return the data, in YYYY-MM-DD format. |
 **search** | **string**| The &#x60;search&#x60; parameter allows you to filter the results based on a keyword search. The API will return only those records where the keyword matches (fully or partially) the provided search term.  The search parameter is case-insensitive, allowing partial matches irrespective of casing. | [optional]
 **domain** | **string**| The domain name for which the ranks will be returned.   If no &#x60;domain&#x60; is provided, the endpoint will return the data for the campaign&#x27;s website. | [optional]
 **group_id** | **string**| The IDs of specific groups in the campaign to get keyword data for.   Please refer to the Quick Start Guide to learn how to retrieve the IDs of your groups.   If you do not specify a &#x60;group_id&#x60;, the default value is the &#x60;All Keywords&#x60; group, which means data will be returned for all active keywords in the campaign. | [optional]
 **keyword_ids** | **string**| The IDs of the keywords for which you want to return data. keyword_idsshould be a comma-separated list of keyword IDs.   Please refer to the Quick Start Guide to learn how to retrieve the IDs of your keywords.   If you do not specify &#x60;keyword_ids&#x60;, the API will return data for all keywords that meet the other specified criteria (e.g. &#x60;group_id&#x60;). | [optional]
 **get_archive** | **bool**| If true, it returns data only for the archived (deleted) keywords that had been active during the requested timeframe.  The default value is &#x60;false&#x60; and will return the data only for actively tracked keywords. | [optional]
 **limit** | **int**| Determines the maximum number of records to return in a single request.   Maximum Value: 1000 records per request  If you do not specify a &#x60;limit&#x60;, the default number of records returned per request will be 100. | [optional]
 **offset** | **int**| The starting point within the collection of resource results. It&#x27;s typically used with the &#x60;limit&#x60; parameter to implement pagination.  If you do not specify an &#x60;offset&#x60;, the API will start from the first record. | [optional]

### Return type

[**\Swagger\Client\Model\KeywordDailyRanks**](../Model/KeywordDailyRanks.md)

### Authorization

[AuthorizationToken](../../README.md#AuthorizationToken)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **rankTrackerV30KeywordsGet**
> \Swagger\Client\Model\KeywordDetail[] rankTrackerV30KeywordsGet($campaign_id, $end_date, $start_date, $group_id, $keyword_ids, $limit, $offset, $order_by, $order_direction, $search)

Get Keyword Data

This endpoint retrieves active keywords and their corresponding data within a specified timeframe from the Rank Tracker.   With this endpoint, you can get:  `Campaign-wide Data`: By default, this endpoint returns data for all active keywords in a specified campaign.  `Group-specific Data`: If you supply a `group_id`, the endpoint will return data only for the keywords in the specified group.  `Keyword-specific Data`: You can request data for specific keywords within a campaign by supplying their IDs using the `keyword_ids`  parameter. `keyword_ids` should be a comma-separated list of keyword IDs.   Note: Use other parameters like `limit`, `offset`, `order_by`, `order_direction`, and `search` to further customize the data retrieval as per your needs.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: AuthorizationToken
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\RankTrackerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$campaign_id = 56; // int | This parameter specifies the ID of the campaign for which you want to return data.   Please refer to the Quick Start Guide to learn how to retrieve the IDs of your campaigns.
$end_date = new \DateTime("2013-10-20"); // \DateTime | This parameter specifies the end date of the timeframe for which you want to return the ranking and traffic data in YYYY-MM-DD format.  If you don't specify an `end_date`, the default is the current day.
$start_date = new \DateTime("2013-10-20"); // \DateTime | This parameter specifies the start date of the timeframe for which you want to return the ranking and traffic data in YYYY-MM-DD format.  If you don't specify a `start_date`, the default is 30 days before the `end_date`.
$group_id = 56; // int | The IDs of specific groups in the campaign to get keyword data for.   Please refer to the Quick Start Guide to learn how to retrieve the IDs of your groups.  If you do not specify a `group_id`, the default value is the `All Keywords` group, which means data will be returned for all active keywords in the campaign.
$keyword_ids = "keyword_ids_example"; // string | This parameter allows you to specify the IDs of the keywords for which you want to return data. `keyword_ids` should be a comma-separated list of keyword IDs.  Please refer to the Quick Start Guide to learn how to retrieve the IDs of your keywords.  If you do not specify `keyword_ids`, the API will return data for all keywords that meet the other specified criteria (e.g. `group_id`).
$limit = 56; // int | This parameter determines the maximum number of records to return in a single request.   Maximum Value: 1000 records per request  If you do not specify a `limit`, the default number of records returned per request will be 100.
$offset = 56; // int | This parameter specifies the starting point within the collection of resource results. It's typically used with the `limit` parameter to implement pagination.  If you do not specify an `offset`, the API will start from the first record.
$order_by = "order_by_example"; // string | This parameter enables you to sort the returned data based on a specified field.  The field names you can use to sort data are: - `keyword` - `search_volume` - `year-over-year` - `rank` - `rank_trend`: Sorts the data based on the trend in keyword ranking. - `rank_trend_impact`: Sorts the data based on the rank trend impact on Visibility. - `opportunity`: Sorts the data based on the keyword Opportunity score.
$order_direction = "order_direction_example"; // string | This parameter determines the sorting direction of the `order_by` field. You can sort the data in either ascending (`asc`) or descending (`desc`) order.  Note: The `order_direction` parameter works in conjunction with the `order_by` parameter. Use it to specify the direction of the sort after choosing the field to order by with `order_by`.  If you do not specify an `order_direction`, the default is `asc`.
$search = "search_example"; // string | The `search` parameter allows you to filter the results based on a keyword search. The API will return only those records where the keyword matches (fully or partially) the provided search term. The search parameter is case-insensitive, allowing partial matches irrespective of casing.

try {
    $result = $apiInstance->rankTrackerV30KeywordsGet($campaign_id, $end_date, $start_date, $group_id, $keyword_ids, $limit, $offset, $order_by, $order_direction, $search);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RankTrackerApi->rankTrackerV30KeywordsGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **campaign_id** | **int**| This parameter specifies the ID of the campaign for which you want to return data.   Please refer to the Quick Start Guide to learn how to retrieve the IDs of your campaigns. |
 **end_date** | **\DateTime**| This parameter specifies the end date of the timeframe for which you want to return the ranking and traffic data in YYYY-MM-DD format.  If you don&#x27;t specify an &#x60;end_date&#x60;, the default is the current day. |
 **start_date** | **\DateTime**| This parameter specifies the start date of the timeframe for which you want to return the ranking and traffic data in YYYY-MM-DD format.  If you don&#x27;t specify a &#x60;start_date&#x60;, the default is 30 days before the &#x60;end_date&#x60;. |
 **group_id** | **int**| The IDs of specific groups in the campaign to get keyword data for.   Please refer to the Quick Start Guide to learn how to retrieve the IDs of your groups.  If you do not specify a &#x60;group_id&#x60;, the default value is the &#x60;All Keywords&#x60; group, which means data will be returned for all active keywords in the campaign. | [optional]
 **keyword_ids** | **string**| This parameter allows you to specify the IDs of the keywords for which you want to return data. &#x60;keyword_ids&#x60; should be a comma-separated list of keyword IDs.  Please refer to the Quick Start Guide to learn how to retrieve the IDs of your keywords.  If you do not specify &#x60;keyword_ids&#x60;, the API will return data for all keywords that meet the other specified criteria (e.g. &#x60;group_id&#x60;). | [optional]
 **limit** | **int**| This parameter determines the maximum number of records to return in a single request.   Maximum Value: 1000 records per request  If you do not specify a &#x60;limit&#x60;, the default number of records returned per request will be 100. | [optional]
 **offset** | **int**| This parameter specifies the starting point within the collection of resource results. It&#x27;s typically used with the &#x60;limit&#x60; parameter to implement pagination.  If you do not specify an &#x60;offset&#x60;, the API will start from the first record. | [optional]
 **order_by** | **string**| This parameter enables you to sort the returned data based on a specified field.  The field names you can use to sort data are: - &#x60;keyword&#x60; - &#x60;search_volume&#x60; - &#x60;year-over-year&#x60; - &#x60;rank&#x60; - &#x60;rank_trend&#x60;: Sorts the data based on the trend in keyword ranking. - &#x60;rank_trend_impact&#x60;: Sorts the data based on the rank trend impact on Visibility. - &#x60;opportunity&#x60;: Sorts the data based on the keyword Opportunity score. | [optional]
 **order_direction** | **string**| This parameter determines the sorting direction of the &#x60;order_by&#x60; field. You can sort the data in either ascending (&#x60;asc&#x60;) or descending (&#x60;desc&#x60;) order.  Note: The &#x60;order_direction&#x60; parameter works in conjunction with the &#x60;order_by&#x60; parameter. Use it to specify the direction of the sort after choosing the field to order by with &#x60;order_by&#x60;.  If you do not specify an &#x60;order_direction&#x60;, the default is &#x60;asc&#x60;. | [optional]
 **search** | **string**| The &#x60;search&#x60; parameter allows you to filter the results based on a keyword search. The API will return only those records where the keyword matches (fully or partially) the provided search term. The search parameter is case-insensitive, allowing partial matches irrespective of casing. | [optional]

### Return type

[**\Swagger\Client\Model\KeywordDetail[]**](../Model/KeywordDetail.md)

### Authorization

[AuthorizationToken](../../README.md#AuthorizationToken)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **rankTrackerV30KeywordsImportPost**
> \Swagger\Client\Model\AddKeywords rankTrackerV30KeywordsImportPost($body)

Add New Keywords

With this endpoint, you can add a list of keywords to the specified groups of a campaign.   Note: The keywords added through this API endpoint will be charged according to our `pricing policy`. This endpoint cannot be used without setting `spend limits in the Billing section`. Unless you have spend limits set, the endpoint will return an error.  Note: the endpoint can also be used to allocate already tracked keywords to existing groups.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: AuthorizationToken
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\RankTrackerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\KeywordsImportPostBody(); // \Swagger\Client\Model\KeywordsImportPostBody | 

try {
    $result = $apiInstance->rankTrackerV30KeywordsImportPost($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RankTrackerApi->rankTrackerV30KeywordsImportPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\KeywordsImportPostBody**](../Model/KeywordsImportPostBody.md)|  |

### Return type

[**\Swagger\Client\Model\AddKeywords**](../Model/AddKeywords.md)

### Authorization

[AuthorizationToken](../../README.md#AuthorizationToken)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **rankTrackerV30KeywordsImportStatusGet**
> \Swagger\Client\Model\KeywordsImportStatus rankTrackerV30KeywordsImportStatusGet($import_id, $campaign_id)

Get Keywords Import Status

With this endpoint, you can retrieve the current status of a keyword import task using the provided import ID, with information on the number of keywords imported so far and the number remaining.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: AuthorizationToken
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\RankTrackerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$import_id = 56; // int | The import ID of the task.  Please refer to the Add New Keywords endpoint in our API to retrieve the `import_id`.
$campaign_id = 56; // int | The ID of the campaign to which you want to add/import keywords.   Please refer to the Quick Start Guide to learn how to retrieve the IDs of your campaigns.

try {
    $result = $apiInstance->rankTrackerV30KeywordsImportStatusGet($import_id, $campaign_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RankTrackerApi->rankTrackerV30KeywordsImportStatusGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **import_id** | **int**| The import ID of the task.  Please refer to the Add New Keywords endpoint in our API to retrieve the &#x60;import_id&#x60;. |
 **campaign_id** | **int**| The ID of the campaign to which you want to add/import keywords.   Please refer to the Quick Start Guide to learn how to retrieve the IDs of your campaigns. |

### Return type

[**\Swagger\Client\Model\KeywordsImportStatus**](../Model/KeywordsImportStatus.md)

### Authorization

[AuthorizationToken](../../README.md#AuthorizationToken)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **rankTrackerV30KeywordsRankingPagesGet**
> \Swagger\Client\Model\RankingPages[] rankTrackerV30KeywordsRankingPagesGet($campaign_id, $group_id, $limit, $offset, $search)

Get Ranking Pages

This endpoint returns the ranking pages of the tracked keywords in a campaign.  The response contains an array with ranking pages and their URL, title, description, and associated keyword IDs.  Note: Using the keyword IDs of the ranking keywords for the returned landing pages, you can make API calls through the other endpoints, in order to further process landing page-level search volumes, Visibility, and other metrics.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: AuthorizationToken
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\RankTrackerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$campaign_id = 56; // int | This parameter specifies the ID of the campaign for which you want to return data.   Please refer to the Quick Start Guide to learn how to retrieve the IDs of your campaigns.
$group_id = 56; // int | The IDs of specific groups in the campaign to get keyword data for.   Please refer to the Quick Start Guide to learn how to retrieve the IDs of your groups.  If you do not specify a `group_id`, the default value is the `All Keywords` group, which means data will be returned for all active keywords in the campaign.
$limit = 56; // int | Determines the maximum number of records to return in a single request.   Maximum Value: 1000 records per request.  If you do not specify a `limit`, the default number of records returned per request will be 100.
$offset = 56; // int | The starting point within the collection of resource results. It's typically used with the `limit` parameter to implement pagination.  If you do not specify an `offset`, the default is `0`, which means the API will start from the first record.
$search = "search_example"; // string | The `search` parameter allows you to filter for landing pages that include the searched term or URL path. The API will return only those records where the landing page matches (fully or partially) the provided search term or URL.

try {
    $result = $apiInstance->rankTrackerV30KeywordsRankingPagesGet($campaign_id, $group_id, $limit, $offset, $search);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RankTrackerApi->rankTrackerV30KeywordsRankingPagesGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **campaign_id** | **int**| This parameter specifies the ID of the campaign for which you want to return data.   Please refer to the Quick Start Guide to learn how to retrieve the IDs of your campaigns. |
 **group_id** | **int**| The IDs of specific groups in the campaign to get keyword data for.   Please refer to the Quick Start Guide to learn how to retrieve the IDs of your groups.  If you do not specify a &#x60;group_id&#x60;, the default value is the &#x60;All Keywords&#x60; group, which means data will be returned for all active keywords in the campaign. | [optional]
 **limit** | **int**| Determines the maximum number of records to return in a single request.   Maximum Value: 1000 records per request.  If you do not specify a &#x60;limit&#x60;, the default number of records returned per request will be 100. | [optional]
 **offset** | **int**| The starting point within the collection of resource results. It&#x27;s typically used with the &#x60;limit&#x60; parameter to implement pagination.  If you do not specify an &#x60;offset&#x60;, the default is &#x60;0&#x60;, which means the API will start from the first record. | [optional]
 **search** | **string**| The &#x60;search&#x60; parameter allows you to filter for landing pages that include the searched term or URL path. The API will return only those records where the landing page matches (fully or partially) the provided search term or URL. | [optional]

### Return type

[**\Swagger\Client\Model\RankingPages[]**](../Model/RankingPages.md)

### Authorization

[AuthorizationToken](../../README.md#AuthorizationToken)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **rankTrackerV30KeywordsSerpFeaturePresenceGet**
> \Swagger\Client\Model\SerpFeaturePresence rankTrackerV30KeywordsSerpFeaturePresenceGet($campaign_id, $start_date, $end_date, $group_id, $keyword_ids, $limit, $offset, $search)

Get Daily SERP Feature Presence

This endpoint returns the historical daily SERP feature data for specified keywords over a specified timeframe.  It provides a comprehensive timeline view of the different SERP features present for each keyword on desktop and mobile searches. This includes detailed tracking of whether the website being monitored is listed in each detected feature per date.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: AuthorizationToken
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\RankTrackerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$campaign_id = 56; // int | This parameter specifies the ID of the campaign for which you want to return data.   Please refer to the Quick Start Guide to learn how to retrieve the IDs of your campaigns.
$start_date = new \DateTime("2013-10-20"); // \DateTime | This parameter specifies the start date of the timeframe for which you want to return the data in YYYY-MM-DD format.
$end_date = new \DateTime("2013-10-20"); // \DateTime | This parameter specifies the end date of the timeframe for which you want to return the data in YYYY-MM-DD format.
$group_id = 56; // int | The IDs of specific groups in the campaign to get keyword data for.   Please refer to the Quick Start Guide to learn how to retrieve the IDs of your groups.  If you do not specify a `group_id`, the default value is the `All Keywords` group, which means data will be returned for all active keywords in the campaign.
$keyword_ids = array(56); // int[] | This parameter allows you to specify the IDs of the keywords for which you want to return data. `keyword_ids` should be a comma-separated list of keyword IDs.  Please refer to the keyword-related endpoints in our API to retrieve the IDs of your keywords.  If you do not specify `keyword_ids`, the API will return data for all keywords that meet the other specified criteria (e.g. `group_id`).
$limit = 56; // int | This parameter determines the maximum number of records to return in a single request.   Maximum Value: 1000 records per request  If you do not specify a `limit`, the default number of records returned per request will be 100.
$offset = 56; // int | This parameter specifies the starting point within the collection of resource results. It's typically used with the `limit` parameter to implement pagination.  If you do not specify an `offset`, the API will start from the first record.
$search = "search_example"; // string | The `search` parameter allows you to filter the results based on a keyword search. The API will return only those records where the keyword matches (fully or partially) the provided search term. The search parameter is case-insensitive, allowing partial matches irrespective of casing.

try {
    $result = $apiInstance->rankTrackerV30KeywordsSerpFeaturePresenceGet($campaign_id, $start_date, $end_date, $group_id, $keyword_ids, $limit, $offset, $search);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RankTrackerApi->rankTrackerV30KeywordsSerpFeaturePresenceGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **campaign_id** | **int**| This parameter specifies the ID of the campaign for which you want to return data.   Please refer to the Quick Start Guide to learn how to retrieve the IDs of your campaigns. |
 **start_date** | **\DateTime**| This parameter specifies the start date of the timeframe for which you want to return the data in YYYY-MM-DD format. |
 **end_date** | **\DateTime**| This parameter specifies the end date of the timeframe for which you want to return the data in YYYY-MM-DD format. |
 **group_id** | **int**| The IDs of specific groups in the campaign to get keyword data for.   Please refer to the Quick Start Guide to learn how to retrieve the IDs of your groups.  If you do not specify a &#x60;group_id&#x60;, the default value is the &#x60;All Keywords&#x60; group, which means data will be returned for all active keywords in the campaign. | [optional]
 **keyword_ids** | [**int[]**](../Model/int.md)| This parameter allows you to specify the IDs of the keywords for which you want to return data. &#x60;keyword_ids&#x60; should be a comma-separated list of keyword IDs.  Please refer to the keyword-related endpoints in our API to retrieve the IDs of your keywords.  If you do not specify &#x60;keyword_ids&#x60;, the API will return data for all keywords that meet the other specified criteria (e.g. &#x60;group_id&#x60;). | [optional]
 **limit** | **int**| This parameter determines the maximum number of records to return in a single request.   Maximum Value: 1000 records per request  If you do not specify a &#x60;limit&#x60;, the default number of records returned per request will be 100. | [optional]
 **offset** | **int**| This parameter specifies the starting point within the collection of resource results. It&#x27;s typically used with the &#x60;limit&#x60; parameter to implement pagination.  If you do not specify an &#x60;offset&#x60;, the API will start from the first record. | [optional]
 **search** | **string**| The &#x60;search&#x60; parameter allows you to filter the results based on a keyword search. The API will return only those records where the keyword matches (fully or partially) the provided search term. The search parameter is case-insensitive, allowing partial matches irrespective of casing. | [optional]

### Return type

[**\Swagger\Client\Model\SerpFeaturePresence**](../Model/SerpFeaturePresence.md)

### Authorization

[AuthorizationToken](../../README.md#AuthorizationToken)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **rankTrackerV30KeywordsTopResultsGet**
> \Swagger\Client\Model\TopResults rankTrackerV30KeywordsTopResultsGet($campaign_id, $date, $device, $group_id, $keyword_ids, $limit, $offset)

Get Top 100 Results

This endpoint returns the top 100 results for the requested keywords on a specified date.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: AuthorizationToken
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\RankTrackerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$campaign_id = 56; // int | The ID of the campaign for which keyword competitor ranking data must be returned.  Please refer to the Quick Start Guide to learn how to retrieve the IDs of your campaigns.
$date = new \DateTime("2013-10-20"); // \DateTime | The date for which the ranking data will be provided, in YYYY-MM-DD format.
$device = "device_example"; // string | The device type to get ranking data for–either `desktop` or `mobile`.  The default selection is `desktop`.
$group_id = 56; // int | The IDs of specific groups in the campaign to get competitor ranking data for. If not specified, returns data for all of the keywords in the campaign.  Please refer to the Quick Start Guide to learn how to identify the IDs of your groups.  If you do not specify a `group_id`, the default value is the `All Keywords` group, which means data will be returned for all active keywords in the campaign.
$keyword_ids = array(56); // int[] | The IDs of the keywords for which you want to return the data. `keyword_ids` should be a comma-separated list of keyword IDs.   Please refer to the Quick Start Guide to learn how to identify the IDs of your keywords.  If you do not specify `keyword_ids`, the API will return data for all keywords in the campaign that meet the other specified criteria (e.g. `group_id`).
$limit = 56; // int | Determines the maximum number of records to return in a single request. Maximum Value: 1000 records per request  If you do not specify a `limit`, the default number of records returned per request will be 100.
$offset = 56; // int | The starting index within the results to begin returning data. Typically used with the `limit` parameter to implement pagination.  If you do not specify an offset, the default is `0`, which means the API will start from the first record.

try {
    $result = $apiInstance->rankTrackerV30KeywordsTopResultsGet($campaign_id, $date, $device, $group_id, $keyword_ids, $limit, $offset);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RankTrackerApi->rankTrackerV30KeywordsTopResultsGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **campaign_id** | **int**| The ID of the campaign for which keyword competitor ranking data must be returned.  Please refer to the Quick Start Guide to learn how to retrieve the IDs of your campaigns. |
 **date** | **\DateTime**| The date for which the ranking data will be provided, in YYYY-MM-DD format. |
 **device** | **string**| The device type to get ranking data for–either &#x60;desktop&#x60; or &#x60;mobile&#x60;.  The default selection is &#x60;desktop&#x60;. |
 **group_id** | **int**| The IDs of specific groups in the campaign to get competitor ranking data for. If not specified, returns data for all of the keywords in the campaign.  Please refer to the Quick Start Guide to learn how to identify the IDs of your groups.  If you do not specify a &#x60;group_id&#x60;, the default value is the &#x60;All Keywords&#x60; group, which means data will be returned for all active keywords in the campaign. | [optional]
 **keyword_ids** | [**int[]**](../Model/int.md)| The IDs of the keywords for which you want to return the data. &#x60;keyword_ids&#x60; should be a comma-separated list of keyword IDs.   Please refer to the Quick Start Guide to learn how to identify the IDs of your keywords.  If you do not specify &#x60;keyword_ids&#x60;, the API will return data for all keywords in the campaign that meet the other specified criteria (e.g. &#x60;group_id&#x60;). | [optional]
 **limit** | **int**| Determines the maximum number of records to return in a single request. Maximum Value: 1000 records per request  If you do not specify a &#x60;limit&#x60;, the default number of records returned per request will be 100. | [optional]
 **offset** | **int**| The starting index within the results to begin returning data. Typically used with the &#x60;limit&#x60; parameter to implement pagination.  If you do not specify an offset, the default is &#x60;0&#x60;, which means the API will start from the first record. | [optional]

### Return type

[**\Swagger\Client\Model\TopResults**](../Model/TopResults.md)

### Authorization

[AuthorizationToken](../../README.md#AuthorizationToken)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

