# Swagger\Client\OrganicTrafficApi

All URIs are relative to *https://apigw.seomonitor.com/v3/*

Method | HTTP request | Description
------------- | ------------- | -------------
[**organicTrafficV30DailyTrafficGet**](OrganicTrafficApi.md#organictrafficv30dailytrafficget) | **GET** /organic-traffic/v3.0/daily-traffic | Get Daily Traffic Data by Segment
[**organicTrafficV30KeywordsGet**](OrganicTrafficApi.md#organictrafficv30keywordsget) | **GET** /organic-traffic/v3.0/keywords | Get Traffic Data by Keywords

# **organicTrafficV30DailyTrafficGet**
> \Swagger\Client\Model\TrafficOverview organicTrafficV30DailyTrafficGet($campaign_id, $start_date, $end_date, $segment)

Get Daily Traffic Data by Segment

This endpoint returns the organic traffic metrics by day for a traffic segment over a specified timeframe.  The data returned includes the number of sessions, conversions, bounce rate, and revenue.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: AuthorizationToken
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\OrganicTrafficApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$campaign_id = 56; // int | This parameter specifies the ID of the campaign for which you want to return data.   Please refer to the Quick Start Guide to learn how to retrieve the IDs of your campaigns.
$start_date = new \DateTime("2013-10-20"); // \DateTime | This parameter specifies the start date of the timeframe for which you want to return the data, in YYYY-MM-DD format.
$end_date = new \DateTime("2013-10-20"); // \DateTime | This parameter specifies the end date of the timeframe for which you want to return the data, in YYYY-MM-DD format.
$segment = "segment_example"; // string | The name assigned to the segment in the platform. Accepted values are `all`, `non-brand`, `brand`, or the name of a custom traffic segment created in the SEOmonitor platform, e.g. \"blog\".  Unless otherwise specified, data will be returned for the Non-Brand segment by default.

try {
    $result = $apiInstance->organicTrafficV30DailyTrafficGet($campaign_id, $start_date, $end_date, $segment);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrganicTrafficApi->organicTrafficV30DailyTrafficGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **campaign_id** | **int**| This parameter specifies the ID of the campaign for which you want to return data.   Please refer to the Quick Start Guide to learn how to retrieve the IDs of your campaigns. |
 **start_date** | **\DateTime**| This parameter specifies the start date of the timeframe for which you want to return the data, in YYYY-MM-DD format. |
 **end_date** | **\DateTime**| This parameter specifies the end date of the timeframe for which you want to return the data, in YYYY-MM-DD format. |
 **segment** | **string**| The name assigned to the segment in the platform. Accepted values are &#x60;all&#x60;, &#x60;non-brand&#x60;, &#x60;brand&#x60;, or the name of a custom traffic segment created in the SEOmonitor platform, e.g. \&quot;blog\&quot;.  Unless otherwise specified, data will be returned for the Non-Brand segment by default. | [optional]

### Return type

[**\Swagger\Client\Model\TrafficOverview**](../Model/TrafficOverview.md)

### Authorization

[AuthorizationToken](../../README.md#AuthorizationToken)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **organicTrafficV30KeywordsGet**
> \Swagger\Client\Model\TrafficKeywords organicTrafficV30KeywordsGet($campaign_id, $start_date, $end_date, $segment, $limit, $offset, $order_by, $order_direction, $tracking_status, $search)

Get Traffic Data by Keywords

This endpoint returns the traffic data by keyword for a specific traffic segment and timeframe.  Note: This endpoint will return data only if SEOmonitor pulled Google Search Console and/or Google Analytics data for the selected timeframe through an active connection.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: AuthorizationToken
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\OrganicTrafficApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$campaign_id = 56; // int | This parameter specifies the ID of the campaign for which you want to return data.   Please refer to the Quick Start Guide to learn how to retrieve the IDs of your campaigns.
$start_date = new \DateTime("2013-10-20"); // \DateTime | This parameter specifies the start date of the timeframe for which you want to return the data, in YYYY-MM-DD format.
$end_date = new \DateTime("2013-10-20"); // \DateTime | This parameter specifies the end date of the timeframe for which you want to return the data, in YYYY-MM-DD format.
$segment = "segment_example"; // string | The name assigned to the segment in the platform. Accepted values are `all`, `non-brand`, `brand`, or the name of a custom traffic segment created in the SEOmonitor platform, e.g. \"blog\".  Unless otherwise specified, data will be returned for the Non-Brand segment by default.
$limit = 56; // int | This parameter determines the maximum number of records to return in a single request.   Maximum Value: 1000 records per request  If you do not specify a `limit`, the default number of records returned per request will be 100.
$offset = 56; // int | This parameter specifies the starting point within the collection of resource results. It's typically used with the `limit` parameter to implement pagination.  If you do not specify an `offset`, the API will start from the first record.
$order_by = "order_by_example"; // string | This parameter enables you to sort the returned data based on a specified field.  The field names you can use to sort data are:  - `avg_position`   - `sessions`  - `transactions`  - `goals`  - `transactions_revenue`  - `goals_revenue`   If you do not specify an `order_direction`, the default is `asc`, which means the API will sort the data in ascending order.
$order_direction = "order_direction_example"; // string | This parameter determines the sorting direction of the `order_by` field. You can sort the data in either ascending (`asc`) or descending (`desc`) order.  If the `tracking_status` is not specified, data for all keywords is returned.
$tracking_status = "tracking_status_example"; // string | This parameter enables you to filter the results based on the keyword property of being tracked in the SEOmonitor platform. Allowed values are `tracked`, `untracked`, and `all`.  If the `tracking_status` is not specified, data for all keywords is returned.
$search = "search_example"; // string | The `search` parameter allows you to filter the results based on a keyword search. The API will return only those records where the keyword matches (fully or partially) the provided search term.  The search parameter is case-insensitive, allowing partial matches irrespective of casing.

try {
    $result = $apiInstance->organicTrafficV30KeywordsGet($campaign_id, $start_date, $end_date, $segment, $limit, $offset, $order_by, $order_direction, $tracking_status, $search);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrganicTrafficApi->organicTrafficV30KeywordsGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **campaign_id** | **int**| This parameter specifies the ID of the campaign for which you want to return data.   Please refer to the Quick Start Guide to learn how to retrieve the IDs of your campaigns. |
 **start_date** | **\DateTime**| This parameter specifies the start date of the timeframe for which you want to return the data, in YYYY-MM-DD format. |
 **end_date** | **\DateTime**| This parameter specifies the end date of the timeframe for which you want to return the data, in YYYY-MM-DD format. |
 **segment** | **string**| The name assigned to the segment in the platform. Accepted values are &#x60;all&#x60;, &#x60;non-brand&#x60;, &#x60;brand&#x60;, or the name of a custom traffic segment created in the SEOmonitor platform, e.g. \&quot;blog\&quot;.  Unless otherwise specified, data will be returned for the Non-Brand segment by default. | [optional]
 **limit** | **int**| This parameter determines the maximum number of records to return in a single request.   Maximum Value: 1000 records per request  If you do not specify a &#x60;limit&#x60;, the default number of records returned per request will be 100. | [optional]
 **offset** | **int**| This parameter specifies the starting point within the collection of resource results. It&#x27;s typically used with the &#x60;limit&#x60; parameter to implement pagination.  If you do not specify an &#x60;offset&#x60;, the API will start from the first record. | [optional]
 **order_by** | **string**| This parameter enables you to sort the returned data based on a specified field.  The field names you can use to sort data are:  - &#x60;avg_position&#x60;   - &#x60;sessions&#x60;  - &#x60;transactions&#x60;  - &#x60;goals&#x60;  - &#x60;transactions_revenue&#x60;  - &#x60;goals_revenue&#x60;   If you do not specify an &#x60;order_direction&#x60;, the default is &#x60;asc&#x60;, which means the API will sort the data in ascending order. | [optional]
 **order_direction** | **string**| This parameter determines the sorting direction of the &#x60;order_by&#x60; field. You can sort the data in either ascending (&#x60;asc&#x60;) or descending (&#x60;desc&#x60;) order.  If the &#x60;tracking_status&#x60; is not specified, data for all keywords is returned. | [optional]
 **tracking_status** | **string**| This parameter enables you to filter the results based on the keyword property of being tracked in the SEOmonitor platform. Allowed values are &#x60;tracked&#x60;, &#x60;untracked&#x60;, and &#x60;all&#x60;.  If the &#x60;tracking_status&#x60; is not specified, data for all keywords is returned. | [optional]
 **search** | **string**| The &#x60;search&#x60; parameter allows you to filter the results based on a keyword search. The API will return only those records where the keyword matches (fully or partially) the provided search term.  The search parameter is case-insensitive, allowing partial matches irrespective of casing. | [optional]

### Return type

[**\Swagger\Client\Model\TrafficKeywords**](../Model/TrafficKeywords.md)

### Authorization

[AuthorizationToken](../../README.md#AuthorizationToken)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

