## Overview

SEOmonitor API Documentation
- API version: 3.0.0

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
      "url": "https://github.com:seomonitor/php-api-sdk.git"
    }
  ],
  "require": {
    "seomonitor/php-api-sdk": "*@dev"
  }
}
```

Then run `composer install`

### Manual Installation

Download the files and include `autoload.php`:

```php
    require_once('/path/to/SeomonitorClient-php/vendor/autoload.php');
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
$config = Seomonitor\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Seomonitor\Client\Api\CampaignsApi(
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

All URIs are relative to *https://apigw.seomonitor.com/v3*

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

