# TrafficOverview

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**date** | [**\DateTime**](\DateTime.md) | The date for which the traffic data is being returned, in YYYY-MM-DD format. | [optional] 
**sessions** | **int** | The sum of sessions for the specified traffic segment, if the campaign is connected to both Google Search Console and Google Analytics – or clicks, if the campaign is only connected to Google Search Console, on the date within the selected timeframe. | [optional] 
**ecommerce** | [**\Swagger\Client\Model\TrafficEcommerce**](TrafficEcommerce.md) |  | [optional] 
**goals** | [**\Swagger\Client\Model\TrafficGoals**](TrafficGoals.md) |  | [optional] 
**bounce_rate** | **float** | The percentage of single-page sessions for the website segment on the specified date. | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

