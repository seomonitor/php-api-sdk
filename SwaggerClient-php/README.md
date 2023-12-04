# SwaggerClient-php
`Introduction`  The SEOmonitor API allows you to programmatically access keyword ranking, traffic, and other SEO data from the SEOmonitor platform. You can use the API to build custom reports, automate workflows, and integrate SEOmonitor data into your own applications. The API enables free and unrestricted access to all your data in the platform, for all Tracked Campaigns. Additionally, it provides access to SEOmonitor's curated UK and US keyword database.   `Main Capabilities`  These are the main data sets you can retrieve with the API 3.0 endpoints:  `Campaign-level data`: Campaign details and campaign-wide keyword data, landing page data, groups data, traffic data, content opportunities data, forecast data, or campaign website research data.  `Keyword-level data`: Data for any and all keywords in the campaign, including ranking data, search data, SERP data, competitor data, SEO Opportunity, keyword-level traffic data, content optimization opportunities' data by keyword and keyword-level forecast projections data.  `Keyword group-level data`: Data for any keyword group in the campaign, including aggregated search and SERP data, website Visibility on specific groups, group SEO Opportunity data.  `Landing page-level data`: Data for specific landing pages that are ranking with the keywords in the campaign, including aggregated search and SERP data, SEO Opportunity, and landing page Visibility.  `Organic traffic data`: Data for the website's organic sessions, conversions, and revenue, including traffic data by segments (brand, non-brand, all traffic, and custom user-created traffic segments), by specific keywords and by specific landing pages.  `Keyword & website research data`: Data for any keyword in SEOmonitor's Research database – any domain-level aggregated search, SERP, and ranking data, and keyword-level and keyword list-level metrics, for the tracked website and for any competitor in top 100.  `Forecast data`: Overview data and details for specific Forecast Scenarios and Objectives, and keyword-level forecast data.  `Website content data`: Data related to content optimization opportunities of the tracked website, including landing page and keyword data for each of the content opportunities categories in SEOmonitor's Content Audit platform (Positive and negative correlations with Visibility, Cannibalization issues, Pages serving too many keywords, Keywords with missing pages, Suboptimal keyword inclusion in the title or H1 or page content, Pages with missing title or H1).   `Getting Started`  Log into your SEOmonitor account and retrieve your unique API Token (Account Settings > Edit Profile).  Check out the `quick start guide` to make your first API call.  Read through the `authentication guide` to learn how to properly authenticate your API requests.   `Libraries and SDKs`  SEOmonitor API uses HTTP protocol, which allows the application of our API to almost all programming languages. All the responses are returned in JSON format by default.  For convenience, we offer client libraries for popular programming languages:  JavaScript PHP Python Java   `Support`  Need help using the API, or have general inquiries? Please contact our support team.  For more information about the SEOmonitor platform, you can visit www.seomonitor.com.   `Changelog`      This is the first version of API 3.0. The Changelog page will be updated as we continue to develop new features and improvements.     `Quick Start Guide`  This guide will walk you through making your first API call.  `Get your API key`  First, you'll need to get an API key:      1. Log in to your SEOmonitor account (https://app.seomonitor.com)     2. Go to Account Settings > Edit Profile     3. Copy the API Token to use in your API requests  Note: Clicking `Regenerate API Token` will overwrite the current key and you will lose access if you or other users are currently using it.   `Make a request`  Next, we'll use cURL to make a request to get Tracked Campaigns details:      curl --request GET \\     --url https://apix.seomonitor.com/dashboard/v3.0/campaigns/tracked \\     --header 'Accept: application/json' \\     --header 'Authorization: eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJzZW9tb25pdG9yLmNvbSIsImlhdCI6MTY1Mjc4NTcwNCwidXNlcl9pZCI6IjY2NTI5In0.2_l9e7ohs9QHbwmr48mIoEF-QxZHNPFiAzJbMk00jcA'  This will retrieve the Tracked Campaigns data for an SEOmonitor account having the following API Token:      'eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJzZW9tb25pdG9yLmNvbSIsImlhdCI6MTY1Mjc4NTcwNCwidXNlcl9pZCI6IjY2NTI5In0.2_l9e7ohs9QHbwmr48mIoEF-QxZHNPFiAzJbMk00jcA'   Let's break down the parts of the request:      - `--request GET` - Make a GET request     - `--url` - The API endpoint URL     - `--header` - Adds the Authorization header with your API key   Handle the response  The API will return a JSON response like this:      {       \"campaign_info\": {         \"id\": \"74516\",         \"name\": \"Asos.com\",          \"company\": \"Asos\",         \"company_id\": \"51256\",         \"domain\": \"www.asos.com\",         \"keyword_count\": 588,          \"date_created\": \"2023-04-25\",         \"location\": \"United Kingdom\",         \"currency\": \"EUR\",         \"mrr\": 3000       },       \"visibility\": {         \"desktop\": {           \"latest\": 0.28,           \"trend_7days\": 0.2,           \"trend_30days\": 0.2         },         \"mobile\": {           \"latest\": 0.27,            \"trend_7days\": 0.2,           \"trend_30days\": 0.2         }       },       \"multiple_locations\": [         {           \"campaign_id\": 12746,           \"location\": \"London, United Kingdom\",           \"visibility\": {             \"desktop\": {               \"latest\": 0.32,               \"trend_7days\": 0.02               \"trend_30days: 0.1               },             \"mobile\": {               \"latest\": 0.33,               \"trend\": 0.03               \"trend_30days\": 0.1                 }             }           }         }       ],       \"health_status\": \"healthy\",       \"objective_status\": {         \"actual_sessions\": 78400,         \"estimated_sessions\": 78400,           \"performance\": 1,         \"status\": \"on_track\",         \"start_month\": \"Jun, 2023\",          \"end_month\": \"Jul, 2024\"       },       \"reporting_status\": \"submitted\",       \"account_manager\": \"Jo Hart\"     }  And that's it! You just made your first API call. Check out the rest of the API reference documentation to see what else you can build.  `Best practices`      - Keep your API key private – do not share your key publicly.     - Do not include your key directly in code that you distribute – use environment variables instead.     - Regenerate your key periodically for improved security.     - Limit API key access to only required endpoints if possible.  `Revoking API keys`  If your API key is compromised, you can revoke it by regenerating the API Token in your SEOmonitor Account Settings. This will immediately invalidate the current key so further requests can't be made.  For any other issues with authentication, contact our support team.   `Retrieve the IDs of the company, campaigns, keywords and keyword groups`  The unique IDs of your company, campaigns, keywords, or keyword groups can be retrieved either from the specific URLs of the platform, or from specific API endpoint responses. Further below you'll find details on these alternatives.   `Company ID`  The company ID can only be retrieved from the platform. Follow these steps:      1. Log in to your SEOmonitor account (https://app.seomonitor.com)     2. Go to Account Settings > Billing     3. In the Billing section, the platform URL contains the company ID.     E.g.: \"app.seomonitor.com/v2/account/company/51244/billing\" – in this example, the company ID is \"51244\"   `Campaign ID`  To retrieve the campaign ID from the platform, follow these steps:       1. Log in to your SEOmonitor account (https://app.seomonitor.com)     2. Open the required campaign by clicking on its name in the Agency Dashboard.     3. By default, the campaign opens in the Rank Tracker view. The platform URL contains the company ID.     E.g.: \"https://app.seomonitor.com/v2/72416/manage/strategy/0/desktop/keywords?timeframe=2023-09-04%3A2023-10-04\" – in this example, the campaign ID is \"72416\".  To retrieve the campaign ID through the API, make a call through the `Get Tracked Campaigns Details endpoint`. The response will contain the details of the requested Tracked Campaigns, including their IDs, which you can further use in other endpoint requests.   `Keyword ID`  To retrieve the keyword ID from the platform, follow these steps:       1. Log in to your SEOmonitor account (https://app.seomonitor.com)     2. Open the required campaign and click on the required keyword.     3. The platform URL for the keyword view (Keyword Sidebar) contains the keyword ID.     E.g.: \"https://app.seomonitor.com/v2/72416/manage/strategy/0/desktop/keywords?timeframe=2023-09-04%3A2023-10-04&ksid=7063139\" – in this example, the keyword ID is \"7063139\"   To retrieve the keyword ID through the API, make a call through the `Get Keyword Data endpoint`. The response will contain the details of the requested keywords, including their IDs, which you can further use in other endpoint requests.   `Keyword Group ID`      1. Log in to your SEOmonitor account (https://app.seomonitor.com)     2. Open the required campaign and click on the required keyword group (Groups side-menu).     3. The platform URL for the keyword group view contains the keyword ID.     E.g.: \"https://app.seomonitor.com/v2/72416/manage/strategy/69976/desktop/keywords?timeframe=2023-09-04%3A2023-10-04\" – in this example, the keyword group ID is \"69976\"  To retrieve the keyword group ID through the API, make a call through the `Get Groups List endpoint`. The response will contain the details of the requested keyword groups, including their IDs, which you can further use in other endpoint requests.   `Forecast ID for Scenarios or Objectives`      1. Log in to your SEOmonitor account (https://app.seomonitor.com)     2. Open the required campaign and go to Forecast from the main menu (top).     3. Select a Scenario or the Objective (if set). The platform URL for the specific scenario contains the forecast ID.     E.g.: \"https://app.seomonitor.com/v2/forecast/118794/3788\" – in this example, the forecast ID is \"3788\"   To retrieve the forecast ID through the API, make a call through the`Get Forecast Scenarios endpoint`. The response will contain the details of the requested Scenario or Objective, including their IDs, which you can further use in other endpoint requests.   `SERP Feature Abbreviations`  The returned data for some endpoints will contain SERP feature names in abbreviated form.  The returned values for SERP features are abbreviated as follows:      - \"adt\": Ads Pack Top     - \"def\": Definitions      - \"dir\": Directions      - \"fsn\": Featured Snippet      - \"flt\": Flights      - \"htl\": Hotels      - \"img\": Images Pack      - \"job\": Jobs      - \"kng\": Knowledge Graph      - \"geo\": Local Pack      - \"shp\": Product listing      - \"rcp\": Recipes      - \"qns\": Questions      - \"new\": Top Stories      - \"vid\": Video Carousel      - \"app\": Apps    `Rate Limits`  There are request limits in place to prevent abuse and ensure fair usage.   Exceeding the request limits will lead to HTTP 429 responses. If you need higher limits, contact our support team.   `Limits & Quotas`      -------------------------------------------------------------------------     |Limit                                    |  Number of requests              -------------------------------------------------------------------------     |Maximum requests per second              |  10                              -------------------------------------------------------------------------     |Maximum rows per request (Request Quota) |  1000                            -------------------------------------------------------------------------     |Daily Quota                              |  10 000                          -------------------------------------------------------------------------   `Exceeding Limits`  If you exceed the rate limits, you will receive a 429 Too Many Requests response.  Daily Quota Exceeded      {       \"error\": {         \"message\": \"Daily quota exceeded\",         \"details\": [           \"You have exceeded the allowed daily requests\"          ]       }     }  Details:  This error message indicates that the request exceeds the rate limits for daily requests. Retry the request after some delay.  Rate Limit Exceeded      {       \"error\": {         \"message\": \"Rate limit exceeded\",         \"details\": [           \"You have exceeded the allowed requests per second\"          ]       }     }  Details:  This error message indicates that the request exceeds the rate limits for requests per second. Retry the request after some delay.   `Increasing Limits`  The default limits allow most normal API usage patterns. However, if you need higher limits, please contact our support team.    Provide details on:      - Your specific use case      - The endpoints you are using     - The increased limits you are looking for  We will review your request and adjust limits where appropriate   `Need Higher Limits?`  For most use cases, the default limits are sufficient. But if you require higher limits, please contact our support team. We will review your use case and adjust limits where appropriate.   `Errors`  SEOmonitor API uses standard HTTP response codes to indicate the success or failure of API requests.   HTTP Status Codes      ----------------------------------------------------------------------------------     | Code  | Description                                                                 ----------------------------------------------------------------------------------     | 200   | Success                                                                     ----------------------------------------------------------------------------------     | 400   | Bad request - the request was malformed or missing required parameters      ----------------------------------------------------------------------------------      | 401   | Unauthorized - invalid or missing API key                                   ----------------------------------------------------------------------------------     | 403   | Forbidden - API key does not have access to the requested resource          ----------------------------------------------------------------------------------     | 404   | Not found - the requested resource does not exist                           ----------------------------------------------------------------------------------     | 429   | Too many requests - rate or quota limit exceeded                            ----------------------------------------------------------------------------------     | 500   | Internal server error - an unexpected error on the API server               ----------------------------------------------------------------------------------     | 50x   | Errors specific to various endpoints                                        ----------------------------------------------------------------------------------   `Error Response Format`  Error responses will be returned in JSON format:      {       \"error\": {         \"message\": \"Rate limit exceeded\",         \"details\": [           \"You have exceeded the allowed requests per second\"          ]       }     }   The error object contains:  - `message` - A general error message   - `details` - More specific details about the error   `Common Errors`  401 Unauthorized      {       \"error\": {         \"message\": \"Invalid authentication\",         \"details\": [           \"The API key provided is invalid\"          ]       }     }   Details:   This error message indicates there is a problem with the API key:  - The API key is missing from the request  - The key is invalid or incorrect  - The key is expired or revoked   Check that you are sending the correct API key in the Authorization header.  403 Forbidden      {       \"error\": {         \"message\": \"Forbidden access\",         \"details\": [           \"Your API key does not have access to the requested data\"          ]       }     }  Details:  This error message indicates that the API key being used does not have access to perform the requested operation. Ensure the key has the required scopes enabled.   404 Not Found      {       \"error\": {         \"message\": \"Data not found\",         \"details\": [           \"The requested data does not exist.\"          ]       }     }   Details:  This error message indicates that the object specified by the request does not exist. For example, requesting a keyword that is not in your SEOmonitor account.   429 Too Many Requests   Daily Quota Exceeded      {       \"error\": {         \"message\": \"Daily quota exceeded\",         \"details\": [           \"You have exceeded the allowed daily requests\"          ]       }     }   Details:  This error message indicates that the request exceeds the rate limits for daily requests. Retry the request after some delay.   Rate Limit Exceeded      {       \"error\": {         \"message\": \"Rate limit exceeded\",         \"details\": [           \"You have exceeded the allowed requests per second\"          ]       }     }   Details:  This error message indicates that the request exceeds the rate limits for requests per second. Retry the request after some delay.   500 Internal Server Error       {       \"error\": {         \"message\": \"Internal server error\",         \"details\": [           \"The server encountered an error while processing your requests\"          ]       }     }   Details:  This error message indicates that an unexpected error occurred on the API server. Try the request again later. If the issue persists, contact support.   50X Endpoint-specific errors  You may encounter errors on specific endpoint requests – these are listed and explained under each endpoint page.   Support  If you have any questions about API errors, please contact our support team.   `Changelog`  Version 3.0 (current)   Release Date: ?  This is the first version of the API 3.0.

This PHP package is automatically generated by the [Swagger Codegen](https://github.com/swagger-api/swagger-codegen) project:

- API version: 1.0.0
- Build package: io.swagger.codegen.v3.generators.php.PhpClientCodegen
For more information, please visit [https://www.seomonitor.com/](https://www.seomonitor.com/)

## Requirements

PHP 5.5 and later

## Installation & Usage
### Composer

To install the bindings via [Composer](http://getcomposer.org/), add the following to `composer.json`:

```
{
  "repositories": [
    {
      "type": "git",
      "url": "https://github.com/git_user_id/git_repo_id.git"
    }
  ],
  "require": {
    "git_user_id/git_repo_id": "*@dev"
  }
}
```

Then run `composer install`

### Manual Installation

Download the files and include `autoload.php`:

```php
    require_once('/path/to/SwaggerClient-php/vendor/autoload.php');
```

## Tests

To run the unit tests:

```
composer install
./vendor/bin/phpunit
```

## Getting Started

Please follow the [installation procedure](#installation--usage) and then run the following:

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: AuthorizationToken
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\CampaignsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$campaign_ids = "campaign_ids_example"; // string | The Tracked Campaigns IDs for which you want the data to be returned.  Please refer to the Quick Start Guide to learn how to retrieve your campaign IDs.  If you do not specify `campaign_ids`, the endpoint will return the data for all active Tracked Campaigns you have access to, across all company accounts.
$company_id = 56; // int | The ID of the subscription that contains the Tracked Campaigns for which you want to return data. This is useful for users who have access to multiple company accounts.  Please refer to the Quick Start Guide to learn how to retrieve your company IDs.  If you don't specify a `company_id`, the endpoint will return the data for all Tracked Campaigns you have access to, across all company accounts.
$limit = 56; // int | The maximum number of Tracked Campaigns to return data for.   Maximum Value: 100 records per request  If you do not specify a `limit`, the default number of records returned per request will be 10.
$offset = 56; // int | This parameter specifies the starting point within the collection of resource results. It's typically used with the `limit` parameter to implement pagination.  If you do not specify an `offset`, the API will start from the first record.

try {
    $result = $apiInstance->dashboardV30CampaignsTrackedGet($campaign_ids, $company_id, $limit, $offset);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CampaignsApi->dashboardV30CampaignsTrackedGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

## Documentation for API Endpoints

All URIs are relative to *https://apix.seomonitor.com*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*CampaignsApi* | [**dashboardV30CampaignsTrackedGet**](docs/Api/CampaignsApi.md#dashboardv30campaignstrackedget) | **GET** /dashboard/v3.0/campaigns/tracked | Get Tracked Campaigns
*ForecastApi* | [**forecastV30KeywordsGet**](docs/Api/ForecastApi.md#forecastv30keywordsget) | **GET** /forecast/v3.0/keywords | Get Forecast keywords
*ForecastApi* | [**forecastV30ObjectiveGet**](docs/Api/ForecastApi.md#forecastv30objectiveget) | **GET** /forecast/v3.0/objective | Get Forecast objective Data
*ForecastApi* | [**forecastV30ScenarioGet**](docs/Api/ForecastApi.md#forecastv30scenarioget) | **GET** /forecast/v3.0/scenario | Get Forecast scenario Data
*ForecastApi* | [**forecastV30ScenariosGet**](docs/Api/ForecastApi.md#forecastv30scenariosget) | **GET** /forecast/v3.0/scenarios | Get Forecast scenarios
*KeywordResearchApi* | [**researchV30DomainOverviewGet**](docs/Api/KeywordResearchApi.md#researchv30domainoverviewget) | **GET** /research/v3.0/domain-overview | Get URL/Domain Overview
*KeywordResearchApi* | [**researchV30DomainRankingKeywordsGet**](docs/Api/KeywordResearchApi.md#researchv30domainrankingkeywordsget) | **GET** /research/v3.0/domain-ranking-keywords | Get Ranking Keywords
*KeywordResearchApi* | [**researchV30KeywordsGet**](docs/Api/KeywordResearchApi.md#researchv30keywordsget) | **GET** /research/v3.0/keywords | Get Keyword Data
*KeywordResearchApi* | [**researchV30RankingDataGet**](docs/Api/KeywordResearchApi.md#researchv30rankingdataget) | **GET** /research/v3.0/ranking-data | Get Ranking Data
*KeywordResearchApi* | [**researchV30RelatedKeywordsGet**](docs/Api/KeywordResearchApi.md#researchv30relatedkeywordsget) | **GET** /research/v3.0/related-keywords | Get Related Keywords
*KeywordResearchApi* | [**researchV30TopicOverviewGet**](docs/Api/KeywordResearchApi.md#researchv30topicoverviewget) | **GET** /research/v3.0/topic-overview | Get Topic Overview
*KeywordVaultApi* | [**keywordVaultV30GetKeywordDataByListGet**](docs/Api/KeywordVaultApi.md#keywordvaultv30getkeyworddatabylistget) | **GET** /keyword-vault/v3.0/get-keyword-data-by-list | Get Keyword Data by List
*KeywordVaultApi* | [**keywordVaultV30GetOverviewDataGet**](docs/Api/KeywordVaultApi.md#keywordvaultv30getoverviewdataget) | **GET** /keyword-vault/v3.0/get-overview-data | Get Overview Data
*OrganicTrafficApi* | [**organicTrafficV30DailyTrafficGet**](docs/Api/OrganicTrafficApi.md#organictrafficv30dailytrafficget) | **GET** /organic-traffic/v3.0/daily-traffic | Get Daily Traffic Data by Segment
*OrganicTrafficApi* | [**organicTrafficV30KeywordsGet**](docs/Api/OrganicTrafficApi.md#organictrafficv30keywordsget) | **GET** /organic-traffic/v3.0/keywords | Get Traffic Data by Keywords
*RankTrackerApi* | [**rankTrackerV30DailyShareOfClicksGet**](docs/Api/RankTrackerApi.md#ranktrackerv30dailyshareofclicksget) | **GET** /rank-tracker/v3.0/daily-share-of-clicks | Get Daily Share of Clicks
*RankTrackerApi* | [**rankTrackerV30GroupsDailyVisibilityGet**](docs/Api/RankTrackerApi.md#ranktrackerv30groupsdailyvisibilityget) | **GET** /rank-tracker/v3.0/groups/daily-visibility | Get Daily Group Visibility
*RankTrackerApi* | [**rankTrackerV30GroupsDataGet**](docs/Api/RankTrackerApi.md#ranktrackerv30groupsdataget) | **GET** /rank-tracker/v3.0/groups/data | Get Groups Data
*RankTrackerApi* | [**rankTrackerV30GroupsGet**](docs/Api/RankTrackerApi.md#ranktrackerv30groupsget) | **GET** /rank-tracker/v3.0/groups | Get Groups List
*RankTrackerApi* | [**rankTrackerV30KeywordsCompetitionGet**](docs/Api/RankTrackerApi.md#ranktrackerv30keywordscompetitionget) | **GET** /rank-tracker/v3.0/keywords/competition | Get Keywords Competition Data
*RankTrackerApi* | [**rankTrackerV30KeywordsDailyRanksGet**](docs/Api/RankTrackerApi.md#ranktrackerv30keywordsdailyranksget) | **GET** /rank-tracker/v3.0/keywords/daily-ranks | Get Daily Keyword Ranks
*RankTrackerApi* | [**rankTrackerV30KeywordsGet**](docs/Api/RankTrackerApi.md#ranktrackerv30keywordsget) | **GET** /rank-tracker/v3.0/keywords | Get Keyword Data
*RankTrackerApi* | [**rankTrackerV30KeywordsImportPost**](docs/Api/RankTrackerApi.md#ranktrackerv30keywordsimportpost) | **POST** /rank-tracker/v3.0/keywords/import | Add New Keywords
*RankTrackerApi* | [**rankTrackerV30KeywordsImportStatusGet**](docs/Api/RankTrackerApi.md#ranktrackerv30keywordsimportstatusget) | **GET** /rank-tracker/v3.0/keywords/import-status | Get Keywords Import Status
*RankTrackerApi* | [**rankTrackerV30KeywordsRankingPagesGet**](docs/Api/RankTrackerApi.md#ranktrackerv30keywordsrankingpagesget) | **GET** /rank-tracker/v3.0/keywords/ranking-pages | Get Ranking Pages
*RankTrackerApi* | [**rankTrackerV30KeywordsSerpFeaturePresenceGet**](docs/Api/RankTrackerApi.md#ranktrackerv30keywordsserpfeaturepresenceget) | **GET** /rank-tracker/v3.0/keywords/serp-feature-presence | Get Daily SERP Feature Presence
*RankTrackerApi* | [**rankTrackerV30KeywordsTopResultsGet**](docs/Api/RankTrackerApi.md#ranktrackerv30keywordstopresultsget) | **GET** /rank-tracker/v3.0/keywords/top-results | Get Top 100 Results

## Documentation For Models

 - [AddCampaignPostBody](docs/Model/AddCampaignPostBody.md)
 - [AddKeywords](docs/Model/AddKeywords.md)
 - [AnalyticsData](docs/Model/AnalyticsData.md)
 - [BestRank](docs/Model/BestRank.md)
 - [CampaignDetailsRegular](docs/Model/CampaignDetailsRegular.md)
 - [CampaignInfo](docs/Model/CampaignInfo.md)
 - [CampaignVisibility](docs/Model/CampaignVisibility.md)
 - [CampaignVisibilityTimeframes](docs/Model/CampaignVisibilityTimeframes.md)
 - [CompletionStatus30days](docs/Model/CompletionStatus30days.md)
 - [CompletionStatusDateSessions](docs/Model/CompletionStatusDateSessions.md)
 - [ContentChange](docs/Model/ContentChange.md)
 - [ContentChanges](docs/Model/ContentChanges.md)
 - [ContentLandingPageIssue](docs/Model/ContentLandingPageIssue.md)
 - [DailyShareOfClicks](docs/Model/DailyShareOfClicks.md)
 - [DifficultyValue](docs/Model/DifficultyValue.md)
 - [DomainCompetitorRank](docs/Model/DomainCompetitorRank.md)
 - [DomainCompetitorVisibility](docs/Model/DomainCompetitorVisibility.md)
 - [DomainOverviewTraffic](docs/Model/DomainOverviewTraffic.md)
 - [DomainOverviewVisibility](docs/Model/DomainOverviewVisibility.md)
 - [DomainRankingKeywordsData](docs/Model/DomainRankingKeywordsData.md)
 - [DomainRankingsData](docs/Model/DomainRankingsData.md)
 - [DomainVisibility](docs/Model/DomainVisibility.md)
 - [ForecastAdditionalTraffic](docs/Model/ForecastAdditionalTraffic.md)
 - [ForecastAdsEquivalent](docs/Model/ForecastAdsEquivalent.md)
 - [ForecastConfigConversionData](docs/Model/ForecastConfigConversionData.md)
 - [ForecastConfiguration](docs/Model/ForecastConfiguration.md)
 - [ForecastKeywordAdditionalTraffic](docs/Model/ForecastKeywordAdditionalTraffic.md)
 - [ForecastKeywordAvgRank](docs/Model/ForecastKeywordAvgRank.md)
 - [ForecastKeywordData](docs/Model/ForecastKeywordData.md)
 - [ForecastKeywords](docs/Model/ForecastKeywords.md)
 - [ForecastMonthlyForecastTrafficSessions](docs/Model/ForecastMonthlyForecastTrafficSessions.md)
 - [ForecastMonthlyForecasts](docs/Model/ForecastMonthlyForecasts.md)
 - [ForecastMonthlyForecastsTraffic](docs/Model/ForecastMonthlyForecastsTraffic.md)
 - [ForecastObjectiveData](docs/Model/ForecastObjectiveData.md)
 - [ForecastObjectiveDetails](docs/Model/ForecastObjectiveDetails.md)
 - [ForecastOverviewData](docs/Model/ForecastOverviewData.md)
 - [ForecastOverviewInertialTraffic](docs/Model/ForecastOverviewInertialTraffic.md)
 - [ForecastScenarioData](docs/Model/ForecastScenarioData.md)
 - [ForecastScenarioSearchData](docs/Model/ForecastScenarioSearchData.md)
 - [ForecastSeoGoal](docs/Model/ForecastSeoGoal.md)
 - [ForecastTargetAvgRank](docs/Model/ForecastTargetAvgRank.md)
 - [ForecastTargetAvgVisibility](docs/Model/ForecastTargetAvgVisibility.md)
 - [ForecastTargetData](docs/Model/ForecastTargetData.md)
 - [ForecastTrafficConversions](docs/Model/ForecastTrafficConversions.md)
 - [ForecastTrafficEstimatedAvgRanks](docs/Model/ForecastTrafficEstimatedAvgRanks.md)
 - [ForecastTrafficRevenue](docs/Model/ForecastTrafficRevenue.md)
 - [ForecastTrafficVisibility](docs/Model/ForecastTrafficVisibility.md)
 - [Group](docs/Model/Group.md)
 - [GroupDailyVisibility](docs/Model/GroupDailyVisibility.md)
 - [GroupDetails](docs/Model/GroupDetails.md)
 - [GroupDetailsVisibility](docs/Model/GroupDetailsVisibility.md)
 - [GroupKeywordCounters](docs/Model/GroupKeywordCounters.md)
 - [GroupsAvgRank](docs/Model/GroupsAvgRank.md)
 - [GroupsDesktopVisibility](docs/Model/GroupsDesktopVisibility.md)
 - [GroupsDetailsKeywordsCounters](docs/Model/GroupsDetailsKeywordsCounters.md)
 - [GroupsFeatureVisibility](docs/Model/GroupsFeatureVisibility.md)
 - [GroupsImportPostBody](docs/Model/GroupsImportPostBody.md)
 - [GroupsMobileVisibility](docs/Model/GroupsMobileVisibility.md)
 - [GroupsOpportunity](docs/Model/GroupsOpportunity.md)
 - [GroupsSearchData](docs/Model/GroupsSearchData.md)
 - [GroupsSearchIntent](docs/Model/GroupsSearchIntent.md)
 - [GroupsSerpData](docs/Model/GroupsSerpData.md)
 - [GroupsSerpMobileDesktop](docs/Model/GroupsSerpMobileDesktop.md)
 - [GroupsTrafficData](docs/Model/GroupsTrafficData.md)
 - [GroupsVisibility](docs/Model/GroupsVisibility.md)
 - [GroupsVolumeByDevice](docs/Model/GroupsVolumeByDevice.md)
 - [GscData](docs/Model/GscData.md)
 - [KeywordCanibalizationLandingPageChange](docs/Model/KeywordCanibalizationLandingPageChange.md)
 - [KeywordCanibalizationOnDate](docs/Model/KeywordCanibalizationOnDate.md)
 - [KeywordCanibalizationRankData](docs/Model/KeywordCanibalizationRankData.md)
 - [KeywordCompetition](docs/Model/KeywordCompetition.md)
 - [KeywordCompetitorRankingData](docs/Model/KeywordCompetitorRankingData.md)
 - [KeywordDailyRank](docs/Model/KeywordDailyRank.md)
 - [KeywordDailyRankingData](docs/Model/KeywordDailyRankingData.md)
 - [KeywordDailyRanks](docs/Model/KeywordDailyRanks.md)
 - [KeywordDetail](docs/Model/KeywordDetail.md)
 - [KeywordLandingPages](docs/Model/KeywordLandingPages.md)
 - [KeywordRankTrend](docs/Model/KeywordRankTrend.md)
 - [KeywordRankingData](docs/Model/KeywordRankingData.md)
 - [KeywordResearchRankingData](docs/Model/KeywordResearchRankingData.md)
 - [KeywordSerpData](docs/Model/KeywordSerpData.md)
 - [KeywordSerpFeature](docs/Model/KeywordSerpFeature.md)
 - [KeywordSerpResult](docs/Model/KeywordSerpResult.md)
 - [KeywordTrafficData](docs/Model/KeywordTrafficData.md)
 - [KeywordTrafficEcommerce](docs/Model/KeywordTrafficEcommerce.md)
 - [KeywordTrafficGoals](docs/Model/KeywordTrafficGoals.md)
 - [KeywordVaultGetKeywordDataByList](docs/Model/KeywordVaultGetKeywordDataByList.md)
 - [KeywordVaultGetOverviewData](docs/Model/KeywordVaultGetOverviewData.md)
 - [KeywordsImportPostBody](docs/Model/KeywordsImportPostBody.md)
 - [KeywordsImportStatus](docs/Model/KeywordsImportStatus.md)
 - [LandingPages](docs/Model/LandingPages.md)
 - [MonthlySearches](docs/Model/MonthlySearches.md)
 - [Objective](docs/Model/Objective.md)
 - [ObjectiveCompletionStatus](docs/Model/ObjectiveCompletionStatus.md)
 - [Opportunity](docs/Model/Opportunity.md)
 - [OverviewTrafficData](docs/Model/OverviewTrafficData.md)
 - [RankingKeywords](docs/Model/RankingKeywords.md)
 - [RankingPages](docs/Model/RankingPages.md)
 - [ResearchDomainOverview](docs/Model/ResearchDomainOverview.md)
 - [ResearchDomainRanking](docs/Model/ResearchDomainRanking.md)
 - [ResearchKeywords](docs/Model/ResearchKeywords.md)
 - [ResearchRankingData](docs/Model/ResearchRankingData.md)
 - [ResearchSearchData](docs/Model/ResearchSearchData.md)
 - [ResearchSerpData](docs/Model/ResearchSerpData.md)
 - [ResearchSerpFeature](docs/Model/ResearchSerpFeature.md)
 - [Scenarios](docs/Model/Scenarios.md)
 - [SearchData](docs/Model/SearchData.md)
 - [SearchesPercentagesByDevice](docs/Model/SearchesPercentagesByDevice.md)
 - [SerpFeatuersCounter](docs/Model/SerpFeatuersCounter.md)
 - [SerpFeaturePresence](docs/Model/SerpFeaturePresence.md)
 - [SerpFeaturePresenceByDevice](docs/Model/SerpFeaturePresenceByDevice.md)
 - [SerpFeaturePresenceSerpData](docs/Model/SerpFeaturePresenceSerpData.md)
 - [ShareOfClicksDomains](docs/Model/ShareOfClicksDomains.md)
 - [Top100Results](docs/Model/Top100Results.md)
 - [TopResults](docs/Model/TopResults.md)
 - [TopicKeywordDetail](docs/Model/TopicKeywordDetail.md)
 - [TopicOverviewSerpData](docs/Model/TopicOverviewSerpData.md)
 - [TopicOverviewSerpFeature](docs/Model/TopicOverviewSerpFeature.md)
 - [TopicOverviewVisibility](docs/Model/TopicOverviewVisibility.md)
 - [TopicsOverview](docs/Model/TopicsOverview.md)
 - [TrafficEcommerce](docs/Model/TrafficEcommerce.md)
 - [TrafficGoals](docs/Model/TrafficGoals.md)
 - [TrafficKeywords](docs/Model/TrafficKeywords.md)
 - [TrafficKeywordsEcommerce](docs/Model/TrafficKeywordsEcommerce.md)
 - [TrafficKeywordsGoals](docs/Model/TrafficKeywordsGoals.md)
 - [TrafficOverview](docs/Model/TrafficOverview.md)
 - [TrafficUnallocated](docs/Model/TrafficUnallocated.md)
 - [VisibilityDesktopMobile](docs/Model/VisibilityDesktopMobile.md)
 - [WebsiteExplorerKeywordCompetitorData](docs/Model/WebsiteExplorerKeywordCompetitorData.md)

## Documentation For Authorization


## AuthorizationToken

- **Type**: API key
- **API key parameter name**: Authorization
- **Location**: HTTP header


## Author

customer.success@seomonitor.com

