# Swagger\Client\KeywordVaultApi

All URIs are relative to *https://apix.seomonitor.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**keywordVaultV30GetKeywordDataByListGet**](KeywordVaultApi.md#keywordvaultv30getkeyworddatabylistget) | **GET** /keyword-vault/v3.0/get-keyword-data-by-list | Get Keyword Data by List
[**keywordVaultV30GetOverviewDataGet**](KeywordVaultApi.md#keywordvaultv30getoverviewdataget) | **GET** /keyword-vault/v3.0/get-overview-data | Get Overview Data

# **keywordVaultV30GetKeywordDataByListGet**
> \Swagger\Client\Model\KeywordVaultGetKeywordDataByList keywordVaultV30GetKeywordDataByListGet($campaign_id, $list, $limit, $offset, $order_by, $order_direction, $search)

Get Keyword Data by List

This endpoint returns the SERP, search and ranking data for the keywords in a specified list within the Keyword Vault of a specified campaign. The ranking data is for both the website tracked in the specified SEOmonitor campaign and for the specified competitor websites.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: AuthorizationToken
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\KeywordVaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$campaign_id = 56; // int | This parameter specifies the ID of the campaign for which you want to return data.   Please refer to the Quick Start Guide to learn how to retrieve the IDs of your campaigns.
$list = "list_example"; // string | The name of the list created in the Keyword Vault for which you want to return keyword data.
$limit = 56; // int | This parameter determines the maximum number of records to return in a single request.   Maximum Value: 1000 records per request  If you do not specify a `limit`, the default number of records returned per request will be 100.
$offset = 56; // int | This parameter specifies the starting point within the collection of resource results. It's typically used with the `limit` parameter to implement pagination.  If you do not specify an `offset`, the API will start from the first record.
$order_by = "order_by_example"; // string | This parameter enables you to sort the returned data based on a specified field.  The field names you can use to sort data are:  `search_volume`  `year-over-year`  `rank`  `rank_trend`  `percentage_clicks`  If not otherwise specified, the returned data will be sorted by `connection_strength` by default.
$order_direction = "order_direction_example"; // string | This parameter determines the sorting direction of the `order_by` field. You can sort the data in either ascending (`asc`) or descending (`desc`) order.  If you do not specify an `order_direction`, the default is `asc`.
$search = "search_example"; // string | The `search` parameter allows you to filter the results based on a keyword search. The API will return only those records where the keyword matches (fully or partially) the provided search term.  The search parameter is case-insensitive, allowing partial matches irrespective of casing.

try {
    $result = $apiInstance->keywordVaultV30GetKeywordDataByListGet($campaign_id, $list, $limit, $offset, $order_by, $order_direction, $search);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling KeywordVaultApi->keywordVaultV30GetKeywordDataByListGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **campaign_id** | **int**| This parameter specifies the ID of the campaign for which you want to return data.   Please refer to the Quick Start Guide to learn how to retrieve the IDs of your campaigns. |
 **list** | **string**| The name of the list created in the Keyword Vault for which you want to return keyword data. |
 **limit** | **int**| This parameter determines the maximum number of records to return in a single request.   Maximum Value: 1000 records per request  If you do not specify a &#x60;limit&#x60;, the default number of records returned per request will be 100. | [optional]
 **offset** | **int**| This parameter specifies the starting point within the collection of resource results. It&#x27;s typically used with the &#x60;limit&#x60; parameter to implement pagination.  If you do not specify an &#x60;offset&#x60;, the API will start from the first record. | [optional]
 **order_by** | **string**| This parameter enables you to sort the returned data based on a specified field.  The field names you can use to sort data are:  &#x60;search_volume&#x60;  &#x60;year-over-year&#x60;  &#x60;rank&#x60;  &#x60;rank_trend&#x60;  &#x60;percentage_clicks&#x60;  If not otherwise specified, the returned data will be sorted by &#x60;connection_strength&#x60; by default. | [optional]
 **order_direction** | **string**| This parameter determines the sorting direction of the &#x60;order_by&#x60; field. You can sort the data in either ascending (&#x60;asc&#x60;) or descending (&#x60;desc&#x60;) order.  If you do not specify an &#x60;order_direction&#x60;, the default is &#x60;asc&#x60;. | [optional]
 **search** | **string**| The &#x60;search&#x60; parameter allows you to filter the results based on a keyword search. The API will return only those records where the keyword matches (fully or partially) the provided search term.  The search parameter is case-insensitive, allowing partial matches irrespective of casing. | [optional]

### Return type

[**\Swagger\Client\Model\KeywordVaultGetKeywordDataByList**](../Model/KeywordVaultGetKeywordDataByList.md)

### Authorization

[AuthorizationToken](../../README.md#AuthorizationToken)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **keywordVaultV30GetOverviewDataGet**
> \Swagger\Client\Model\KeywordVaultGetOverviewData keywordVaultV30GetOverviewDataGet($campaign_id, $list)

Get Overview Data

This endpoint returns the overall aggregated search, SERP, and Visibility data for all the keywords of a specified list in the Keyword Vault.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: AuthorizationToken
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\KeywordVaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$campaign_id = 56; // int | This parameter specifies the ID of the campaign for which you want to return data.   Please refer to the Quick Start Guide to learn how to retrieve the IDs of your campaigns.
$list = "list_example"; // string | The name of the list created in the Keyword Vault for which you want to return keyword data.

try {
    $result = $apiInstance->keywordVaultV30GetOverviewDataGet($campaign_id, $list);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling KeywordVaultApi->keywordVaultV30GetOverviewDataGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **campaign_id** | **int**| This parameter specifies the ID of the campaign for which you want to return data.   Please refer to the Quick Start Guide to learn how to retrieve the IDs of your campaigns. |
 **list** | **string**| The name of the list created in the Keyword Vault for which you want to return keyword data. |

### Return type

[**\Swagger\Client\Model\KeywordVaultGetOverviewData**](../Model/KeywordVaultGetOverviewData.md)

### Authorization

[AuthorizationToken](../../README.md#AuthorizationToken)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

