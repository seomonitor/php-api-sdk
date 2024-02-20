# Swagger\Client\ForecastApi

All URIs are relative to *https://apigw.seomonitor.com/v3/*

Method | HTTP request | Description
------------- | ------------- | -------------
[**forecastV30KeywordsGet**](ForecastApi.md#forecastv30keywordsget) | **GET** /forecast/v3.0/keywords | Get Forecast keywords
[**forecastV30ObjectiveGet**](ForecastApi.md#forecastv30objectiveget) | **GET** /forecast/v3.0/objective | Get Forecast objective Data
[**forecastV30ScenarioGet**](ForecastApi.md#forecastv30scenarioget) | **GET** /forecast/v3.0/scenario | Get Forecast scenario Data
[**forecastV30ScenariosGet**](ForecastApi.md#forecastv30scenariosget) | **GET** /forecast/v3.0/scenarios | Get Forecast scenarios

# **forecastV30KeywordsGet**
> \Swagger\Client\Model\ForecastKeywords[] forecastV30KeywordsGet($campaign_id, $forecast_id, $limit, $offset)

Get Forecast keywords

This endpoint returns the forecast data for the keywords included in the Forecast Scenario or Objective, including keyword data, target rank data, and additional traffic data, for the forecast timeframe.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: AuthorizationToken
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\ForecastApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$campaign_id = 56; // int | This parameter specifies the ID of the campaign for which you want to return data.   Please refer to the Quick Start Guide to learn how to retrieve the IDs of your campaigns.
$forecast_id = 56; // int | This parameter specifies the ID of the Forecast scenario set as an Objective for which you want to return data.   Please refer to the 'Quick Start Guide'  to retrieve the ID of your scenarios.
$limit = 56; // int | This parameter determines the maximum number of records to return in a single request.   Maximum Value: 1000 records per request   If you do not specify a `limit`, the default number of records returned per request will be 100.
$offset = 56; // int | This parameter specifies the starting point within the collection of resource results. It's typically used with the `limit` parameter to implement pagination.  If you do not specify an `offset`, the API will start from the first record.

try {
    $result = $apiInstance->forecastV30KeywordsGet($campaign_id, $forecast_id, $limit, $offset);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ForecastApi->forecastV30KeywordsGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **campaign_id** | **int**| This parameter specifies the ID of the campaign for which you want to return data.   Please refer to the Quick Start Guide to learn how to retrieve the IDs of your campaigns. |
 **forecast_id** | **int**| This parameter specifies the ID of the Forecast scenario set as an Objective for which you want to return data.   Please refer to the &#x27;Quick Start Guide&#x27;  to retrieve the ID of your scenarios. |
 **limit** | **int**| This parameter determines the maximum number of records to return in a single request.   Maximum Value: 1000 records per request   If you do not specify a &#x60;limit&#x60;, the default number of records returned per request will be 100. | [optional]
 **offset** | **int**| This parameter specifies the starting point within the collection of resource results. It&#x27;s typically used with the &#x60;limit&#x60; parameter to implement pagination.  If you do not specify an &#x60;offset&#x60;, the API will start from the first record. | [optional]

### Return type

[**\Swagger\Client\Model\ForecastKeywords[]**](../Model/ForecastKeywords.md)

### Authorization

[AuthorizationToken](../../README.md#AuthorizationToken)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **forecastV30ObjectiveGet**
> \Swagger\Client\Model\ForecastObjectiveData forecastV30ObjectiveGet($campaign_id, $forecast_id)

Get Forecast objective Data

This endpoint returns the data of Forecast Scenarios set as Objectives, including the SEO goal and configuration parameters, the forecast results overview data, and the monthly actual and estimated results for the forecast timeframe.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: AuthorizationToken
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\ForecastApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$campaign_id = 56; // int | This parameter specifies the ID of the campaign for which you want to return data.   Please refer to the Quick Start Guide to learn how to retrieve the IDs of your campaigns.
$forecast_id = 56; // int | This parameter specifies the ID of the Forecast scenario for which you want to return data.   Please refer to the Quick Start Guide to learn how to retrieve the IDs of your Forecast scenarios.

try {
    $result = $apiInstance->forecastV30ObjectiveGet($campaign_id, $forecast_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ForecastApi->forecastV30ObjectiveGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **campaign_id** | **int**| This parameter specifies the ID of the campaign for which you want to return data.   Please refer to the Quick Start Guide to learn how to retrieve the IDs of your campaigns. |
 **forecast_id** | **int**| This parameter specifies the ID of the Forecast scenario for which you want to return data.   Please refer to the Quick Start Guide to learn how to retrieve the IDs of your Forecast scenarios. |

### Return type

[**\Swagger\Client\Model\ForecastObjectiveData**](../Model/ForecastObjectiveData.md)

### Authorization

[AuthorizationToken](../../README.md#AuthorizationToken)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **forecastV30ScenarioGet**
> \Swagger\Client\Model\ForecastScenarioData forecastV30ScenarioGet($campaign_id, $forecast_id)

Get Forecast scenario Data

This endpoint returns the data of Forecast Scenarios created in a specified campaign, including the scenario details, the SEO goal and configuration parameters, the forecast results overview data, and the monthly estimated results for the forecast timeframe.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: AuthorizationToken
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\ForecastApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$campaign_id = 56; // int | This parameter specifies the ID of the campaign for which you want to return data.   Please refer to the Quick Start Guide to learn how to retrieve the IDs of your campaigns.
$forecast_id = 56; // int | This parameter specifies the ID of the Forecast scenario for which you want to return data.   Please refer to the Quick Start Guide to learn how to retrieve the IDs of your Forecast scenarios.  To get data for the Campaign Objective, use the 'Get Forecast Objective Data'.

try {
    $result = $apiInstance->forecastV30ScenarioGet($campaign_id, $forecast_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ForecastApi->forecastV30ScenarioGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **campaign_id** | **int**| This parameter specifies the ID of the campaign for which you want to return data.   Please refer to the Quick Start Guide to learn how to retrieve the IDs of your campaigns. |
 **forecast_id** | **int**| This parameter specifies the ID of the Forecast scenario for which you want to return data.   Please refer to the Quick Start Guide to learn how to retrieve the IDs of your Forecast scenarios.  To get data for the Campaign Objective, use the &#x27;Get Forecast Objective Data&#x27;. |

### Return type

[**\Swagger\Client\Model\ForecastScenarioData**](../Model/ForecastScenarioData.md)

### Authorization

[AuthorizationToken](../../README.md#AuthorizationToken)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **forecastV30ScenariosGet**
> \Swagger\Client\Model\Scenarios forecastV30ScenariosGet($campaign_id)

Get Forecast scenarios

This endpoint returns a list of Scenarios created in a specified campaign, including the Objective if one is set, and their details.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: AuthorizationToken
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\ForecastApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$campaign_id = 56; // int | This parameter specifies the ID of the campaign for which you want to return data.   Please refer to the Quick Start Guide to learn how to retrieve the IDs of your campaigns.

try {
    $result = $apiInstance->forecastV30ScenariosGet($campaign_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ForecastApi->forecastV30ScenariosGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **campaign_id** | **int**| This parameter specifies the ID of the campaign for which you want to return data.   Please refer to the Quick Start Guide to learn how to retrieve the IDs of your campaigns. |

### Return type

[**\Swagger\Client\Model\Scenarios**](../Model/Scenarios.md)

### Authorization

[AuthorizationToken](../../README.md#AuthorizationToken)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

