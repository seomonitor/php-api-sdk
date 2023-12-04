<?php
/**
 * RankTrackerApi
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * SEOmonitor API Documentation
 *
 * `Introduction`  The SEOmonitor API allows you to programmatically access keyword ranking, traffic, and other SEO data from the SEOmonitor platform. You can use the API to build custom reports, automate workflows, and integrate SEOmonitor data into your own applications. The API enables free and unrestricted access to all your data in the platform, for all Tracked Campaigns. Additionally, it provides access to SEOmonitor's curated UK and US keyword database.   `Main Capabilities`  These are the main data sets you can retrieve with the API 3.0 endpoints:  `Campaign-level data`: Campaign details and campaign-wide keyword data, landing page data, groups data, traffic data, content opportunities data, forecast data, or campaign website research data.  `Keyword-level data`: Data for any and all keywords in the campaign, including ranking data, search data, SERP data, competitor data, SEO Opportunity, keyword-level traffic data, content optimization opportunities' data by keyword and keyword-level forecast projections data.  `Keyword group-level data`: Data for any keyword group in the campaign, including aggregated search and SERP data, website Visibility on specific groups, group SEO Opportunity data.  `Landing page-level data`: Data for specific landing pages that are ranking with the keywords in the campaign, including aggregated search and SERP data, SEO Opportunity, and landing page Visibility.  `Organic traffic data`: Data for the website's organic sessions, conversions, and revenue, including traffic data by segments (brand, non-brand, all traffic, and custom user-created traffic segments), by specific keywords and by specific landing pages.  `Keyword & website research data`: Data for any keyword in SEOmonitor's Research database – any domain-level aggregated search, SERP, and ranking data, and keyword-level and keyword list-level metrics, for the tracked website and for any competitor in top 100.  `Forecast data`: Overview data and details for specific Forecast Scenarios and Objectives, and keyword-level forecast data.  `Website content data`: Data related to content optimization opportunities of the tracked website, including landing page and keyword data for each of the content opportunities categories in SEOmonitor's Content Audit platform (Positive and negative correlations with Visibility, Cannibalization issues, Pages serving too many keywords, Keywords with missing pages, Suboptimal keyword inclusion in the title or H1 or page content, Pages with missing title or H1).   `Getting Started`  Log into your SEOmonitor account and retrieve your unique API Token (Account Settings > Edit Profile).  Check out the `quick start guide` to make your first API call.  Read through the `authentication guide` to learn how to properly authenticate your API requests.   `Libraries and SDKs`  SEOmonitor API uses HTTP protocol, which allows the application of our API to almost all programming languages. All the responses are returned in JSON format by default.  For convenience, we offer client libraries for popular programming languages:  JavaScript PHP Python Java   `Support`  Need help using the API, or have general inquiries? Please contact our support team.  For more information about the SEOmonitor platform, you can visit www.seomonitor.com.   `Changelog`      This is the first version of API 3.0. The Changelog page will be updated as we continue to develop new features and improvements.     `Quick Start Guide`  This guide will walk you through making your first API call.  `Get your API key`  First, you'll need to get an API key:      1. Log in to your SEOmonitor account (https://app.seomonitor.com)     2. Go to Account Settings > Edit Profile     3. Copy the API Token to use in your API requests  Note: Clicking `Regenerate API Token` will overwrite the current key and you will lose access if you or other users are currently using it.   `Make a request`  Next, we'll use cURL to make a request to get Tracked Campaigns details:      curl --request GET \\     --url https://apix.seomonitor.com/dashboard/v3.0/campaigns/tracked \\     --header 'Accept: application/json' \\     --header 'Authorization: eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJzZW9tb25pdG9yLmNvbSIsImlhdCI6MTY1Mjc4NTcwNCwidXNlcl9pZCI6IjY2NTI5In0.2_l9e7ohs9QHbwmr48mIoEF-QxZHNPFiAzJbMk00jcA'  This will retrieve the Tracked Campaigns data for an SEOmonitor account having the following API Token:      'eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJzZW9tb25pdG9yLmNvbSIsImlhdCI6MTY1Mjc4NTcwNCwidXNlcl9pZCI6IjY2NTI5In0.2_l9e7ohs9QHbwmr48mIoEF-QxZHNPFiAzJbMk00jcA'   Let's break down the parts of the request:      - `--request GET` - Make a GET request     - `--url` - The API endpoint URL     - `--header` - Adds the Authorization header with your API key   Handle the response  The API will return a JSON response like this:      {       \"campaign_info\": {         \"id\": \"74516\",         \"name\": \"Asos.com\",          \"company\": \"Asos\",         \"company_id\": \"51256\",         \"domain\": \"www.asos.com\",         \"keyword_count\": 588,          \"date_created\": \"2023-04-25\",         \"location\": \"United Kingdom\",         \"currency\": \"EUR\",         \"mrr\": 3000       },       \"visibility\": {         \"desktop\": {           \"latest\": 0.28,           \"trend_7days\": 0.2,           \"trend_30days\": 0.2         },         \"mobile\": {           \"latest\": 0.27,            \"trend_7days\": 0.2,           \"trend_30days\": 0.2         }       },       \"multiple_locations\": [         {           \"campaign_id\": 12746,           \"location\": \"London, United Kingdom\",           \"visibility\": {             \"desktop\": {               \"latest\": 0.32,               \"trend_7days\": 0.02               \"trend_30days: 0.1               },             \"mobile\": {               \"latest\": 0.33,               \"trend\": 0.03               \"trend_30days\": 0.1                 }             }           }         }       ],       \"health_status\": \"healthy\",       \"objective_status\": {         \"actual_sessions\": 78400,         \"estimated_sessions\": 78400,           \"performance\": 1,         \"status\": \"on_track\",         \"start_month\": \"Jun, 2023\",          \"end_month\": \"Jul, 2024\"       },       \"reporting_status\": \"submitted\",       \"account_manager\": \"Jo Hart\"     }  And that's it! You just made your first API call. Check out the rest of the API reference documentation to see what else you can build.  `Best practices`      - Keep your API key private – do not share your key publicly.     - Do not include your key directly in code that you distribute – use environment variables instead.     - Regenerate your key periodically for improved security.     - Limit API key access to only required endpoints if possible.  `Revoking API keys`  If your API key is compromised, you can revoke it by regenerating the API Token in your SEOmonitor Account Settings. This will immediately invalidate the current key so further requests can't be made.  For any other issues with authentication, contact our support team.   `Retrieve the IDs of the company, campaigns, keywords and keyword groups`  The unique IDs of your company, campaigns, keywords, or keyword groups can be retrieved either from the specific URLs of the platform, or from specific API endpoint responses. Further below you'll find details on these alternatives.   `Company ID`  The company ID can only be retrieved from the platform. Follow these steps:      1. Log in to your SEOmonitor account (https://app.seomonitor.com)     2. Go to Account Settings > Billing     3. In the Billing section, the platform URL contains the company ID.     E.g.: \"app.seomonitor.com/v2/account/company/51244/billing\" – in this example, the company ID is \"51244\"   `Campaign ID`  To retrieve the campaign ID from the platform, follow these steps:       1. Log in to your SEOmonitor account (https://app.seomonitor.com)     2. Open the required campaign by clicking on its name in the Agency Dashboard.     3. By default, the campaign opens in the Rank Tracker view. The platform URL contains the company ID.     E.g.: \"https://app.seomonitor.com/v2/72416/manage/strategy/0/desktop/keywords?timeframe=2023-09-04%3A2023-10-04\" – in this example, the campaign ID is \"72416\".  To retrieve the campaign ID through the API, make a call through the `Get Tracked Campaigns Details endpoint`. The response will contain the details of the requested Tracked Campaigns, including their IDs, which you can further use in other endpoint requests.   `Keyword ID`  To retrieve the keyword ID from the platform, follow these steps:       1. Log in to your SEOmonitor account (https://app.seomonitor.com)     2. Open the required campaign and click on the required keyword.     3. The platform URL for the keyword view (Keyword Sidebar) contains the keyword ID.     E.g.: \"https://app.seomonitor.com/v2/72416/manage/strategy/0/desktop/keywords?timeframe=2023-09-04%3A2023-10-04&ksid=7063139\" – in this example, the keyword ID is \"7063139\"   To retrieve the keyword ID through the API, make a call through the `Get Keyword Data endpoint`. The response will contain the details of the requested keywords, including their IDs, which you can further use in other endpoint requests.   `Keyword Group ID`      1. Log in to your SEOmonitor account (https://app.seomonitor.com)     2. Open the required campaign and click on the required keyword group (Groups side-menu).     3. The platform URL for the keyword group view contains the keyword ID.     E.g.: \"https://app.seomonitor.com/v2/72416/manage/strategy/69976/desktop/keywords?timeframe=2023-09-04%3A2023-10-04\" – in this example, the keyword group ID is \"69976\"  To retrieve the keyword group ID through the API, make a call through the `Get Groups List endpoint`. The response will contain the details of the requested keyword groups, including their IDs, which you can further use in other endpoint requests.   `Forecast ID for Scenarios or Objectives`      1. Log in to your SEOmonitor account (https://app.seomonitor.com)     2. Open the required campaign and go to Forecast from the main menu (top).     3. Select a Scenario or the Objective (if set). The platform URL for the specific scenario contains the forecast ID.     E.g.: \"https://app.seomonitor.com/v2/forecast/118794/3788\" – in this example, the forecast ID is \"3788\"   To retrieve the forecast ID through the API, make a call through the`Get Forecast Scenarios endpoint`. The response will contain the details of the requested Scenario or Objective, including their IDs, which you can further use in other endpoint requests.   `SERP Feature Abbreviations`  The returned data for some endpoints will contain SERP feature names in abbreviated form.  The returned values for SERP features are abbreviated as follows:      - \"adt\": Ads Pack Top     - \"def\": Definitions      - \"dir\": Directions      - \"fsn\": Featured Snippet      - \"flt\": Flights      - \"htl\": Hotels      - \"img\": Images Pack      - \"job\": Jobs      - \"kng\": Knowledge Graph      - \"geo\": Local Pack      - \"shp\": Product listing      - \"rcp\": Recipes      - \"qns\": Questions      - \"new\": Top Stories      - \"vid\": Video Carousel      - \"app\": Apps    `Rate Limits`  There are request limits in place to prevent abuse and ensure fair usage.   Exceeding the request limits will lead to HTTP 429 responses. If you need higher limits, contact our support team.   `Limits & Quotas`      -------------------------------------------------------------------------     |Limit                                    |  Number of requests              -------------------------------------------------------------------------     |Maximum requests per second              |  10                              -------------------------------------------------------------------------     |Maximum rows per request (Request Quota) |  1000                            -------------------------------------------------------------------------     |Daily Quota                              |  10 000                          -------------------------------------------------------------------------   `Exceeding Limits`  If you exceed the rate limits, you will receive a 429 Too Many Requests response.  Daily Quota Exceeded      {       \"error\": {         \"message\": \"Daily quota exceeded\",         \"details\": [           \"You have exceeded the allowed daily requests\"          ]       }     }  Details:  This error message indicates that the request exceeds the rate limits for daily requests. Retry the request after some delay.  Rate Limit Exceeded      {       \"error\": {         \"message\": \"Rate limit exceeded\",         \"details\": [           \"You have exceeded the allowed requests per second\"          ]       }     }  Details:  This error message indicates that the request exceeds the rate limits for requests per second. Retry the request after some delay.   `Increasing Limits`  The default limits allow most normal API usage patterns. However, if you need higher limits, please contact our support team.    Provide details on:      - Your specific use case      - The endpoints you are using     - The increased limits you are looking for  We will review your request and adjust limits where appropriate   `Need Higher Limits?`  For most use cases, the default limits are sufficient. But if you require higher limits, please contact our support team. We will review your use case and adjust limits where appropriate.   `Errors`  SEOmonitor API uses standard HTTP response codes to indicate the success or failure of API requests.   HTTP Status Codes      ----------------------------------------------------------------------------------     | Code  | Description                                                                 ----------------------------------------------------------------------------------     | 200   | Success                                                                     ----------------------------------------------------------------------------------     | 400   | Bad request - the request was malformed or missing required parameters      ----------------------------------------------------------------------------------      | 401   | Unauthorized - invalid or missing API key                                   ----------------------------------------------------------------------------------     | 403   | Forbidden - API key does not have access to the requested resource          ----------------------------------------------------------------------------------     | 404   | Not found - the requested resource does not exist                           ----------------------------------------------------------------------------------     | 429   | Too many requests - rate or quota limit exceeded                            ----------------------------------------------------------------------------------     | 500   | Internal server error - an unexpected error on the API server               ----------------------------------------------------------------------------------     | 50x   | Errors specific to various endpoints                                        ----------------------------------------------------------------------------------   `Error Response Format`  Error responses will be returned in JSON format:      {       \"error\": {         \"message\": \"Rate limit exceeded\",         \"details\": [           \"You have exceeded the allowed requests per second\"          ]       }     }   The error object contains:  - `message` - A general error message   - `details` - More specific details about the error   `Common Errors`  401 Unauthorized      {       \"error\": {         \"message\": \"Invalid authentication\",         \"details\": [           \"The API key provided is invalid\"          ]       }     }   Details:   This error message indicates there is a problem with the API key:  - The API key is missing from the request  - The key is invalid or incorrect  - The key is expired or revoked   Check that you are sending the correct API key in the Authorization header.  403 Forbidden      {       \"error\": {         \"message\": \"Forbidden access\",         \"details\": [           \"Your API key does not have access to the requested data\"          ]       }     }  Details:  This error message indicates that the API key being used does not have access to perform the requested operation. Ensure the key has the required scopes enabled.   404 Not Found      {       \"error\": {         \"message\": \"Data not found\",         \"details\": [           \"The requested data does not exist.\"          ]       }     }   Details:  This error message indicates that the object specified by the request does not exist. For example, requesting a keyword that is not in your SEOmonitor account.   429 Too Many Requests   Daily Quota Exceeded      {       \"error\": {         \"message\": \"Daily quota exceeded\",         \"details\": [           \"You have exceeded the allowed daily requests\"          ]       }     }   Details:  This error message indicates that the request exceeds the rate limits for daily requests. Retry the request after some delay.   Rate Limit Exceeded      {       \"error\": {         \"message\": \"Rate limit exceeded\",         \"details\": [           \"You have exceeded the allowed requests per second\"          ]       }     }   Details:  This error message indicates that the request exceeds the rate limits for requests per second. Retry the request after some delay.   500 Internal Server Error       {       \"error\": {         \"message\": \"Internal server error\",         \"details\": [           \"The server encountered an error while processing your requests\"          ]       }     }   Details:  This error message indicates that an unexpected error occurred on the API server. Try the request again later. If the issue persists, contact support.   50X Endpoint-specific errors  You may encounter errors on specific endpoint requests – these are listed and explained under each endpoint page.   Support  If you have any questions about API errors, please contact our support team.   `Changelog`  Version 3.0 (current)   Release Date: ?  This is the first version of the API 3.0.
 *
 * OpenAPI spec version: 1.0.0
 * Contact: customer.success@seomonitor.com
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 3.0.51
 */
/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Swagger\Client\Api;

use GuzzleHttp\Client;
use GuzzleHttp\ClientInterface;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Psr7\MultipartStream;
use GuzzleHttp\Psr7\Request;
use GuzzleHttp\RequestOptions;
use Swagger\Client\ApiException;
use Swagger\Client\Configuration;
use Swagger\Client\HeaderSelector;
use Swagger\Client\ObjectSerializer;

/**
 * RankTrackerApi Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class RankTrackerApi
{
    /**
     * @var ClientInterface
     */
    protected $client;

    /**
     * @var Configuration
     */
    protected $config;

    /**
     * @var HeaderSelector
     */
    protected $headerSelector;

    /**
     * @param ClientInterface $client
     * @param Configuration   $config
     * @param HeaderSelector  $selector
     */
    public function __construct(
        ClientInterface $client = null,
        Configuration $config = null,
        HeaderSelector $selector = null
    ) {
        $this->client = $client ?: new Client();
        $this->config = $config ?: new Configuration();
        $this->headerSelector = $selector ?: new HeaderSelector();
    }

    /**
     * @return Configuration
     */
    public function getConfig()
    {
        return $this->config;
    }

    /**
     * Operation rankTrackerV30DailyShareOfClicksGet
     *
     * Get Daily Share of Clicks
     *
     * @param  int $campaign_id This parameter specifies the ID of the campaign for which you want to return data.    Please refer to the Quick Start Guide to learn how to retrieve the IDs of your campaigns. (required)
     * @param  \DateTime $start_date This parameter specifies the start date of the timeframe for which you want to return the data, in YYYY-MM-DD format. (optional)
     * @param  \DateTime $end_date This parameter specifies the end date of the timeframe for which you want to return the data in YYYY-MM-DD format. (optional)
     * @param  int $group_id The ID for the group of keywords for which the data must be returned.   Please refer to the Quick Start Guide to learn how to retrieve the IDs of your groups.  If you do not specify a &#x60;group_id&#x60;, the default value is the &#x60;All Keywords&#x60; group, which means data will be returned for all active keywords in the campaign. (optional)
     * @param  string $keyword_ids This parameter allows you to specify the IDs of the keywords for which you want to return Visibility data. &#x60;keyword_ids&#x60; should be a comma-separated list of keyword IDs.   Please refer to the Quick Start Guide to learn how to retrieve the IDs of your keywords.  If you do not specify &#x60;keyword_ids&#x60;, the API will return data for all keywords that meet the other specified criteria (e.g. &#x60;group_id&#x60;). (optional)
     *
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Swagger\Client\Model\DailyShareOfClicks
     */
    public function rankTrackerV30DailyShareOfClicksGet($campaign_id, $start_date = null, $end_date = null, $group_id = null, $keyword_ids = null)
    {
        list($response) = $this->rankTrackerV30DailyShareOfClicksGetWithHttpInfo($campaign_id, $start_date, $end_date, $group_id, $keyword_ids);
        return $response;
    }

    /**
     * Operation rankTrackerV30DailyShareOfClicksGetWithHttpInfo
     *
     * Get Daily Share of Clicks
     *
     * @param  int $campaign_id This parameter specifies the ID of the campaign for which you want to return data.    Please refer to the Quick Start Guide to learn how to retrieve the IDs of your campaigns. (required)
     * @param  \DateTime $start_date This parameter specifies the start date of the timeframe for which you want to return the data, in YYYY-MM-DD format. (optional)
     * @param  \DateTime $end_date This parameter specifies the end date of the timeframe for which you want to return the data in YYYY-MM-DD format. (optional)
     * @param  int $group_id The ID for the group of keywords for which the data must be returned.   Please refer to the Quick Start Guide to learn how to retrieve the IDs of your groups.  If you do not specify a &#x60;group_id&#x60;, the default value is the &#x60;All Keywords&#x60; group, which means data will be returned for all active keywords in the campaign. (optional)
     * @param  string $keyword_ids This parameter allows you to specify the IDs of the keywords for which you want to return Visibility data. &#x60;keyword_ids&#x60; should be a comma-separated list of keyword IDs.   Please refer to the Quick Start Guide to learn how to retrieve the IDs of your keywords.  If you do not specify &#x60;keyword_ids&#x60;, the API will return data for all keywords that meet the other specified criteria (e.g. &#x60;group_id&#x60;). (optional)
     *
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Swagger\Client\Model\DailyShareOfClicks, HTTP status code, HTTP response headers (array of strings)
     */
    public function rankTrackerV30DailyShareOfClicksGetWithHttpInfo($campaign_id, $start_date = null, $end_date = null, $group_id = null, $keyword_ids = null)
    {
        $returnType = '\Swagger\Client\Model\DailyShareOfClicks';
        $request = $this->rankTrackerV30DailyShareOfClicksGetRequest($campaign_id, $start_date, $end_date, $group_id, $keyword_ids);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? $e->getResponse()->getBody()->getContents() : null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    $response->getBody()
                );
            }

            $responseBody = $response->getBody();
            if ($returnType === '\SplFileObject') {
                $content = $responseBody; //stream goes to serializer
            } else {
                $content = $responseBody->getContents();
                if (!in_array($returnType, ['string','integer','bool'])) {
                    $content = json_decode($content);
                }
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Swagger\Client\Model\DailyShareOfClicks',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation rankTrackerV30DailyShareOfClicksGetAsync
     *
     * Get Daily Share of Clicks
     *
     * @param  int $campaign_id This parameter specifies the ID of the campaign for which you want to return data.    Please refer to the Quick Start Guide to learn how to retrieve the IDs of your campaigns. (required)
     * @param  \DateTime $start_date This parameter specifies the start date of the timeframe for which you want to return the data, in YYYY-MM-DD format. (optional)
     * @param  \DateTime $end_date This parameter specifies the end date of the timeframe for which you want to return the data in YYYY-MM-DD format. (optional)
     * @param  int $group_id The ID for the group of keywords for which the data must be returned.   Please refer to the Quick Start Guide to learn how to retrieve the IDs of your groups.  If you do not specify a &#x60;group_id&#x60;, the default value is the &#x60;All Keywords&#x60; group, which means data will be returned for all active keywords in the campaign. (optional)
     * @param  string $keyword_ids This parameter allows you to specify the IDs of the keywords for which you want to return Visibility data. &#x60;keyword_ids&#x60; should be a comma-separated list of keyword IDs.   Please refer to the Quick Start Guide to learn how to retrieve the IDs of your keywords.  If you do not specify &#x60;keyword_ids&#x60;, the API will return data for all keywords that meet the other specified criteria (e.g. &#x60;group_id&#x60;). (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function rankTrackerV30DailyShareOfClicksGetAsync($campaign_id, $start_date = null, $end_date = null, $group_id = null, $keyword_ids = null)
    {
        return $this->rankTrackerV30DailyShareOfClicksGetAsyncWithHttpInfo($campaign_id, $start_date, $end_date, $group_id, $keyword_ids)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation rankTrackerV30DailyShareOfClicksGetAsyncWithHttpInfo
     *
     * Get Daily Share of Clicks
     *
     * @param  int $campaign_id This parameter specifies the ID of the campaign for which you want to return data.    Please refer to the Quick Start Guide to learn how to retrieve the IDs of your campaigns. (required)
     * @param  \DateTime $start_date This parameter specifies the start date of the timeframe for which you want to return the data, in YYYY-MM-DD format. (optional)
     * @param  \DateTime $end_date This parameter specifies the end date of the timeframe for which you want to return the data in YYYY-MM-DD format. (optional)
     * @param  int $group_id The ID for the group of keywords for which the data must be returned.   Please refer to the Quick Start Guide to learn how to retrieve the IDs of your groups.  If you do not specify a &#x60;group_id&#x60;, the default value is the &#x60;All Keywords&#x60; group, which means data will be returned for all active keywords in the campaign. (optional)
     * @param  string $keyword_ids This parameter allows you to specify the IDs of the keywords for which you want to return Visibility data. &#x60;keyword_ids&#x60; should be a comma-separated list of keyword IDs.   Please refer to the Quick Start Guide to learn how to retrieve the IDs of your keywords.  If you do not specify &#x60;keyword_ids&#x60;, the API will return data for all keywords that meet the other specified criteria (e.g. &#x60;group_id&#x60;). (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function rankTrackerV30DailyShareOfClicksGetAsyncWithHttpInfo($campaign_id, $start_date = null, $end_date = null, $group_id = null, $keyword_ids = null)
    {
        $returnType = '\Swagger\Client\Model\DailyShareOfClicks';
        $request = $this->rankTrackerV30DailyShareOfClicksGetRequest($campaign_id, $start_date, $end_date, $group_id, $keyword_ids);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    $responseBody = $response->getBody();
                    if ($returnType === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = $responseBody->getContents();
                        if ($returnType !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, $returnType, []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'rankTrackerV30DailyShareOfClicksGet'
     *
     * @param  int $campaign_id This parameter specifies the ID of the campaign for which you want to return data.    Please refer to the Quick Start Guide to learn how to retrieve the IDs of your campaigns. (required)
     * @param  \DateTime $start_date This parameter specifies the start date of the timeframe for which you want to return the data, in YYYY-MM-DD format. (optional)
     * @param  \DateTime $end_date This parameter specifies the end date of the timeframe for which you want to return the data in YYYY-MM-DD format. (optional)
     * @param  int $group_id The ID for the group of keywords for which the data must be returned.   Please refer to the Quick Start Guide to learn how to retrieve the IDs of your groups.  If you do not specify a &#x60;group_id&#x60;, the default value is the &#x60;All Keywords&#x60; group, which means data will be returned for all active keywords in the campaign. (optional)
     * @param  string $keyword_ids This parameter allows you to specify the IDs of the keywords for which you want to return Visibility data. &#x60;keyword_ids&#x60; should be a comma-separated list of keyword IDs.   Please refer to the Quick Start Guide to learn how to retrieve the IDs of your keywords.  If you do not specify &#x60;keyword_ids&#x60;, the API will return data for all keywords that meet the other specified criteria (e.g. &#x60;group_id&#x60;). (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function rankTrackerV30DailyShareOfClicksGetRequest($campaign_id, $start_date = null, $end_date = null, $group_id = null, $keyword_ids = null)
    {
        // verify the required parameter 'campaign_id' is set
        if ($campaign_id === null || (is_array($campaign_id) && count($campaign_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $campaign_id when calling rankTrackerV30DailyShareOfClicksGet'
            );
        }

        $resourcePath = '/rank-tracker/v3.0/daily-share-of-clicks';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        if ($campaign_id !== null) {
            $queryParams['campaign_id'] = ObjectSerializer::toQueryValue($campaign_id, null);
        }
        // query params
        if ($start_date !== null) {
            $queryParams['start_date'] = ObjectSerializer::toQueryValue($start_date, 'date');
        }
        // query params
        if ($end_date !== null) {
            $queryParams['end_date'] = ObjectSerializer::toQueryValue($end_date, 'date');
        }
        // query params
        if ($group_id !== null) {
            $queryParams['group_id'] = ObjectSerializer::toQueryValue($group_id, null);
        }
        // query params
        if ($keyword_ids !== null) {
            $queryParams['keyword_ids'] = ObjectSerializer::toQueryValue($keyword_ids, null);
        }


        // body params
        $_tempBody = null;

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                []
            );
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            // $_tempBody is the method argument, if present
            $httpBody = $_tempBody;
            // \stdClass has no __toString(), so we should encode it manually
            if ($httpBody instanceof \stdClass && $headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($httpBody);
            }
        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $multipartContents[] = [
                        'name' => $formParamName,
                        'contents' => $formParamValue
                    ];
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($formParams);

            } else {
                // for HTTP post (form)
                $httpBody = \GuzzleHttp\Psr7\Query::build($formParams);
            }
        }

        // this endpoint requires API key authentication
        $apiKey = $this->config->getApiKeyWithPrefix('Authorization');
        if ($apiKey !== null) {
            $headers['Authorization'] = $apiKey;
        }

        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $query = \GuzzleHttp\Psr7\Query::build($queryParams);
        return new Request(
            'GET',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation rankTrackerV30GroupsDailyVisibilityGet
     *
     * Get Daily Group Visibility
     *
     * @param  int $campaign_id This parameter specifies the ID of the campaign for which you want to return data.   Please refer to the Quick Start Guide to learn how to retrieve the IDs of your campaigns. (required)
     * @param  \DateTime $start_date This parameter specifies the start date of the timeframe for which you want to return the data, in YYYY-MM-DD format. (required)
     * @param  \DateTime $end_date This parameter specifies the end date of the timeframe for which you want to return the data in YYYY-MM-DD format. (required)
     * @param  int $group_id The ID for the group of keywords for which the data must be returned.  Please refer to the Quick Start Guide to learn how to retrieve the IDs of your groups.  If you do not specify a &#x60;group_id&#x60;, the default value is the &#x60;All Keywords&#x60; group, which means data will be returned for all active keywords in the campaign. (optional)
     * @param  string $keyword_ids This parameter allows you to specify the IDs of the keywords for which you want to return Visibility data. &#x60;keyword_ids&#x60; should be a comma-separated list of keyword IDs.  Please refer to the Quick Start Guide to learn how to retrieve the IDs of your keywords.   If you do not specify &#x60;keyword_ids&#x60;, the API will return data for all keywords that meet the other specified criteria (e.g. &#x60;group_id&#x60;). (optional)
     * @param  string $domain The domain name for which the Visibility will be returned.   If no domain is provided, the endpoint will return the data for the campaign&#x27;s website. (optional)
     * @param  string $feature_visibility This parameter enables you to also retrieve the Visibility for one of the following SERP features: product_listing  &#x60;images_pack&#x60;  &#x60;questions&#x60;  &#x60;ads_pack&#x60;  &#x60;knowledge_graph&#x60;  &#x60;top_stories&#x60;  &#x60;local_pack&#x60;  &#x60;featured_snippet&#x60;  &#x60;recipes&#x60;  &#x60;news&#x60;  If no &#x60;feature_visibility&#x60; is specified, the endpoint will return an empty array. (optional)
     *
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Swagger\Client\Model\GroupDailyVisibility
     */
    public function rankTrackerV30GroupsDailyVisibilityGet($campaign_id, $start_date, $end_date, $group_id = null, $keyword_ids = null, $domain = null, $feature_visibility = null)
    {
        list($response) = $this->rankTrackerV30GroupsDailyVisibilityGetWithHttpInfo($campaign_id, $start_date, $end_date, $group_id, $keyword_ids, $domain, $feature_visibility);
        return $response;
    }

    /**
     * Operation rankTrackerV30GroupsDailyVisibilityGetWithHttpInfo
     *
     * Get Daily Group Visibility
     *
     * @param  int $campaign_id This parameter specifies the ID of the campaign for which you want to return data.   Please refer to the Quick Start Guide to learn how to retrieve the IDs of your campaigns. (required)
     * @param  \DateTime $start_date This parameter specifies the start date of the timeframe for which you want to return the data, in YYYY-MM-DD format. (required)
     * @param  \DateTime $end_date This parameter specifies the end date of the timeframe for which you want to return the data in YYYY-MM-DD format. (required)
     * @param  int $group_id The ID for the group of keywords for which the data must be returned.  Please refer to the Quick Start Guide to learn how to retrieve the IDs of your groups.  If you do not specify a &#x60;group_id&#x60;, the default value is the &#x60;All Keywords&#x60; group, which means data will be returned for all active keywords in the campaign. (optional)
     * @param  string $keyword_ids This parameter allows you to specify the IDs of the keywords for which you want to return Visibility data. &#x60;keyword_ids&#x60; should be a comma-separated list of keyword IDs.  Please refer to the Quick Start Guide to learn how to retrieve the IDs of your keywords.   If you do not specify &#x60;keyword_ids&#x60;, the API will return data for all keywords that meet the other specified criteria (e.g. &#x60;group_id&#x60;). (optional)
     * @param  string $domain The domain name for which the Visibility will be returned.   If no domain is provided, the endpoint will return the data for the campaign&#x27;s website. (optional)
     * @param  string $feature_visibility This parameter enables you to also retrieve the Visibility for one of the following SERP features: product_listing  &#x60;images_pack&#x60;  &#x60;questions&#x60;  &#x60;ads_pack&#x60;  &#x60;knowledge_graph&#x60;  &#x60;top_stories&#x60;  &#x60;local_pack&#x60;  &#x60;featured_snippet&#x60;  &#x60;recipes&#x60;  &#x60;news&#x60;  If no &#x60;feature_visibility&#x60; is specified, the endpoint will return an empty array. (optional)
     *
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Swagger\Client\Model\GroupDailyVisibility, HTTP status code, HTTP response headers (array of strings)
     */
    public function rankTrackerV30GroupsDailyVisibilityGetWithHttpInfo($campaign_id, $start_date, $end_date, $group_id = null, $keyword_ids = null, $domain = null, $feature_visibility = null)
    {
        $returnType = '\Swagger\Client\Model\GroupDailyVisibility';
        $request = $this->rankTrackerV30GroupsDailyVisibilityGetRequest($campaign_id, $start_date, $end_date, $group_id, $keyword_ids, $domain, $feature_visibility);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? $e->getResponse()->getBody()->getContents() : null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    $response->getBody()
                );
            }

            $responseBody = $response->getBody();
            if ($returnType === '\SplFileObject') {
                $content = $responseBody; //stream goes to serializer
            } else {
                $content = $responseBody->getContents();
                if (!in_array($returnType, ['string','integer','bool'])) {
                    $content = json_decode($content);
                }
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Swagger\Client\Model\GroupDailyVisibility',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation rankTrackerV30GroupsDailyVisibilityGetAsync
     *
     * Get Daily Group Visibility
     *
     * @param  int $campaign_id This parameter specifies the ID of the campaign for which you want to return data.   Please refer to the Quick Start Guide to learn how to retrieve the IDs of your campaigns. (required)
     * @param  \DateTime $start_date This parameter specifies the start date of the timeframe for which you want to return the data, in YYYY-MM-DD format. (required)
     * @param  \DateTime $end_date This parameter specifies the end date of the timeframe for which you want to return the data in YYYY-MM-DD format. (required)
     * @param  int $group_id The ID for the group of keywords for which the data must be returned.  Please refer to the Quick Start Guide to learn how to retrieve the IDs of your groups.  If you do not specify a &#x60;group_id&#x60;, the default value is the &#x60;All Keywords&#x60; group, which means data will be returned for all active keywords in the campaign. (optional)
     * @param  string $keyword_ids This parameter allows you to specify the IDs of the keywords for which you want to return Visibility data. &#x60;keyword_ids&#x60; should be a comma-separated list of keyword IDs.  Please refer to the Quick Start Guide to learn how to retrieve the IDs of your keywords.   If you do not specify &#x60;keyword_ids&#x60;, the API will return data for all keywords that meet the other specified criteria (e.g. &#x60;group_id&#x60;). (optional)
     * @param  string $domain The domain name for which the Visibility will be returned.   If no domain is provided, the endpoint will return the data for the campaign&#x27;s website. (optional)
     * @param  string $feature_visibility This parameter enables you to also retrieve the Visibility for one of the following SERP features: product_listing  &#x60;images_pack&#x60;  &#x60;questions&#x60;  &#x60;ads_pack&#x60;  &#x60;knowledge_graph&#x60;  &#x60;top_stories&#x60;  &#x60;local_pack&#x60;  &#x60;featured_snippet&#x60;  &#x60;recipes&#x60;  &#x60;news&#x60;  If no &#x60;feature_visibility&#x60; is specified, the endpoint will return an empty array. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function rankTrackerV30GroupsDailyVisibilityGetAsync($campaign_id, $start_date, $end_date, $group_id = null, $keyword_ids = null, $domain = null, $feature_visibility = null)
    {
        return $this->rankTrackerV30GroupsDailyVisibilityGetAsyncWithHttpInfo($campaign_id, $start_date, $end_date, $group_id, $keyword_ids, $domain, $feature_visibility)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation rankTrackerV30GroupsDailyVisibilityGetAsyncWithHttpInfo
     *
     * Get Daily Group Visibility
     *
     * @param  int $campaign_id This parameter specifies the ID of the campaign for which you want to return data.   Please refer to the Quick Start Guide to learn how to retrieve the IDs of your campaigns. (required)
     * @param  \DateTime $start_date This parameter specifies the start date of the timeframe for which you want to return the data, in YYYY-MM-DD format. (required)
     * @param  \DateTime $end_date This parameter specifies the end date of the timeframe for which you want to return the data in YYYY-MM-DD format. (required)
     * @param  int $group_id The ID for the group of keywords for which the data must be returned.  Please refer to the Quick Start Guide to learn how to retrieve the IDs of your groups.  If you do not specify a &#x60;group_id&#x60;, the default value is the &#x60;All Keywords&#x60; group, which means data will be returned for all active keywords in the campaign. (optional)
     * @param  string $keyword_ids This parameter allows you to specify the IDs of the keywords for which you want to return Visibility data. &#x60;keyword_ids&#x60; should be a comma-separated list of keyword IDs.  Please refer to the Quick Start Guide to learn how to retrieve the IDs of your keywords.   If you do not specify &#x60;keyword_ids&#x60;, the API will return data for all keywords that meet the other specified criteria (e.g. &#x60;group_id&#x60;). (optional)
     * @param  string $domain The domain name for which the Visibility will be returned.   If no domain is provided, the endpoint will return the data for the campaign&#x27;s website. (optional)
     * @param  string $feature_visibility This parameter enables you to also retrieve the Visibility for one of the following SERP features: product_listing  &#x60;images_pack&#x60;  &#x60;questions&#x60;  &#x60;ads_pack&#x60;  &#x60;knowledge_graph&#x60;  &#x60;top_stories&#x60;  &#x60;local_pack&#x60;  &#x60;featured_snippet&#x60;  &#x60;recipes&#x60;  &#x60;news&#x60;  If no &#x60;feature_visibility&#x60; is specified, the endpoint will return an empty array. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function rankTrackerV30GroupsDailyVisibilityGetAsyncWithHttpInfo($campaign_id, $start_date, $end_date, $group_id = null, $keyword_ids = null, $domain = null, $feature_visibility = null)
    {
        $returnType = '\Swagger\Client\Model\GroupDailyVisibility';
        $request = $this->rankTrackerV30GroupsDailyVisibilityGetRequest($campaign_id, $start_date, $end_date, $group_id, $keyword_ids, $domain, $feature_visibility);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    $responseBody = $response->getBody();
                    if ($returnType === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = $responseBody->getContents();
                        if ($returnType !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, $returnType, []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'rankTrackerV30GroupsDailyVisibilityGet'
     *
     * @param  int $campaign_id This parameter specifies the ID of the campaign for which you want to return data.   Please refer to the Quick Start Guide to learn how to retrieve the IDs of your campaigns. (required)
     * @param  \DateTime $start_date This parameter specifies the start date of the timeframe for which you want to return the data, in YYYY-MM-DD format. (required)
     * @param  \DateTime $end_date This parameter specifies the end date of the timeframe for which you want to return the data in YYYY-MM-DD format. (required)
     * @param  int $group_id The ID for the group of keywords for which the data must be returned.  Please refer to the Quick Start Guide to learn how to retrieve the IDs of your groups.  If you do not specify a &#x60;group_id&#x60;, the default value is the &#x60;All Keywords&#x60; group, which means data will be returned for all active keywords in the campaign. (optional)
     * @param  string $keyword_ids This parameter allows you to specify the IDs of the keywords for which you want to return Visibility data. &#x60;keyword_ids&#x60; should be a comma-separated list of keyword IDs.  Please refer to the Quick Start Guide to learn how to retrieve the IDs of your keywords.   If you do not specify &#x60;keyword_ids&#x60;, the API will return data for all keywords that meet the other specified criteria (e.g. &#x60;group_id&#x60;). (optional)
     * @param  string $domain The domain name for which the Visibility will be returned.   If no domain is provided, the endpoint will return the data for the campaign&#x27;s website. (optional)
     * @param  string $feature_visibility This parameter enables you to also retrieve the Visibility for one of the following SERP features: product_listing  &#x60;images_pack&#x60;  &#x60;questions&#x60;  &#x60;ads_pack&#x60;  &#x60;knowledge_graph&#x60;  &#x60;top_stories&#x60;  &#x60;local_pack&#x60;  &#x60;featured_snippet&#x60;  &#x60;recipes&#x60;  &#x60;news&#x60;  If no &#x60;feature_visibility&#x60; is specified, the endpoint will return an empty array. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function rankTrackerV30GroupsDailyVisibilityGetRequest($campaign_id, $start_date, $end_date, $group_id = null, $keyword_ids = null, $domain = null, $feature_visibility = null)
    {
        // verify the required parameter 'campaign_id' is set
        if ($campaign_id === null || (is_array($campaign_id) && count($campaign_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $campaign_id when calling rankTrackerV30GroupsDailyVisibilityGet'
            );
        }
        // verify the required parameter 'start_date' is set
        if ($start_date === null || (is_array($start_date) && count($start_date) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $start_date when calling rankTrackerV30GroupsDailyVisibilityGet'
            );
        }
        // verify the required parameter 'end_date' is set
        if ($end_date === null || (is_array($end_date) && count($end_date) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $end_date when calling rankTrackerV30GroupsDailyVisibilityGet'
            );
        }

        $resourcePath = '/rank-tracker/v3.0/groups/daily-visibility';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        if ($campaign_id !== null) {
            $queryParams['campaign_id'] = ObjectSerializer::toQueryValue($campaign_id, null);
        }
        // query params
        if ($start_date !== null) {
            $queryParams['start_date'] = ObjectSerializer::toQueryValue($start_date, 'date');
        }
        // query params
        if ($end_date !== null) {
            $queryParams['end_date'] = ObjectSerializer::toQueryValue($end_date, 'date');
        }
        // query params
        if ($group_id !== null) {
            $queryParams['group_id'] = ObjectSerializer::toQueryValue($group_id, null);
        }
        // query params
        if ($keyword_ids !== null) {
            $queryParams['keyword_ids'] = ObjectSerializer::toQueryValue($keyword_ids, null);
        }
        // query params
        if ($domain !== null) {
            $queryParams['domain'] = ObjectSerializer::toQueryValue($domain, null);
        }
        // query params
        if ($feature_visibility !== null) {
            $queryParams['feature_visibility'] = ObjectSerializer::toQueryValue($feature_visibility, null);
        }


        // body params
        $_tempBody = null;

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                []
            );
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            // $_tempBody is the method argument, if present
            $httpBody = $_tempBody;
            // \stdClass has no __toString(), so we should encode it manually
            if ($httpBody instanceof \stdClass && $headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($httpBody);
            }
        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $multipartContents[] = [
                        'name' => $formParamName,
                        'contents' => $formParamValue
                    ];
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($formParams);

            } else {
                // for HTTP post (form)
                $httpBody = \GuzzleHttp\Psr7\Query::build($formParams);
            }
        }

        // this endpoint requires API key authentication
        $apiKey = $this->config->getApiKeyWithPrefix('Authorization');
        if ($apiKey !== null) {
            $headers['Authorization'] = $apiKey;
        }

        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $query = \GuzzleHttp\Psr7\Query::build($queryParams);
        return new Request(
            'GET',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation rankTrackerV30GroupsDataGet
     *
     * Get Groups Data
     *
     * @param  int $campaign_id This parameter specifies the ID of the campaign for which you want to return data.   Please refer to the Quick Start Guide to learn how to retrieve the IDs of your campaigns. (required)
     * @param  \DateTime $start_date The start date of the timeframe for which you want to return the data in YYYY-MM-DD format. (required)
     * @param  \DateTime $end_date The end date of the timeframe for which you want to return the data in YYYY-MM-DD format. (required)
     * @param  string $group_ids The ID(s) of the group(s) for which you want to return data.  Please refer to the Quick Start Guide to learn how to retrieve the IDs of your groups.  If you do not specify a &#x60;group_id&#x60;, the default value is &#x60;All Keywords&#x60; group, which means data will be returned for all keywords in the campaign. (optional)
     * @param  int $limit This parameter determines the maximum number of records to return in a single request.   Maximum Value: 1000 records per request  If you do not specify a &#x60;limit&#x60;, the default number of records returned per request will be 100. (optional)
     * @param  int $offset This parameter specifies the starting point within the collection of resource results. It&#x27;s typically used with the &#x60;limit&#x60; parameter to implement pagination.  If you do not specify an &#x60;offset&#x60;, the API will start from the first record. (optional)
     *
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Swagger\Client\Model\GroupDetails[]
     */
    public function rankTrackerV30GroupsDataGet($campaign_id, $start_date, $end_date, $group_ids = null, $limit = null, $offset = null)
    {
        list($response) = $this->rankTrackerV30GroupsDataGetWithHttpInfo($campaign_id, $start_date, $end_date, $group_ids, $limit, $offset);
        return $response;
    }

    /**
     * Operation rankTrackerV30GroupsDataGetWithHttpInfo
     *
     * Get Groups Data
     *
     * @param  int $campaign_id This parameter specifies the ID of the campaign for which you want to return data.   Please refer to the Quick Start Guide to learn how to retrieve the IDs of your campaigns. (required)
     * @param  \DateTime $start_date The start date of the timeframe for which you want to return the data in YYYY-MM-DD format. (required)
     * @param  \DateTime $end_date The end date of the timeframe for which you want to return the data in YYYY-MM-DD format. (required)
     * @param  string $group_ids The ID(s) of the group(s) for which you want to return data.  Please refer to the Quick Start Guide to learn how to retrieve the IDs of your groups.  If you do not specify a &#x60;group_id&#x60;, the default value is &#x60;All Keywords&#x60; group, which means data will be returned for all keywords in the campaign. (optional)
     * @param  int $limit This parameter determines the maximum number of records to return in a single request.   Maximum Value: 1000 records per request  If you do not specify a &#x60;limit&#x60;, the default number of records returned per request will be 100. (optional)
     * @param  int $offset This parameter specifies the starting point within the collection of resource results. It&#x27;s typically used with the &#x60;limit&#x60; parameter to implement pagination.  If you do not specify an &#x60;offset&#x60;, the API will start from the first record. (optional)
     *
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Swagger\Client\Model\GroupDetails[], HTTP status code, HTTP response headers (array of strings)
     */
    public function rankTrackerV30GroupsDataGetWithHttpInfo($campaign_id, $start_date, $end_date, $group_ids = null, $limit = null, $offset = null)
    {
        $returnType = '\Swagger\Client\Model\GroupDetails[]';
        $request = $this->rankTrackerV30GroupsDataGetRequest($campaign_id, $start_date, $end_date, $group_ids, $limit, $offset);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? $e->getResponse()->getBody()->getContents() : null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    $response->getBody()
                );
            }

            $responseBody = $response->getBody();
            if ($returnType === '\SplFileObject') {
                $content = $responseBody; //stream goes to serializer
            } else {
                $content = $responseBody->getContents();
                if (!in_array($returnType, ['string','integer','bool'])) {
                    $content = json_decode($content);
                }
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Swagger\Client\Model\GroupDetails[]',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation rankTrackerV30GroupsDataGetAsync
     *
     * Get Groups Data
     *
     * @param  int $campaign_id This parameter specifies the ID of the campaign for which you want to return data.   Please refer to the Quick Start Guide to learn how to retrieve the IDs of your campaigns. (required)
     * @param  \DateTime $start_date The start date of the timeframe for which you want to return the data in YYYY-MM-DD format. (required)
     * @param  \DateTime $end_date The end date of the timeframe for which you want to return the data in YYYY-MM-DD format. (required)
     * @param  string $group_ids The ID(s) of the group(s) for which you want to return data.  Please refer to the Quick Start Guide to learn how to retrieve the IDs of your groups.  If you do not specify a &#x60;group_id&#x60;, the default value is &#x60;All Keywords&#x60; group, which means data will be returned for all keywords in the campaign. (optional)
     * @param  int $limit This parameter determines the maximum number of records to return in a single request.   Maximum Value: 1000 records per request  If you do not specify a &#x60;limit&#x60;, the default number of records returned per request will be 100. (optional)
     * @param  int $offset This parameter specifies the starting point within the collection of resource results. It&#x27;s typically used with the &#x60;limit&#x60; parameter to implement pagination.  If you do not specify an &#x60;offset&#x60;, the API will start from the first record. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function rankTrackerV30GroupsDataGetAsync($campaign_id, $start_date, $end_date, $group_ids = null, $limit = null, $offset = null)
    {
        return $this->rankTrackerV30GroupsDataGetAsyncWithHttpInfo($campaign_id, $start_date, $end_date, $group_ids, $limit, $offset)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation rankTrackerV30GroupsDataGetAsyncWithHttpInfo
     *
     * Get Groups Data
     *
     * @param  int $campaign_id This parameter specifies the ID of the campaign for which you want to return data.   Please refer to the Quick Start Guide to learn how to retrieve the IDs of your campaigns. (required)
     * @param  \DateTime $start_date The start date of the timeframe for which you want to return the data in YYYY-MM-DD format. (required)
     * @param  \DateTime $end_date The end date of the timeframe for which you want to return the data in YYYY-MM-DD format. (required)
     * @param  string $group_ids The ID(s) of the group(s) for which you want to return data.  Please refer to the Quick Start Guide to learn how to retrieve the IDs of your groups.  If you do not specify a &#x60;group_id&#x60;, the default value is &#x60;All Keywords&#x60; group, which means data will be returned for all keywords in the campaign. (optional)
     * @param  int $limit This parameter determines the maximum number of records to return in a single request.   Maximum Value: 1000 records per request  If you do not specify a &#x60;limit&#x60;, the default number of records returned per request will be 100. (optional)
     * @param  int $offset This parameter specifies the starting point within the collection of resource results. It&#x27;s typically used with the &#x60;limit&#x60; parameter to implement pagination.  If you do not specify an &#x60;offset&#x60;, the API will start from the first record. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function rankTrackerV30GroupsDataGetAsyncWithHttpInfo($campaign_id, $start_date, $end_date, $group_ids = null, $limit = null, $offset = null)
    {
        $returnType = '\Swagger\Client\Model\GroupDetails[]';
        $request = $this->rankTrackerV30GroupsDataGetRequest($campaign_id, $start_date, $end_date, $group_ids, $limit, $offset);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    $responseBody = $response->getBody();
                    if ($returnType === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = $responseBody->getContents();
                        if ($returnType !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, $returnType, []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'rankTrackerV30GroupsDataGet'
     *
     * @param  int $campaign_id This parameter specifies the ID of the campaign for which you want to return data.   Please refer to the Quick Start Guide to learn how to retrieve the IDs of your campaigns. (required)
     * @param  \DateTime $start_date The start date of the timeframe for which you want to return the data in YYYY-MM-DD format. (required)
     * @param  \DateTime $end_date The end date of the timeframe for which you want to return the data in YYYY-MM-DD format. (required)
     * @param  string $group_ids The ID(s) of the group(s) for which you want to return data.  Please refer to the Quick Start Guide to learn how to retrieve the IDs of your groups.  If you do not specify a &#x60;group_id&#x60;, the default value is &#x60;All Keywords&#x60; group, which means data will be returned for all keywords in the campaign. (optional)
     * @param  int $limit This parameter determines the maximum number of records to return in a single request.   Maximum Value: 1000 records per request  If you do not specify a &#x60;limit&#x60;, the default number of records returned per request will be 100. (optional)
     * @param  int $offset This parameter specifies the starting point within the collection of resource results. It&#x27;s typically used with the &#x60;limit&#x60; parameter to implement pagination.  If you do not specify an &#x60;offset&#x60;, the API will start from the first record. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function rankTrackerV30GroupsDataGetRequest($campaign_id, $start_date, $end_date, $group_ids = null, $limit = null, $offset = null)
    {
        // verify the required parameter 'campaign_id' is set
        if ($campaign_id === null || (is_array($campaign_id) && count($campaign_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $campaign_id when calling rankTrackerV30GroupsDataGet'
            );
        }
        // verify the required parameter 'start_date' is set
        if ($start_date === null || (is_array($start_date) && count($start_date) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $start_date when calling rankTrackerV30GroupsDataGet'
            );
        }
        // verify the required parameter 'end_date' is set
        if ($end_date === null || (is_array($end_date) && count($end_date) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $end_date when calling rankTrackerV30GroupsDataGet'
            );
        }

        $resourcePath = '/rank-tracker/v3.0/groups/data';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        if ($campaign_id !== null) {
            $queryParams['campaign_id'] = ObjectSerializer::toQueryValue($campaign_id, 'int32');
        }
        // query params
        if ($start_date !== null) {
            $queryParams['start_date'] = ObjectSerializer::toQueryValue($start_date, 'date');
        }
        // query params
        if ($end_date !== null) {
            $queryParams['end_date'] = ObjectSerializer::toQueryValue($end_date, 'date');
        }
        // query params
        if ($group_ids !== null) {
            $queryParams['group_ids'] = ObjectSerializer::toQueryValue($group_ids, null);
        }
        // query params
        if ($limit !== null) {
            $queryParams['limit'] = ObjectSerializer::toQueryValue($limit, null);
        }
        // query params
        if ($offset !== null) {
            $queryParams['offset'] = ObjectSerializer::toQueryValue($offset, null);
        }


        // body params
        $_tempBody = null;

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                []
            );
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            // $_tempBody is the method argument, if present
            $httpBody = $_tempBody;
            // \stdClass has no __toString(), so we should encode it manually
            if ($httpBody instanceof \stdClass && $headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($httpBody);
            }
        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $multipartContents[] = [
                        'name' => $formParamName,
                        'contents' => $formParamValue
                    ];
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($formParams);

            } else {
                // for HTTP post (form)
                $httpBody = \GuzzleHttp\Psr7\Query::build($formParams);
            }
        }

        // this endpoint requires API key authentication
        $apiKey = $this->config->getApiKeyWithPrefix('Authorization');
        if ($apiKey !== null) {
            $headers['Authorization'] = $apiKey;
        }

        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $query = \GuzzleHttp\Psr7\Query::build($queryParams);
        return new Request(
            'GET',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation rankTrackerV30GroupsGet
     *
     * Get Groups List
     *
     * @param  int $campaign_id The campaign ID for which the group structure will be returned.  Please refer to the Quick Start Guide to learn how to retrieve the IDs of your campaigns. (required)
     *
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Swagger\Client\Model\Group[]
     */
    public function rankTrackerV30GroupsGet($campaign_id)
    {
        list($response) = $this->rankTrackerV30GroupsGetWithHttpInfo($campaign_id);
        return $response;
    }

    /**
     * Operation rankTrackerV30GroupsGetWithHttpInfo
     *
     * Get Groups List
     *
     * @param  int $campaign_id The campaign ID for which the group structure will be returned.  Please refer to the Quick Start Guide to learn how to retrieve the IDs of your campaigns. (required)
     *
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Swagger\Client\Model\Group[], HTTP status code, HTTP response headers (array of strings)
     */
    public function rankTrackerV30GroupsGetWithHttpInfo($campaign_id)
    {
        $returnType = '\Swagger\Client\Model\Group[]';
        $request = $this->rankTrackerV30GroupsGetRequest($campaign_id);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? $e->getResponse()->getBody()->getContents() : null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    $response->getBody()
                );
            }

            $responseBody = $response->getBody();
            if ($returnType === '\SplFileObject') {
                $content = $responseBody; //stream goes to serializer
            } else {
                $content = $responseBody->getContents();
                if (!in_array($returnType, ['string','integer','bool'])) {
                    $content = json_decode($content);
                }
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Swagger\Client\Model\Group[]',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation rankTrackerV30GroupsGetAsync
     *
     * Get Groups List
     *
     * @param  int $campaign_id The campaign ID for which the group structure will be returned.  Please refer to the Quick Start Guide to learn how to retrieve the IDs of your campaigns. (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function rankTrackerV30GroupsGetAsync($campaign_id)
    {
        return $this->rankTrackerV30GroupsGetAsyncWithHttpInfo($campaign_id)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation rankTrackerV30GroupsGetAsyncWithHttpInfo
     *
     * Get Groups List
     *
     * @param  int $campaign_id The campaign ID for which the group structure will be returned.  Please refer to the Quick Start Guide to learn how to retrieve the IDs of your campaigns. (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function rankTrackerV30GroupsGetAsyncWithHttpInfo($campaign_id)
    {
        $returnType = '\Swagger\Client\Model\Group[]';
        $request = $this->rankTrackerV30GroupsGetRequest($campaign_id);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    $responseBody = $response->getBody();
                    if ($returnType === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = $responseBody->getContents();
                        if ($returnType !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, $returnType, []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'rankTrackerV30GroupsGet'
     *
     * @param  int $campaign_id The campaign ID for which the group structure will be returned.  Please refer to the Quick Start Guide to learn how to retrieve the IDs of your campaigns. (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function rankTrackerV30GroupsGetRequest($campaign_id)
    {
        // verify the required parameter 'campaign_id' is set
        if ($campaign_id === null || (is_array($campaign_id) && count($campaign_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $campaign_id when calling rankTrackerV30GroupsGet'
            );
        }

        $resourcePath = '/rank-tracker/v3.0/groups';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        if ($campaign_id !== null) {
            $queryParams['campaign_id'] = ObjectSerializer::toQueryValue($campaign_id, null);
        }


        // body params
        $_tempBody = null;

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                []
            );
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            // $_tempBody is the method argument, if present
            $httpBody = $_tempBody;
            // \stdClass has no __toString(), so we should encode it manually
            if ($httpBody instanceof \stdClass && $headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($httpBody);
            }
        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $multipartContents[] = [
                        'name' => $formParamName,
                        'contents' => $formParamValue
                    ];
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($formParams);

            } else {
                // for HTTP post (form)
                $httpBody = \GuzzleHttp\Psr7\Query::build($formParams);
            }
        }

        // this endpoint requires API key authentication
        $apiKey = $this->config->getApiKeyWithPrefix('Authorization');
        if ($apiKey !== null) {
            $headers['Authorization'] = $apiKey;
        }

        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $query = \GuzzleHttp\Psr7\Query::build($queryParams);
        return new Request(
            'GET',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation rankTrackerV30KeywordsCompetitionGet
     *
     * Get Keywords Competition Data
     *
     * @param  int $campaign_id The ID of the campaign for which keyword competitor ranking data must be returned.   Please refer to the Quick Start Guide to learn how to retrieve the IDs of your campaigns. (required)
     * @param  \DateTime $start_date The start date of the date range to get ranking data for, in YYYY-MM-DD format. This is the earliest date of rankings to include. (required)
     * @param  \DateTime $end_date The end date of the date range to get ranking data for, in YYYY-MM-DD format. This is the most recent date of rankings to include. (required)
     * @param  string $device The device type to get ranking data for–either &#x60;desktop&#x60; or &#x60;mobile&#x60;.  The default selection is &#x60;desktop&#x60;. (required)
     * @param  string $search Allows you to filter the results based on a keyword search. The API will return only those records where the keyword matches (fully or partially) the provided search term. (optional)
     * @param  string $keyword_ids The IDs of the keywords for which you want to get competitor ranking data. &#x60;keyword_ids&#x60; should be a comma-separated list of keyword IDs.   Please refer to the Quick Start Guide to learn how to retrieve the IDs of your keywords.  If you do not specify &#x60;keyword_ids&#x60;, the API will return data for all keywords in the campaign that meet the other specified criteria (e.g. &#x60;group_id&#x60;). (optional)
     * @param  int $group_id The ID of a specific group in the campaign to get competitor ranking data for. If not specified, returns data for all of the keywords in the campaign.  Please refer to the Quick Start Guide to learn how to retrieve the IDs of your groups.  If you do not specify a &#x60;group_id&#x60;, the default value is the &#x60;All Keywords&#x60; group, which means data will be returned for all active keywords in the campaign. (optional)
     * @param  string $competitors An optional list of competitor domain names to filter the results by. The ranking data returned will only include the specified competitors. This parameter should be an array of strings containing one or more competitor domains, formatted as follows: &#x60;[\&quot;examplecompetitor1.com\&quot;, \&quot;examplecompetitor2.net\&quot;]&#x60;   If you do not specify the competitors, the endpoint will return data for the competitors configured in the interface for the specified keyword group. (optional)
     * @param  int $limit Determines the maximum number of records to return in a single request. Maximum Value: 1000 records per request  If you do not specify a &#x60;limit&#x60;, the default number of records returned per request will be 100. (optional)
     * @param  int $offset The starting index within the results to begin returning data. Typically used with the &#x60;limit&#x60; parameter to implement pagination.  If you do not specify an &#x60;offset&#x60;, the API will start from the first record. (optional)
     * @param  string $order_by This parameter enables you to sort the returned data based on the parameter specified. Allowed values:  &#x60;keyword&#x60;  &#x60;rank&#x60;  &#x60;rank_trend&#x60;: Sorts the data based on the trend in keyword ranking.   If you do not specify the &#x60;order_by&#x60; parameter, the data will be sorted by default by the keyword name (&#x60;keyword&#x60;). (optional)
     * @param  string $order_direction Determines the sorting direction of the &#x60;order_by&#x60; field. You can sort the data in either ascending (&#x60;asc&#x60;) or descending (&#x60;desc&#x60;) order.  Note: The &#x60;order_direction&#x60; parameter works in conjunction with the &#x60;order_by&#x60; parameter. Use it to specify the direction of the sort after choosing the field to order by.  If you do not specify an &#x60;order_direction&#x60;, the default is &#x60;asc&#x60;. (optional)
     *
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Swagger\Client\Model\KeywordCompetition
     */
    public function rankTrackerV30KeywordsCompetitionGet($campaign_id, $start_date, $end_date, $device, $search = null, $keyword_ids = null, $group_id = null, $competitors = null, $limit = null, $offset = null, $order_by = null, $order_direction = null)
    {
        list($response) = $this->rankTrackerV30KeywordsCompetitionGetWithHttpInfo($campaign_id, $start_date, $end_date, $device, $search, $keyword_ids, $group_id, $competitors, $limit, $offset, $order_by, $order_direction);
        return $response;
    }

    /**
     * Operation rankTrackerV30KeywordsCompetitionGetWithHttpInfo
     *
     * Get Keywords Competition Data
     *
     * @param  int $campaign_id The ID of the campaign for which keyword competitor ranking data must be returned.   Please refer to the Quick Start Guide to learn how to retrieve the IDs of your campaigns. (required)
     * @param  \DateTime $start_date The start date of the date range to get ranking data for, in YYYY-MM-DD format. This is the earliest date of rankings to include. (required)
     * @param  \DateTime $end_date The end date of the date range to get ranking data for, in YYYY-MM-DD format. This is the most recent date of rankings to include. (required)
     * @param  string $device The device type to get ranking data for–either &#x60;desktop&#x60; or &#x60;mobile&#x60;.  The default selection is &#x60;desktop&#x60;. (required)
     * @param  string $search Allows you to filter the results based on a keyword search. The API will return only those records where the keyword matches (fully or partially) the provided search term. (optional)
     * @param  string $keyword_ids The IDs of the keywords for which you want to get competitor ranking data. &#x60;keyword_ids&#x60; should be a comma-separated list of keyword IDs.   Please refer to the Quick Start Guide to learn how to retrieve the IDs of your keywords.  If you do not specify &#x60;keyword_ids&#x60;, the API will return data for all keywords in the campaign that meet the other specified criteria (e.g. &#x60;group_id&#x60;). (optional)
     * @param  int $group_id The ID of a specific group in the campaign to get competitor ranking data for. If not specified, returns data for all of the keywords in the campaign.  Please refer to the Quick Start Guide to learn how to retrieve the IDs of your groups.  If you do not specify a &#x60;group_id&#x60;, the default value is the &#x60;All Keywords&#x60; group, which means data will be returned for all active keywords in the campaign. (optional)
     * @param  string $competitors An optional list of competitor domain names to filter the results by. The ranking data returned will only include the specified competitors. This parameter should be an array of strings containing one or more competitor domains, formatted as follows: &#x60;[\&quot;examplecompetitor1.com\&quot;, \&quot;examplecompetitor2.net\&quot;]&#x60;   If you do not specify the competitors, the endpoint will return data for the competitors configured in the interface for the specified keyword group. (optional)
     * @param  int $limit Determines the maximum number of records to return in a single request. Maximum Value: 1000 records per request  If you do not specify a &#x60;limit&#x60;, the default number of records returned per request will be 100. (optional)
     * @param  int $offset The starting index within the results to begin returning data. Typically used with the &#x60;limit&#x60; parameter to implement pagination.  If you do not specify an &#x60;offset&#x60;, the API will start from the first record. (optional)
     * @param  string $order_by This parameter enables you to sort the returned data based on the parameter specified. Allowed values:  &#x60;keyword&#x60;  &#x60;rank&#x60;  &#x60;rank_trend&#x60;: Sorts the data based on the trend in keyword ranking.   If you do not specify the &#x60;order_by&#x60; parameter, the data will be sorted by default by the keyword name (&#x60;keyword&#x60;). (optional)
     * @param  string $order_direction Determines the sorting direction of the &#x60;order_by&#x60; field. You can sort the data in either ascending (&#x60;asc&#x60;) or descending (&#x60;desc&#x60;) order.  Note: The &#x60;order_direction&#x60; parameter works in conjunction with the &#x60;order_by&#x60; parameter. Use it to specify the direction of the sort after choosing the field to order by.  If you do not specify an &#x60;order_direction&#x60;, the default is &#x60;asc&#x60;. (optional)
     *
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Swagger\Client\Model\KeywordCompetition, HTTP status code, HTTP response headers (array of strings)
     */
    public function rankTrackerV30KeywordsCompetitionGetWithHttpInfo($campaign_id, $start_date, $end_date, $device, $search = null, $keyword_ids = null, $group_id = null, $competitors = null, $limit = null, $offset = null, $order_by = null, $order_direction = null)
    {
        $returnType = '\Swagger\Client\Model\KeywordCompetition';
        $request = $this->rankTrackerV30KeywordsCompetitionGetRequest($campaign_id, $start_date, $end_date, $device, $search, $keyword_ids, $group_id, $competitors, $limit, $offset, $order_by, $order_direction);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? $e->getResponse()->getBody()->getContents() : null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    $response->getBody()
                );
            }

            $responseBody = $response->getBody();
            if ($returnType === '\SplFileObject') {
                $content = $responseBody; //stream goes to serializer
            } else {
                $content = $responseBody->getContents();
                if (!in_array($returnType, ['string','integer','bool'])) {
                    $content = json_decode($content);
                }
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Swagger\Client\Model\KeywordCompetition',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation rankTrackerV30KeywordsCompetitionGetAsync
     *
     * Get Keywords Competition Data
     *
     * @param  int $campaign_id The ID of the campaign for which keyword competitor ranking data must be returned.   Please refer to the Quick Start Guide to learn how to retrieve the IDs of your campaigns. (required)
     * @param  \DateTime $start_date The start date of the date range to get ranking data for, in YYYY-MM-DD format. This is the earliest date of rankings to include. (required)
     * @param  \DateTime $end_date The end date of the date range to get ranking data for, in YYYY-MM-DD format. This is the most recent date of rankings to include. (required)
     * @param  string $device The device type to get ranking data for–either &#x60;desktop&#x60; or &#x60;mobile&#x60;.  The default selection is &#x60;desktop&#x60;. (required)
     * @param  string $search Allows you to filter the results based on a keyword search. The API will return only those records where the keyword matches (fully or partially) the provided search term. (optional)
     * @param  string $keyword_ids The IDs of the keywords for which you want to get competitor ranking data. &#x60;keyword_ids&#x60; should be a comma-separated list of keyword IDs.   Please refer to the Quick Start Guide to learn how to retrieve the IDs of your keywords.  If you do not specify &#x60;keyword_ids&#x60;, the API will return data for all keywords in the campaign that meet the other specified criteria (e.g. &#x60;group_id&#x60;). (optional)
     * @param  int $group_id The ID of a specific group in the campaign to get competitor ranking data for. If not specified, returns data for all of the keywords in the campaign.  Please refer to the Quick Start Guide to learn how to retrieve the IDs of your groups.  If you do not specify a &#x60;group_id&#x60;, the default value is the &#x60;All Keywords&#x60; group, which means data will be returned for all active keywords in the campaign. (optional)
     * @param  string $competitors An optional list of competitor domain names to filter the results by. The ranking data returned will only include the specified competitors. This parameter should be an array of strings containing one or more competitor domains, formatted as follows: &#x60;[\&quot;examplecompetitor1.com\&quot;, \&quot;examplecompetitor2.net\&quot;]&#x60;   If you do not specify the competitors, the endpoint will return data for the competitors configured in the interface for the specified keyword group. (optional)
     * @param  int $limit Determines the maximum number of records to return in a single request. Maximum Value: 1000 records per request  If you do not specify a &#x60;limit&#x60;, the default number of records returned per request will be 100. (optional)
     * @param  int $offset The starting index within the results to begin returning data. Typically used with the &#x60;limit&#x60; parameter to implement pagination.  If you do not specify an &#x60;offset&#x60;, the API will start from the first record. (optional)
     * @param  string $order_by This parameter enables you to sort the returned data based on the parameter specified. Allowed values:  &#x60;keyword&#x60;  &#x60;rank&#x60;  &#x60;rank_trend&#x60;: Sorts the data based on the trend in keyword ranking.   If you do not specify the &#x60;order_by&#x60; parameter, the data will be sorted by default by the keyword name (&#x60;keyword&#x60;). (optional)
     * @param  string $order_direction Determines the sorting direction of the &#x60;order_by&#x60; field. You can sort the data in either ascending (&#x60;asc&#x60;) or descending (&#x60;desc&#x60;) order.  Note: The &#x60;order_direction&#x60; parameter works in conjunction with the &#x60;order_by&#x60; parameter. Use it to specify the direction of the sort after choosing the field to order by.  If you do not specify an &#x60;order_direction&#x60;, the default is &#x60;asc&#x60;. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function rankTrackerV30KeywordsCompetitionGetAsync($campaign_id, $start_date, $end_date, $device, $search = null, $keyword_ids = null, $group_id = null, $competitors = null, $limit = null, $offset = null, $order_by = null, $order_direction = null)
    {
        return $this->rankTrackerV30KeywordsCompetitionGetAsyncWithHttpInfo($campaign_id, $start_date, $end_date, $device, $search, $keyword_ids, $group_id, $competitors, $limit, $offset, $order_by, $order_direction)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation rankTrackerV30KeywordsCompetitionGetAsyncWithHttpInfo
     *
     * Get Keywords Competition Data
     *
     * @param  int $campaign_id The ID of the campaign for which keyword competitor ranking data must be returned.   Please refer to the Quick Start Guide to learn how to retrieve the IDs of your campaigns. (required)
     * @param  \DateTime $start_date The start date of the date range to get ranking data for, in YYYY-MM-DD format. This is the earliest date of rankings to include. (required)
     * @param  \DateTime $end_date The end date of the date range to get ranking data for, in YYYY-MM-DD format. This is the most recent date of rankings to include. (required)
     * @param  string $device The device type to get ranking data for–either &#x60;desktop&#x60; or &#x60;mobile&#x60;.  The default selection is &#x60;desktop&#x60;. (required)
     * @param  string $search Allows you to filter the results based on a keyword search. The API will return only those records where the keyword matches (fully or partially) the provided search term. (optional)
     * @param  string $keyword_ids The IDs of the keywords for which you want to get competitor ranking data. &#x60;keyword_ids&#x60; should be a comma-separated list of keyword IDs.   Please refer to the Quick Start Guide to learn how to retrieve the IDs of your keywords.  If you do not specify &#x60;keyword_ids&#x60;, the API will return data for all keywords in the campaign that meet the other specified criteria (e.g. &#x60;group_id&#x60;). (optional)
     * @param  int $group_id The ID of a specific group in the campaign to get competitor ranking data for. If not specified, returns data for all of the keywords in the campaign.  Please refer to the Quick Start Guide to learn how to retrieve the IDs of your groups.  If you do not specify a &#x60;group_id&#x60;, the default value is the &#x60;All Keywords&#x60; group, which means data will be returned for all active keywords in the campaign. (optional)
     * @param  string $competitors An optional list of competitor domain names to filter the results by. The ranking data returned will only include the specified competitors. This parameter should be an array of strings containing one or more competitor domains, formatted as follows: &#x60;[\&quot;examplecompetitor1.com\&quot;, \&quot;examplecompetitor2.net\&quot;]&#x60;   If you do not specify the competitors, the endpoint will return data for the competitors configured in the interface for the specified keyword group. (optional)
     * @param  int $limit Determines the maximum number of records to return in a single request. Maximum Value: 1000 records per request  If you do not specify a &#x60;limit&#x60;, the default number of records returned per request will be 100. (optional)
     * @param  int $offset The starting index within the results to begin returning data. Typically used with the &#x60;limit&#x60; parameter to implement pagination.  If you do not specify an &#x60;offset&#x60;, the API will start from the first record. (optional)
     * @param  string $order_by This parameter enables you to sort the returned data based on the parameter specified. Allowed values:  &#x60;keyword&#x60;  &#x60;rank&#x60;  &#x60;rank_trend&#x60;: Sorts the data based on the trend in keyword ranking.   If you do not specify the &#x60;order_by&#x60; parameter, the data will be sorted by default by the keyword name (&#x60;keyword&#x60;). (optional)
     * @param  string $order_direction Determines the sorting direction of the &#x60;order_by&#x60; field. You can sort the data in either ascending (&#x60;asc&#x60;) or descending (&#x60;desc&#x60;) order.  Note: The &#x60;order_direction&#x60; parameter works in conjunction with the &#x60;order_by&#x60; parameter. Use it to specify the direction of the sort after choosing the field to order by.  If you do not specify an &#x60;order_direction&#x60;, the default is &#x60;asc&#x60;. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function rankTrackerV30KeywordsCompetitionGetAsyncWithHttpInfo($campaign_id, $start_date, $end_date, $device, $search = null, $keyword_ids = null, $group_id = null, $competitors = null, $limit = null, $offset = null, $order_by = null, $order_direction = null)
    {
        $returnType = '\Swagger\Client\Model\KeywordCompetition';
        $request = $this->rankTrackerV30KeywordsCompetitionGetRequest($campaign_id, $start_date, $end_date, $device, $search, $keyword_ids, $group_id, $competitors, $limit, $offset, $order_by, $order_direction);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    $responseBody = $response->getBody();
                    if ($returnType === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = $responseBody->getContents();
                        if ($returnType !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, $returnType, []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'rankTrackerV30KeywordsCompetitionGet'
     *
     * @param  int $campaign_id The ID of the campaign for which keyword competitor ranking data must be returned.   Please refer to the Quick Start Guide to learn how to retrieve the IDs of your campaigns. (required)
     * @param  \DateTime $start_date The start date of the date range to get ranking data for, in YYYY-MM-DD format. This is the earliest date of rankings to include. (required)
     * @param  \DateTime $end_date The end date of the date range to get ranking data for, in YYYY-MM-DD format. This is the most recent date of rankings to include. (required)
     * @param  string $device The device type to get ranking data for–either &#x60;desktop&#x60; or &#x60;mobile&#x60;.  The default selection is &#x60;desktop&#x60;. (required)
     * @param  string $search Allows you to filter the results based on a keyword search. The API will return only those records where the keyword matches (fully or partially) the provided search term. (optional)
     * @param  string $keyword_ids The IDs of the keywords for which you want to get competitor ranking data. &#x60;keyword_ids&#x60; should be a comma-separated list of keyword IDs.   Please refer to the Quick Start Guide to learn how to retrieve the IDs of your keywords.  If you do not specify &#x60;keyword_ids&#x60;, the API will return data for all keywords in the campaign that meet the other specified criteria (e.g. &#x60;group_id&#x60;). (optional)
     * @param  int $group_id The ID of a specific group in the campaign to get competitor ranking data for. If not specified, returns data for all of the keywords in the campaign.  Please refer to the Quick Start Guide to learn how to retrieve the IDs of your groups.  If you do not specify a &#x60;group_id&#x60;, the default value is the &#x60;All Keywords&#x60; group, which means data will be returned for all active keywords in the campaign. (optional)
     * @param  string $competitors An optional list of competitor domain names to filter the results by. The ranking data returned will only include the specified competitors. This parameter should be an array of strings containing one or more competitor domains, formatted as follows: &#x60;[\&quot;examplecompetitor1.com\&quot;, \&quot;examplecompetitor2.net\&quot;]&#x60;   If you do not specify the competitors, the endpoint will return data for the competitors configured in the interface for the specified keyword group. (optional)
     * @param  int $limit Determines the maximum number of records to return in a single request. Maximum Value: 1000 records per request  If you do not specify a &#x60;limit&#x60;, the default number of records returned per request will be 100. (optional)
     * @param  int $offset The starting index within the results to begin returning data. Typically used with the &#x60;limit&#x60; parameter to implement pagination.  If you do not specify an &#x60;offset&#x60;, the API will start from the first record. (optional)
     * @param  string $order_by This parameter enables you to sort the returned data based on the parameter specified. Allowed values:  &#x60;keyword&#x60;  &#x60;rank&#x60;  &#x60;rank_trend&#x60;: Sorts the data based on the trend in keyword ranking.   If you do not specify the &#x60;order_by&#x60; parameter, the data will be sorted by default by the keyword name (&#x60;keyword&#x60;). (optional)
     * @param  string $order_direction Determines the sorting direction of the &#x60;order_by&#x60; field. You can sort the data in either ascending (&#x60;asc&#x60;) or descending (&#x60;desc&#x60;) order.  Note: The &#x60;order_direction&#x60; parameter works in conjunction with the &#x60;order_by&#x60; parameter. Use it to specify the direction of the sort after choosing the field to order by.  If you do not specify an &#x60;order_direction&#x60;, the default is &#x60;asc&#x60;. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function rankTrackerV30KeywordsCompetitionGetRequest($campaign_id, $start_date, $end_date, $device, $search = null, $keyword_ids = null, $group_id = null, $competitors = null, $limit = null, $offset = null, $order_by = null, $order_direction = null)
    {
        // verify the required parameter 'campaign_id' is set
        if ($campaign_id === null || (is_array($campaign_id) && count($campaign_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $campaign_id when calling rankTrackerV30KeywordsCompetitionGet'
            );
        }
        // verify the required parameter 'start_date' is set
        if ($start_date === null || (is_array($start_date) && count($start_date) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $start_date when calling rankTrackerV30KeywordsCompetitionGet'
            );
        }
        // verify the required parameter 'end_date' is set
        if ($end_date === null || (is_array($end_date) && count($end_date) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $end_date when calling rankTrackerV30KeywordsCompetitionGet'
            );
        }
        // verify the required parameter 'device' is set
        if ($device === null || (is_array($device) && count($device) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $device when calling rankTrackerV30KeywordsCompetitionGet'
            );
        }

        $resourcePath = '/rank-tracker/v3.0/keywords/competition';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        if ($campaign_id !== null) {
            $queryParams['campaign_id'] = ObjectSerializer::toQueryValue($campaign_id, null);
        }
        // query params
        if ($start_date !== null) {
            $queryParams['start_date'] = ObjectSerializer::toQueryValue($start_date, 'date');
        }
        // query params
        if ($end_date !== null) {
            $queryParams['end_date'] = ObjectSerializer::toQueryValue($end_date, 'date');
        }
        // query params
        if ($search !== null) {
            $queryParams['search'] = ObjectSerializer::toQueryValue($search, null);
        }
        // query params
        if ($device !== null) {
            $queryParams['device'] = ObjectSerializer::toQueryValue($device, null);
        }
        // query params
        if ($keyword_ids !== null) {
            $queryParams['keyword_ids'] = ObjectSerializer::toQueryValue($keyword_ids, null);
        }
        // query params
        if ($group_id !== null) {
            $queryParams['group_id'] = ObjectSerializer::toQueryValue($group_id, null);
        }
        // query params
        if ($competitors !== null) {
            $queryParams['competitors'] = ObjectSerializer::toQueryValue($competitors, null);
        }
        // query params
        if ($limit !== null) {
            $queryParams['limit'] = ObjectSerializer::toQueryValue($limit, null);
        }
        // query params
        if ($offset !== null) {
            $queryParams['offset'] = ObjectSerializer::toQueryValue($offset, null);
        }
        // query params
        if ($order_by !== null) {
            $queryParams['order_by'] = ObjectSerializer::toQueryValue($order_by, null);
        }
        // query params
        if ($order_direction !== null) {
            $queryParams['order_direction'] = ObjectSerializer::toQueryValue($order_direction, null);
        }


        // body params
        $_tempBody = null;

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                []
            );
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            // $_tempBody is the method argument, if present
            $httpBody = $_tempBody;
            // \stdClass has no __toString(), so we should encode it manually
            if ($httpBody instanceof \stdClass && $headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($httpBody);
            }
        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $multipartContents[] = [
                        'name' => $formParamName,
                        'contents' => $formParamValue
                    ];
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($formParams);

            } else {
                // for HTTP post (form)
                $httpBody = \GuzzleHttp\Psr7\Query::build($formParams);
            }
        }

        // this endpoint requires API key authentication
        $apiKey = $this->config->getApiKeyWithPrefix('Authorization');
        if ($apiKey !== null) {
            $headers['Authorization'] = $apiKey;
        }

        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $query = \GuzzleHttp\Psr7\Query::build($queryParams);
        return new Request(
            'GET',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation rankTrackerV30KeywordsDailyRanksGet
     *
     * Get Daily Keyword Ranks
     *
     * @param  int $campaign_id This parameter specifies the ID of the campaign for which you want to return data.   Please refer to the Quick Start Guide to learn how to retrieve the IDs of your campaigns. (required)
     * @param  \DateTime $start_date The start date of the timeframe for which you want to return the data, in YYYY-MM-DD format. (required)
     * @param  \DateTime $end_date The end date of the timeframe for which you want to return the data, in YYYY-MM-DD format. (required)
     * @param  string $search The &#x60;search&#x60; parameter allows you to filter the results based on a keyword search. The API will return only those records where the keyword matches (fully or partially) the provided search term.  The search parameter is case-insensitive, allowing partial matches irrespective of casing. (optional)
     * @param  string $domain The domain name for which the ranks will be returned.   If no &#x60;domain&#x60; is provided, the endpoint will return the data for the campaign&#x27;s website. (optional)
     * @param  string $group_id The IDs of specific groups in the campaign to get keyword data for.   Please refer to the Quick Start Guide to learn how to retrieve the IDs of your groups.   If you do not specify a &#x60;group_id&#x60;, the default value is the &#x60;All Keywords&#x60; group, which means data will be returned for all active keywords in the campaign. (optional)
     * @param  string $keyword_ids The IDs of the keywords for which you want to return data. keyword_idsshould be a comma-separated list of keyword IDs.   Please refer to the Quick Start Guide to learn how to retrieve the IDs of your keywords.   If you do not specify &#x60;keyword_ids&#x60;, the API will return data for all keywords that meet the other specified criteria (e.g. &#x60;group_id&#x60;). (optional)
     * @param  bool $get_archive If true, it returns data only for the archived (deleted) keywords that had been active during the requested timeframe.  The default value is &#x60;false&#x60; and will return the data only for actively tracked keywords. (optional)
     * @param  int $limit Determines the maximum number of records to return in a single request.   Maximum Value: 1000 records per request  If you do not specify a &#x60;limit&#x60;, the default number of records returned per request will be 100. (optional)
     * @param  int $offset The starting point within the collection of resource results. It&#x27;s typically used with the &#x60;limit&#x60; parameter to implement pagination.  If you do not specify an &#x60;offset&#x60;, the API will start from the first record. (optional)
     *
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Swagger\Client\Model\KeywordDailyRanks
     */
    public function rankTrackerV30KeywordsDailyRanksGet($campaign_id, $start_date, $end_date, $search = null, $domain = null, $group_id = null, $keyword_ids = null, $get_archive = null, $limit = null, $offset = null)
    {
        list($response) = $this->rankTrackerV30KeywordsDailyRanksGetWithHttpInfo($campaign_id, $start_date, $end_date, $search, $domain, $group_id, $keyword_ids, $get_archive, $limit, $offset);
        return $response;
    }

    /**
     * Operation rankTrackerV30KeywordsDailyRanksGetWithHttpInfo
     *
     * Get Daily Keyword Ranks
     *
     * @param  int $campaign_id This parameter specifies the ID of the campaign for which you want to return data.   Please refer to the Quick Start Guide to learn how to retrieve the IDs of your campaigns. (required)
     * @param  \DateTime $start_date The start date of the timeframe for which you want to return the data, in YYYY-MM-DD format. (required)
     * @param  \DateTime $end_date The end date of the timeframe for which you want to return the data, in YYYY-MM-DD format. (required)
     * @param  string $search The &#x60;search&#x60; parameter allows you to filter the results based on a keyword search. The API will return only those records where the keyword matches (fully or partially) the provided search term.  The search parameter is case-insensitive, allowing partial matches irrespective of casing. (optional)
     * @param  string $domain The domain name for which the ranks will be returned.   If no &#x60;domain&#x60; is provided, the endpoint will return the data for the campaign&#x27;s website. (optional)
     * @param  string $group_id The IDs of specific groups in the campaign to get keyword data for.   Please refer to the Quick Start Guide to learn how to retrieve the IDs of your groups.   If you do not specify a &#x60;group_id&#x60;, the default value is the &#x60;All Keywords&#x60; group, which means data will be returned for all active keywords in the campaign. (optional)
     * @param  string $keyword_ids The IDs of the keywords for which you want to return data. keyword_idsshould be a comma-separated list of keyword IDs.   Please refer to the Quick Start Guide to learn how to retrieve the IDs of your keywords.   If you do not specify &#x60;keyword_ids&#x60;, the API will return data for all keywords that meet the other specified criteria (e.g. &#x60;group_id&#x60;). (optional)
     * @param  bool $get_archive If true, it returns data only for the archived (deleted) keywords that had been active during the requested timeframe.  The default value is &#x60;false&#x60; and will return the data only for actively tracked keywords. (optional)
     * @param  int $limit Determines the maximum number of records to return in a single request.   Maximum Value: 1000 records per request  If you do not specify a &#x60;limit&#x60;, the default number of records returned per request will be 100. (optional)
     * @param  int $offset The starting point within the collection of resource results. It&#x27;s typically used with the &#x60;limit&#x60; parameter to implement pagination.  If you do not specify an &#x60;offset&#x60;, the API will start from the first record. (optional)
     *
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Swagger\Client\Model\KeywordDailyRanks, HTTP status code, HTTP response headers (array of strings)
     */
    public function rankTrackerV30KeywordsDailyRanksGetWithHttpInfo($campaign_id, $start_date, $end_date, $search = null, $domain = null, $group_id = null, $keyword_ids = null, $get_archive = null, $limit = null, $offset = null)
    {
        $returnType = '\Swagger\Client\Model\KeywordDailyRanks';
        $request = $this->rankTrackerV30KeywordsDailyRanksGetRequest($campaign_id, $start_date, $end_date, $search, $domain, $group_id, $keyword_ids, $get_archive, $limit, $offset);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? $e->getResponse()->getBody()->getContents() : null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    $response->getBody()
                );
            }

            $responseBody = $response->getBody();
            if ($returnType === '\SplFileObject') {
                $content = $responseBody; //stream goes to serializer
            } else {
                $content = $responseBody->getContents();
                if (!in_array($returnType, ['string','integer','bool'])) {
                    $content = json_decode($content);
                }
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Swagger\Client\Model\KeywordDailyRanks',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation rankTrackerV30KeywordsDailyRanksGetAsync
     *
     * Get Daily Keyword Ranks
     *
     * @param  int $campaign_id This parameter specifies the ID of the campaign for which you want to return data.   Please refer to the Quick Start Guide to learn how to retrieve the IDs of your campaigns. (required)
     * @param  \DateTime $start_date The start date of the timeframe for which you want to return the data, in YYYY-MM-DD format. (required)
     * @param  \DateTime $end_date The end date of the timeframe for which you want to return the data, in YYYY-MM-DD format. (required)
     * @param  string $search The &#x60;search&#x60; parameter allows you to filter the results based on a keyword search. The API will return only those records where the keyword matches (fully or partially) the provided search term.  The search parameter is case-insensitive, allowing partial matches irrespective of casing. (optional)
     * @param  string $domain The domain name for which the ranks will be returned.   If no &#x60;domain&#x60; is provided, the endpoint will return the data for the campaign&#x27;s website. (optional)
     * @param  string $group_id The IDs of specific groups in the campaign to get keyword data for.   Please refer to the Quick Start Guide to learn how to retrieve the IDs of your groups.   If you do not specify a &#x60;group_id&#x60;, the default value is the &#x60;All Keywords&#x60; group, which means data will be returned for all active keywords in the campaign. (optional)
     * @param  string $keyword_ids The IDs of the keywords for which you want to return data. keyword_idsshould be a comma-separated list of keyword IDs.   Please refer to the Quick Start Guide to learn how to retrieve the IDs of your keywords.   If you do not specify &#x60;keyword_ids&#x60;, the API will return data for all keywords that meet the other specified criteria (e.g. &#x60;group_id&#x60;). (optional)
     * @param  bool $get_archive If true, it returns data only for the archived (deleted) keywords that had been active during the requested timeframe.  The default value is &#x60;false&#x60; and will return the data only for actively tracked keywords. (optional)
     * @param  int $limit Determines the maximum number of records to return in a single request.   Maximum Value: 1000 records per request  If you do not specify a &#x60;limit&#x60;, the default number of records returned per request will be 100. (optional)
     * @param  int $offset The starting point within the collection of resource results. It&#x27;s typically used with the &#x60;limit&#x60; parameter to implement pagination.  If you do not specify an &#x60;offset&#x60;, the API will start from the first record. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function rankTrackerV30KeywordsDailyRanksGetAsync($campaign_id, $start_date, $end_date, $search = null, $domain = null, $group_id = null, $keyword_ids = null, $get_archive = null, $limit = null, $offset = null)
    {
        return $this->rankTrackerV30KeywordsDailyRanksGetAsyncWithHttpInfo($campaign_id, $start_date, $end_date, $search, $domain, $group_id, $keyword_ids, $get_archive, $limit, $offset)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation rankTrackerV30KeywordsDailyRanksGetAsyncWithHttpInfo
     *
     * Get Daily Keyword Ranks
     *
     * @param  int $campaign_id This parameter specifies the ID of the campaign for which you want to return data.   Please refer to the Quick Start Guide to learn how to retrieve the IDs of your campaigns. (required)
     * @param  \DateTime $start_date The start date of the timeframe for which you want to return the data, in YYYY-MM-DD format. (required)
     * @param  \DateTime $end_date The end date of the timeframe for which you want to return the data, in YYYY-MM-DD format. (required)
     * @param  string $search The &#x60;search&#x60; parameter allows you to filter the results based on a keyword search. The API will return only those records where the keyword matches (fully or partially) the provided search term.  The search parameter is case-insensitive, allowing partial matches irrespective of casing. (optional)
     * @param  string $domain The domain name for which the ranks will be returned.   If no &#x60;domain&#x60; is provided, the endpoint will return the data for the campaign&#x27;s website. (optional)
     * @param  string $group_id The IDs of specific groups in the campaign to get keyword data for.   Please refer to the Quick Start Guide to learn how to retrieve the IDs of your groups.   If you do not specify a &#x60;group_id&#x60;, the default value is the &#x60;All Keywords&#x60; group, which means data will be returned for all active keywords in the campaign. (optional)
     * @param  string $keyword_ids The IDs of the keywords for which you want to return data. keyword_idsshould be a comma-separated list of keyword IDs.   Please refer to the Quick Start Guide to learn how to retrieve the IDs of your keywords.   If you do not specify &#x60;keyword_ids&#x60;, the API will return data for all keywords that meet the other specified criteria (e.g. &#x60;group_id&#x60;). (optional)
     * @param  bool $get_archive If true, it returns data only for the archived (deleted) keywords that had been active during the requested timeframe.  The default value is &#x60;false&#x60; and will return the data only for actively tracked keywords. (optional)
     * @param  int $limit Determines the maximum number of records to return in a single request.   Maximum Value: 1000 records per request  If you do not specify a &#x60;limit&#x60;, the default number of records returned per request will be 100. (optional)
     * @param  int $offset The starting point within the collection of resource results. It&#x27;s typically used with the &#x60;limit&#x60; parameter to implement pagination.  If you do not specify an &#x60;offset&#x60;, the API will start from the first record. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function rankTrackerV30KeywordsDailyRanksGetAsyncWithHttpInfo($campaign_id, $start_date, $end_date, $search = null, $domain = null, $group_id = null, $keyword_ids = null, $get_archive = null, $limit = null, $offset = null)
    {
        $returnType = '\Swagger\Client\Model\KeywordDailyRanks';
        $request = $this->rankTrackerV30KeywordsDailyRanksGetRequest($campaign_id, $start_date, $end_date, $search, $domain, $group_id, $keyword_ids, $get_archive, $limit, $offset);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    $responseBody = $response->getBody();
                    if ($returnType === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = $responseBody->getContents();
                        if ($returnType !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, $returnType, []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'rankTrackerV30KeywordsDailyRanksGet'
     *
     * @param  int $campaign_id This parameter specifies the ID of the campaign for which you want to return data.   Please refer to the Quick Start Guide to learn how to retrieve the IDs of your campaigns. (required)
     * @param  \DateTime $start_date The start date of the timeframe for which you want to return the data, in YYYY-MM-DD format. (required)
     * @param  \DateTime $end_date The end date of the timeframe for which you want to return the data, in YYYY-MM-DD format. (required)
     * @param  string $search The &#x60;search&#x60; parameter allows you to filter the results based on a keyword search. The API will return only those records where the keyword matches (fully or partially) the provided search term.  The search parameter is case-insensitive, allowing partial matches irrespective of casing. (optional)
     * @param  string $domain The domain name for which the ranks will be returned.   If no &#x60;domain&#x60; is provided, the endpoint will return the data for the campaign&#x27;s website. (optional)
     * @param  string $group_id The IDs of specific groups in the campaign to get keyword data for.   Please refer to the Quick Start Guide to learn how to retrieve the IDs of your groups.   If you do not specify a &#x60;group_id&#x60;, the default value is the &#x60;All Keywords&#x60; group, which means data will be returned for all active keywords in the campaign. (optional)
     * @param  string $keyword_ids The IDs of the keywords for which you want to return data. keyword_idsshould be a comma-separated list of keyword IDs.   Please refer to the Quick Start Guide to learn how to retrieve the IDs of your keywords.   If you do not specify &#x60;keyword_ids&#x60;, the API will return data for all keywords that meet the other specified criteria (e.g. &#x60;group_id&#x60;). (optional)
     * @param  bool $get_archive If true, it returns data only for the archived (deleted) keywords that had been active during the requested timeframe.  The default value is &#x60;false&#x60; and will return the data only for actively tracked keywords. (optional)
     * @param  int $limit Determines the maximum number of records to return in a single request.   Maximum Value: 1000 records per request  If you do not specify a &#x60;limit&#x60;, the default number of records returned per request will be 100. (optional)
     * @param  int $offset The starting point within the collection of resource results. It&#x27;s typically used with the &#x60;limit&#x60; parameter to implement pagination.  If you do not specify an &#x60;offset&#x60;, the API will start from the first record. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function rankTrackerV30KeywordsDailyRanksGetRequest($campaign_id, $start_date, $end_date, $search = null, $domain = null, $group_id = null, $keyword_ids = null, $get_archive = null, $limit = null, $offset = null)
    {
        // verify the required parameter 'campaign_id' is set
        if ($campaign_id === null || (is_array($campaign_id) && count($campaign_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $campaign_id when calling rankTrackerV30KeywordsDailyRanksGet'
            );
        }
        // verify the required parameter 'start_date' is set
        if ($start_date === null || (is_array($start_date) && count($start_date) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $start_date when calling rankTrackerV30KeywordsDailyRanksGet'
            );
        }
        // verify the required parameter 'end_date' is set
        if ($end_date === null || (is_array($end_date) && count($end_date) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $end_date when calling rankTrackerV30KeywordsDailyRanksGet'
            );
        }

        $resourcePath = '/rank-tracker/v3.0/keywords/daily-ranks';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        if ($campaign_id !== null) {
            $queryParams['campaign_id'] = ObjectSerializer::toQueryValue($campaign_id, null);
        }
        // query params
        if ($start_date !== null) {
            $queryParams['start_date'] = ObjectSerializer::toQueryValue($start_date, 'date');
        }
        // query params
        if ($end_date !== null) {
            $queryParams['end_date'] = ObjectSerializer::toQueryValue($end_date, 'date');
        }
        // query params
        if ($search !== null) {
            $queryParams['search'] = ObjectSerializer::toQueryValue($search, null);
        }
        // query params
        if ($domain !== null) {
            $queryParams['domain'] = ObjectSerializer::toQueryValue($domain, null);
        }
        // query params
        if ($group_id !== null) {
            $queryParams['group_id'] = ObjectSerializer::toQueryValue($group_id, null);
        }
        // query params
        if ($keyword_ids !== null) {
            $queryParams['keyword_ids'] = ObjectSerializer::toQueryValue($keyword_ids, null);
        }
        // query params
        if ($get_archive !== null) {
            $queryParams['get_archive'] = ObjectSerializer::toQueryValue($get_archive, null);
        }
        // query params
        if ($limit !== null) {
            $queryParams['limit'] = ObjectSerializer::toQueryValue($limit, null);
        }
        // query params
        if ($offset !== null) {
            $queryParams['offset'] = ObjectSerializer::toQueryValue($offset, null);
        }


        // body params
        $_tempBody = null;

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                []
            );
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            // $_tempBody is the method argument, if present
            $httpBody = $_tempBody;
            // \stdClass has no __toString(), so we should encode it manually
            if ($httpBody instanceof \stdClass && $headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($httpBody);
            }
        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $multipartContents[] = [
                        'name' => $formParamName,
                        'contents' => $formParamValue
                    ];
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($formParams);

            } else {
                // for HTTP post (form)
                $httpBody = \GuzzleHttp\Psr7\Query::build($formParams);
            }
        }

        // this endpoint requires API key authentication
        $apiKey = $this->config->getApiKeyWithPrefix('Authorization');
        if ($apiKey !== null) {
            $headers['Authorization'] = $apiKey;
        }

        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $query = \GuzzleHttp\Psr7\Query::build($queryParams);
        return new Request(
            'GET',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation rankTrackerV30KeywordsGet
     *
     * Get Keyword Data
     *
     * @param  int $campaign_id This parameter specifies the ID of the campaign for which you want to return data.   Please refer to the Quick Start Guide to learn how to retrieve the IDs of your campaigns. (required)
     * @param  \DateTime $end_date This parameter specifies the end date of the timeframe for which you want to return the ranking and traffic data in YYYY-MM-DD format.  If you don&#x27;t specify an &#x60;end_date&#x60;, the default is the current day. (required)
     * @param  \DateTime $start_date This parameter specifies the start date of the timeframe for which you want to return the ranking and traffic data in YYYY-MM-DD format.  If you don&#x27;t specify a &#x60;start_date&#x60;, the default is 30 days before the &#x60;end_date&#x60;. (required)
     * @param  int $group_id The IDs of specific groups in the campaign to get keyword data for.   Please refer to the Quick Start Guide to learn how to retrieve the IDs of your groups.  If you do not specify a &#x60;group_id&#x60;, the default value is the &#x60;All Keywords&#x60; group, which means data will be returned for all active keywords in the campaign. (optional)
     * @param  string $keyword_ids This parameter allows you to specify the IDs of the keywords for which you want to return data. &#x60;keyword_ids&#x60; should be a comma-separated list of keyword IDs.  Please refer to the Quick Start Guide to learn how to retrieve the IDs of your keywords.  If you do not specify &#x60;keyword_ids&#x60;, the API will return data for all keywords that meet the other specified criteria (e.g. &#x60;group_id&#x60;). (optional)
     * @param  int $limit This parameter determines the maximum number of records to return in a single request.   Maximum Value: 1000 records per request  If you do not specify a &#x60;limit&#x60;, the default number of records returned per request will be 100. (optional)
     * @param  int $offset This parameter specifies the starting point within the collection of resource results. It&#x27;s typically used with the &#x60;limit&#x60; parameter to implement pagination.  If you do not specify an &#x60;offset&#x60;, the API will start from the first record. (optional)
     * @param  string $order_by This parameter enables you to sort the returned data based on a specified field.  The field names you can use to sort data are: - &#x60;keyword&#x60; - &#x60;search_volume&#x60; - &#x60;year-over-year&#x60; - &#x60;rank&#x60; - &#x60;rank_trend&#x60;: Sorts the data based on the trend in keyword ranking. - &#x60;rank_trend_impact&#x60;: Sorts the data based on the rank trend impact on Visibility. - &#x60;opportunity&#x60;: Sorts the data based on the keyword Opportunity score. (optional)
     * @param  string $order_direction This parameter determines the sorting direction of the &#x60;order_by&#x60; field. You can sort the data in either ascending (&#x60;asc&#x60;) or descending (&#x60;desc&#x60;) order.  Note: The &#x60;order_direction&#x60; parameter works in conjunction with the &#x60;order_by&#x60; parameter. Use it to specify the direction of the sort after choosing the field to order by with &#x60;order_by&#x60;.  If you do not specify an &#x60;order_direction&#x60;, the default is &#x60;asc&#x60;. (optional)
     * @param  string $search The &#x60;search&#x60; parameter allows you to filter the results based on a keyword search. The API will return only those records where the keyword matches (fully or partially) the provided search term. The search parameter is case-insensitive, allowing partial matches irrespective of casing. (optional)
     *
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Swagger\Client\Model\KeywordDetail[]
     */
    public function rankTrackerV30KeywordsGet($campaign_id, $end_date, $start_date, $group_id = null, $keyword_ids = null, $limit = null, $offset = null, $order_by = null, $order_direction = null, $search = null)
    {
        list($response) = $this->rankTrackerV30KeywordsGetWithHttpInfo($campaign_id, $end_date, $start_date, $group_id, $keyword_ids, $limit, $offset, $order_by, $order_direction, $search);
        return $response;
    }

    /**
     * Operation rankTrackerV30KeywordsGetWithHttpInfo
     *
     * Get Keyword Data
     *
     * @param  int $campaign_id This parameter specifies the ID of the campaign for which you want to return data.   Please refer to the Quick Start Guide to learn how to retrieve the IDs of your campaigns. (required)
     * @param  \DateTime $end_date This parameter specifies the end date of the timeframe for which you want to return the ranking and traffic data in YYYY-MM-DD format.  If you don&#x27;t specify an &#x60;end_date&#x60;, the default is the current day. (required)
     * @param  \DateTime $start_date This parameter specifies the start date of the timeframe for which you want to return the ranking and traffic data in YYYY-MM-DD format.  If you don&#x27;t specify a &#x60;start_date&#x60;, the default is 30 days before the &#x60;end_date&#x60;. (required)
     * @param  int $group_id The IDs of specific groups in the campaign to get keyword data for.   Please refer to the Quick Start Guide to learn how to retrieve the IDs of your groups.  If you do not specify a &#x60;group_id&#x60;, the default value is the &#x60;All Keywords&#x60; group, which means data will be returned for all active keywords in the campaign. (optional)
     * @param  string $keyword_ids This parameter allows you to specify the IDs of the keywords for which you want to return data. &#x60;keyword_ids&#x60; should be a comma-separated list of keyword IDs.  Please refer to the Quick Start Guide to learn how to retrieve the IDs of your keywords.  If you do not specify &#x60;keyword_ids&#x60;, the API will return data for all keywords that meet the other specified criteria (e.g. &#x60;group_id&#x60;). (optional)
     * @param  int $limit This parameter determines the maximum number of records to return in a single request.   Maximum Value: 1000 records per request  If you do not specify a &#x60;limit&#x60;, the default number of records returned per request will be 100. (optional)
     * @param  int $offset This parameter specifies the starting point within the collection of resource results. It&#x27;s typically used with the &#x60;limit&#x60; parameter to implement pagination.  If you do not specify an &#x60;offset&#x60;, the API will start from the first record. (optional)
     * @param  string $order_by This parameter enables you to sort the returned data based on a specified field.  The field names you can use to sort data are: - &#x60;keyword&#x60; - &#x60;search_volume&#x60; - &#x60;year-over-year&#x60; - &#x60;rank&#x60; - &#x60;rank_trend&#x60;: Sorts the data based on the trend in keyword ranking. - &#x60;rank_trend_impact&#x60;: Sorts the data based on the rank trend impact on Visibility. - &#x60;opportunity&#x60;: Sorts the data based on the keyword Opportunity score. (optional)
     * @param  string $order_direction This parameter determines the sorting direction of the &#x60;order_by&#x60; field. You can sort the data in either ascending (&#x60;asc&#x60;) or descending (&#x60;desc&#x60;) order.  Note: The &#x60;order_direction&#x60; parameter works in conjunction with the &#x60;order_by&#x60; parameter. Use it to specify the direction of the sort after choosing the field to order by with &#x60;order_by&#x60;.  If you do not specify an &#x60;order_direction&#x60;, the default is &#x60;asc&#x60;. (optional)
     * @param  string $search The &#x60;search&#x60; parameter allows you to filter the results based on a keyword search. The API will return only those records where the keyword matches (fully or partially) the provided search term. The search parameter is case-insensitive, allowing partial matches irrespective of casing. (optional)
     *
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Swagger\Client\Model\KeywordDetail[], HTTP status code, HTTP response headers (array of strings)
     */
    public function rankTrackerV30KeywordsGetWithHttpInfo($campaign_id, $end_date, $start_date, $group_id = null, $keyword_ids = null, $limit = null, $offset = null, $order_by = null, $order_direction = null, $search = null)
    {
        $returnType = '\Swagger\Client\Model\KeywordDetail[]';
        $request = $this->rankTrackerV30KeywordsGetRequest($campaign_id, $end_date, $start_date, $group_id, $keyword_ids, $limit, $offset, $order_by, $order_direction, $search);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? $e->getResponse()->getBody()->getContents() : null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    $response->getBody()
                );
            }

            $responseBody = $response->getBody();
            if ($returnType === '\SplFileObject') {
                $content = $responseBody; //stream goes to serializer
            } else {
                $content = $responseBody->getContents();
                if (!in_array($returnType, ['string','integer','bool'])) {
                    $content = json_decode($content);
                }
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Swagger\Client\Model\KeywordDetail[]',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation rankTrackerV30KeywordsGetAsync
     *
     * Get Keyword Data
     *
     * @param  int $campaign_id This parameter specifies the ID of the campaign for which you want to return data.   Please refer to the Quick Start Guide to learn how to retrieve the IDs of your campaigns. (required)
     * @param  \DateTime $end_date This parameter specifies the end date of the timeframe for which you want to return the ranking and traffic data in YYYY-MM-DD format.  If you don&#x27;t specify an &#x60;end_date&#x60;, the default is the current day. (required)
     * @param  \DateTime $start_date This parameter specifies the start date of the timeframe for which you want to return the ranking and traffic data in YYYY-MM-DD format.  If you don&#x27;t specify a &#x60;start_date&#x60;, the default is 30 days before the &#x60;end_date&#x60;. (required)
     * @param  int $group_id The IDs of specific groups in the campaign to get keyword data for.   Please refer to the Quick Start Guide to learn how to retrieve the IDs of your groups.  If you do not specify a &#x60;group_id&#x60;, the default value is the &#x60;All Keywords&#x60; group, which means data will be returned for all active keywords in the campaign. (optional)
     * @param  string $keyword_ids This parameter allows you to specify the IDs of the keywords for which you want to return data. &#x60;keyword_ids&#x60; should be a comma-separated list of keyword IDs.  Please refer to the Quick Start Guide to learn how to retrieve the IDs of your keywords.  If you do not specify &#x60;keyword_ids&#x60;, the API will return data for all keywords that meet the other specified criteria (e.g. &#x60;group_id&#x60;). (optional)
     * @param  int $limit This parameter determines the maximum number of records to return in a single request.   Maximum Value: 1000 records per request  If you do not specify a &#x60;limit&#x60;, the default number of records returned per request will be 100. (optional)
     * @param  int $offset This parameter specifies the starting point within the collection of resource results. It&#x27;s typically used with the &#x60;limit&#x60; parameter to implement pagination.  If you do not specify an &#x60;offset&#x60;, the API will start from the first record. (optional)
     * @param  string $order_by This parameter enables you to sort the returned data based on a specified field.  The field names you can use to sort data are: - &#x60;keyword&#x60; - &#x60;search_volume&#x60; - &#x60;year-over-year&#x60; - &#x60;rank&#x60; - &#x60;rank_trend&#x60;: Sorts the data based on the trend in keyword ranking. - &#x60;rank_trend_impact&#x60;: Sorts the data based on the rank trend impact on Visibility. - &#x60;opportunity&#x60;: Sorts the data based on the keyword Opportunity score. (optional)
     * @param  string $order_direction This parameter determines the sorting direction of the &#x60;order_by&#x60; field. You can sort the data in either ascending (&#x60;asc&#x60;) or descending (&#x60;desc&#x60;) order.  Note: The &#x60;order_direction&#x60; parameter works in conjunction with the &#x60;order_by&#x60; parameter. Use it to specify the direction of the sort after choosing the field to order by with &#x60;order_by&#x60;.  If you do not specify an &#x60;order_direction&#x60;, the default is &#x60;asc&#x60;. (optional)
     * @param  string $search The &#x60;search&#x60; parameter allows you to filter the results based on a keyword search. The API will return only those records where the keyword matches (fully or partially) the provided search term. The search parameter is case-insensitive, allowing partial matches irrespective of casing. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function rankTrackerV30KeywordsGetAsync($campaign_id, $end_date, $start_date, $group_id = null, $keyword_ids = null, $limit = null, $offset = null, $order_by = null, $order_direction = null, $search = null)
    {
        return $this->rankTrackerV30KeywordsGetAsyncWithHttpInfo($campaign_id, $end_date, $start_date, $group_id, $keyword_ids, $limit, $offset, $order_by, $order_direction, $search)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation rankTrackerV30KeywordsGetAsyncWithHttpInfo
     *
     * Get Keyword Data
     *
     * @param  int $campaign_id This parameter specifies the ID of the campaign for which you want to return data.   Please refer to the Quick Start Guide to learn how to retrieve the IDs of your campaigns. (required)
     * @param  \DateTime $end_date This parameter specifies the end date of the timeframe for which you want to return the ranking and traffic data in YYYY-MM-DD format.  If you don&#x27;t specify an &#x60;end_date&#x60;, the default is the current day. (required)
     * @param  \DateTime $start_date This parameter specifies the start date of the timeframe for which you want to return the ranking and traffic data in YYYY-MM-DD format.  If you don&#x27;t specify a &#x60;start_date&#x60;, the default is 30 days before the &#x60;end_date&#x60;. (required)
     * @param  int $group_id The IDs of specific groups in the campaign to get keyword data for.   Please refer to the Quick Start Guide to learn how to retrieve the IDs of your groups.  If you do not specify a &#x60;group_id&#x60;, the default value is the &#x60;All Keywords&#x60; group, which means data will be returned for all active keywords in the campaign. (optional)
     * @param  string $keyword_ids This parameter allows you to specify the IDs of the keywords for which you want to return data. &#x60;keyword_ids&#x60; should be a comma-separated list of keyword IDs.  Please refer to the Quick Start Guide to learn how to retrieve the IDs of your keywords.  If you do not specify &#x60;keyword_ids&#x60;, the API will return data for all keywords that meet the other specified criteria (e.g. &#x60;group_id&#x60;). (optional)
     * @param  int $limit This parameter determines the maximum number of records to return in a single request.   Maximum Value: 1000 records per request  If you do not specify a &#x60;limit&#x60;, the default number of records returned per request will be 100. (optional)
     * @param  int $offset This parameter specifies the starting point within the collection of resource results. It&#x27;s typically used with the &#x60;limit&#x60; parameter to implement pagination.  If you do not specify an &#x60;offset&#x60;, the API will start from the first record. (optional)
     * @param  string $order_by This parameter enables you to sort the returned data based on a specified field.  The field names you can use to sort data are: - &#x60;keyword&#x60; - &#x60;search_volume&#x60; - &#x60;year-over-year&#x60; - &#x60;rank&#x60; - &#x60;rank_trend&#x60;: Sorts the data based on the trend in keyword ranking. - &#x60;rank_trend_impact&#x60;: Sorts the data based on the rank trend impact on Visibility. - &#x60;opportunity&#x60;: Sorts the data based on the keyword Opportunity score. (optional)
     * @param  string $order_direction This parameter determines the sorting direction of the &#x60;order_by&#x60; field. You can sort the data in either ascending (&#x60;asc&#x60;) or descending (&#x60;desc&#x60;) order.  Note: The &#x60;order_direction&#x60; parameter works in conjunction with the &#x60;order_by&#x60; parameter. Use it to specify the direction of the sort after choosing the field to order by with &#x60;order_by&#x60;.  If you do not specify an &#x60;order_direction&#x60;, the default is &#x60;asc&#x60;. (optional)
     * @param  string $search The &#x60;search&#x60; parameter allows you to filter the results based on a keyword search. The API will return only those records where the keyword matches (fully or partially) the provided search term. The search parameter is case-insensitive, allowing partial matches irrespective of casing. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function rankTrackerV30KeywordsGetAsyncWithHttpInfo($campaign_id, $end_date, $start_date, $group_id = null, $keyword_ids = null, $limit = null, $offset = null, $order_by = null, $order_direction = null, $search = null)
    {
        $returnType = '\Swagger\Client\Model\KeywordDetail[]';
        $request = $this->rankTrackerV30KeywordsGetRequest($campaign_id, $end_date, $start_date, $group_id, $keyword_ids, $limit, $offset, $order_by, $order_direction, $search);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    $responseBody = $response->getBody();
                    if ($returnType === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = $responseBody->getContents();
                        if ($returnType !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, $returnType, []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'rankTrackerV30KeywordsGet'
     *
     * @param  int $campaign_id This parameter specifies the ID of the campaign for which you want to return data.   Please refer to the Quick Start Guide to learn how to retrieve the IDs of your campaigns. (required)
     * @param  \DateTime $end_date This parameter specifies the end date of the timeframe for which you want to return the ranking and traffic data in YYYY-MM-DD format.  If you don&#x27;t specify an &#x60;end_date&#x60;, the default is the current day. (required)
     * @param  \DateTime $start_date This parameter specifies the start date of the timeframe for which you want to return the ranking and traffic data in YYYY-MM-DD format.  If you don&#x27;t specify a &#x60;start_date&#x60;, the default is 30 days before the &#x60;end_date&#x60;. (required)
     * @param  int $group_id The IDs of specific groups in the campaign to get keyword data for.   Please refer to the Quick Start Guide to learn how to retrieve the IDs of your groups.  If you do not specify a &#x60;group_id&#x60;, the default value is the &#x60;All Keywords&#x60; group, which means data will be returned for all active keywords in the campaign. (optional)
     * @param  string $keyword_ids This parameter allows you to specify the IDs of the keywords for which you want to return data. &#x60;keyword_ids&#x60; should be a comma-separated list of keyword IDs.  Please refer to the Quick Start Guide to learn how to retrieve the IDs of your keywords.  If you do not specify &#x60;keyword_ids&#x60;, the API will return data for all keywords that meet the other specified criteria (e.g. &#x60;group_id&#x60;). (optional)
     * @param  int $limit This parameter determines the maximum number of records to return in a single request.   Maximum Value: 1000 records per request  If you do not specify a &#x60;limit&#x60;, the default number of records returned per request will be 100. (optional)
     * @param  int $offset This parameter specifies the starting point within the collection of resource results. It&#x27;s typically used with the &#x60;limit&#x60; parameter to implement pagination.  If you do not specify an &#x60;offset&#x60;, the API will start from the first record. (optional)
     * @param  string $order_by This parameter enables you to sort the returned data based on a specified field.  The field names you can use to sort data are: - &#x60;keyword&#x60; - &#x60;search_volume&#x60; - &#x60;year-over-year&#x60; - &#x60;rank&#x60; - &#x60;rank_trend&#x60;: Sorts the data based on the trend in keyword ranking. - &#x60;rank_trend_impact&#x60;: Sorts the data based on the rank trend impact on Visibility. - &#x60;opportunity&#x60;: Sorts the data based on the keyword Opportunity score. (optional)
     * @param  string $order_direction This parameter determines the sorting direction of the &#x60;order_by&#x60; field. You can sort the data in either ascending (&#x60;asc&#x60;) or descending (&#x60;desc&#x60;) order.  Note: The &#x60;order_direction&#x60; parameter works in conjunction with the &#x60;order_by&#x60; parameter. Use it to specify the direction of the sort after choosing the field to order by with &#x60;order_by&#x60;.  If you do not specify an &#x60;order_direction&#x60;, the default is &#x60;asc&#x60;. (optional)
     * @param  string $search The &#x60;search&#x60; parameter allows you to filter the results based on a keyword search. The API will return only those records where the keyword matches (fully or partially) the provided search term. The search parameter is case-insensitive, allowing partial matches irrespective of casing. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function rankTrackerV30KeywordsGetRequest($campaign_id, $end_date, $start_date, $group_id = null, $keyword_ids = null, $limit = null, $offset = null, $order_by = null, $order_direction = null, $search = null)
    {
        // verify the required parameter 'campaign_id' is set
        if ($campaign_id === null || (is_array($campaign_id) && count($campaign_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $campaign_id when calling rankTrackerV30KeywordsGet'
            );
        }
        // verify the required parameter 'end_date' is set
        if ($end_date === null || (is_array($end_date) && count($end_date) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $end_date when calling rankTrackerV30KeywordsGet'
            );
        }
        // verify the required parameter 'start_date' is set
        if ($start_date === null || (is_array($start_date) && count($start_date) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $start_date when calling rankTrackerV30KeywordsGet'
            );
        }

        $resourcePath = '/rank-tracker/v3.0/keywords';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        if ($campaign_id !== null) {
            $queryParams['campaign_id'] = ObjectSerializer::toQueryValue($campaign_id, null);
        }
        // query params
        if ($end_date !== null) {
            $queryParams['end_date'] = ObjectSerializer::toQueryValue($end_date, 'date');
        }
        // query params
        if ($start_date !== null) {
            $queryParams['start_date'] = ObjectSerializer::toQueryValue($start_date, 'date');
        }
        // query params
        if ($group_id !== null) {
            $queryParams['group_id'] = ObjectSerializer::toQueryValue($group_id, null);
        }
        // query params
        if ($keyword_ids !== null) {
            $queryParams['keyword_ids'] = ObjectSerializer::toQueryValue($keyword_ids, null);
        }
        // query params
        if ($limit !== null) {
            $queryParams['limit'] = ObjectSerializer::toQueryValue($limit, null);
        }
        // query params
        if ($offset !== null) {
            $queryParams['offset'] = ObjectSerializer::toQueryValue($offset, null);
        }
        // query params
        if ($order_by !== null) {
            $queryParams['order_by'] = ObjectSerializer::toQueryValue($order_by, null);
        }
        // query params
        if ($order_direction !== null) {
            $queryParams['order_direction'] = ObjectSerializer::toQueryValue($order_direction, null);
        }
        // query params
        if ($search !== null) {
            $queryParams['search'] = ObjectSerializer::toQueryValue($search, null);
        }


        // body params
        $_tempBody = null;

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                []
            );
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            // $_tempBody is the method argument, if present
            $httpBody = $_tempBody;
            // \stdClass has no __toString(), so we should encode it manually
            if ($httpBody instanceof \stdClass && $headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($httpBody);
            }
        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $multipartContents[] = [
                        'name' => $formParamName,
                        'contents' => $formParamValue
                    ];
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($formParams);

            } else {
                // for HTTP post (form)
                $httpBody = \GuzzleHttp\Psr7\Query::build($formParams);
            }
        }

        // this endpoint requires API key authentication
        $apiKey = $this->config->getApiKeyWithPrefix('Authorization');
        if ($apiKey !== null) {
            $headers['Authorization'] = $apiKey;
        }

        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $query = \GuzzleHttp\Psr7\Query::build($queryParams);
        return new Request(
            'GET',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation rankTrackerV30KeywordsImportPost
     *
     * Add New Keywords
     *
     * @param  \Swagger\Client\Model\KeywordsImportPostBody $body body (required)
     *
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Swagger\Client\Model\AddKeywords
     */
    public function rankTrackerV30KeywordsImportPost($body)
    {
        list($response) = $this->rankTrackerV30KeywordsImportPostWithHttpInfo($body);
        return $response;
    }

    /**
     * Operation rankTrackerV30KeywordsImportPostWithHttpInfo
     *
     * Add New Keywords
     *
     * @param  \Swagger\Client\Model\KeywordsImportPostBody $body (required)
     *
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Swagger\Client\Model\AddKeywords, HTTP status code, HTTP response headers (array of strings)
     */
    public function rankTrackerV30KeywordsImportPostWithHttpInfo($body)
    {
        $returnType = '\Swagger\Client\Model\AddKeywords';
        $request = $this->rankTrackerV30KeywordsImportPostRequest($body);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? $e->getResponse()->getBody()->getContents() : null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    $response->getBody()
                );
            }

            $responseBody = $response->getBody();
            if ($returnType === '\SplFileObject') {
                $content = $responseBody; //stream goes to serializer
            } else {
                $content = $responseBody->getContents();
                if (!in_array($returnType, ['string','integer','bool'])) {
                    $content = json_decode($content);
                }
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Swagger\Client\Model\AddKeywords',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation rankTrackerV30KeywordsImportPostAsync
     *
     * Add New Keywords
     *
     * @param  \Swagger\Client\Model\KeywordsImportPostBody $body (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function rankTrackerV30KeywordsImportPostAsync($body)
    {
        return $this->rankTrackerV30KeywordsImportPostAsyncWithHttpInfo($body)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation rankTrackerV30KeywordsImportPostAsyncWithHttpInfo
     *
     * Add New Keywords
     *
     * @param  \Swagger\Client\Model\KeywordsImportPostBody $body (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function rankTrackerV30KeywordsImportPostAsyncWithHttpInfo($body)
    {
        $returnType = '\Swagger\Client\Model\AddKeywords';
        $request = $this->rankTrackerV30KeywordsImportPostRequest($body);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    $responseBody = $response->getBody();
                    if ($returnType === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = $responseBody->getContents();
                        if ($returnType !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, $returnType, []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'rankTrackerV30KeywordsImportPost'
     *
     * @param  \Swagger\Client\Model\KeywordsImportPostBody $body (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function rankTrackerV30KeywordsImportPostRequest($body)
    {
        // verify the required parameter 'body' is set
        if ($body === null || (is_array($body) && count($body) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $body when calling rankTrackerV30KeywordsImportPost'
            );
        }

        $resourcePath = '/rank-tracker/v3.0/keywords/import';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;



        // body params
        $_tempBody = null;
        if (isset($body)) {
            $_tempBody = $body;
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                ['application/json']
            );
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            // $_tempBody is the method argument, if present
            $httpBody = $_tempBody;
            // \stdClass has no __toString(), so we should encode it manually
            if ($httpBody instanceof \stdClass && $headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($httpBody);
            }
        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $multipartContents[] = [
                        'name' => $formParamName,
                        'contents' => $formParamValue
                    ];
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($formParams);

            } else {
                // for HTTP post (form)
                $httpBody = \GuzzleHttp\Psr7\Query::build($formParams);
            }
        }

        // this endpoint requires API key authentication
        $apiKey = $this->config->getApiKeyWithPrefix('Authorization');
        if ($apiKey !== null) {
            $headers['Authorization'] = $apiKey;
        }

        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $query = \GuzzleHttp\Psr7\Query::build($queryParams);
        return new Request(
            'POST',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation rankTrackerV30KeywordsImportStatusGet
     *
     * Get Keywords Import Status
     *
     * @param  int $import_id The import ID of the task.  Please refer to the Add New Keywords endpoint in our API to retrieve the &#x60;import_id&#x60;. (required)
     * @param  int $campaign_id The ID of the campaign to which you want to add/import keywords.   Please refer to the Quick Start Guide to learn how to retrieve the IDs of your campaigns. (required)
     *
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Swagger\Client\Model\KeywordsImportStatus
     */
    public function rankTrackerV30KeywordsImportStatusGet($import_id, $campaign_id)
    {
        list($response) = $this->rankTrackerV30KeywordsImportStatusGetWithHttpInfo($import_id, $campaign_id);
        return $response;
    }

    /**
     * Operation rankTrackerV30KeywordsImportStatusGetWithHttpInfo
     *
     * Get Keywords Import Status
     *
     * @param  int $import_id The import ID of the task.  Please refer to the Add New Keywords endpoint in our API to retrieve the &#x60;import_id&#x60;. (required)
     * @param  int $campaign_id The ID of the campaign to which you want to add/import keywords.   Please refer to the Quick Start Guide to learn how to retrieve the IDs of your campaigns. (required)
     *
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Swagger\Client\Model\KeywordsImportStatus, HTTP status code, HTTP response headers (array of strings)
     */
    public function rankTrackerV30KeywordsImportStatusGetWithHttpInfo($import_id, $campaign_id)
    {
        $returnType = '\Swagger\Client\Model\KeywordsImportStatus';
        $request = $this->rankTrackerV30KeywordsImportStatusGetRequest($import_id, $campaign_id);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? $e->getResponse()->getBody()->getContents() : null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    $response->getBody()
                );
            }

            $responseBody = $response->getBody();
            if ($returnType === '\SplFileObject') {
                $content = $responseBody; //stream goes to serializer
            } else {
                $content = $responseBody->getContents();
                if (!in_array($returnType, ['string','integer','bool'])) {
                    $content = json_decode($content);
                }
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Swagger\Client\Model\KeywordsImportStatus',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation rankTrackerV30KeywordsImportStatusGetAsync
     *
     * Get Keywords Import Status
     *
     * @param  int $import_id The import ID of the task.  Please refer to the Add New Keywords endpoint in our API to retrieve the &#x60;import_id&#x60;. (required)
     * @param  int $campaign_id The ID of the campaign to which you want to add/import keywords.   Please refer to the Quick Start Guide to learn how to retrieve the IDs of your campaigns. (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function rankTrackerV30KeywordsImportStatusGetAsync($import_id, $campaign_id)
    {
        return $this->rankTrackerV30KeywordsImportStatusGetAsyncWithHttpInfo($import_id, $campaign_id)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation rankTrackerV30KeywordsImportStatusGetAsyncWithHttpInfo
     *
     * Get Keywords Import Status
     *
     * @param  int $import_id The import ID of the task.  Please refer to the Add New Keywords endpoint in our API to retrieve the &#x60;import_id&#x60;. (required)
     * @param  int $campaign_id The ID of the campaign to which you want to add/import keywords.   Please refer to the Quick Start Guide to learn how to retrieve the IDs of your campaigns. (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function rankTrackerV30KeywordsImportStatusGetAsyncWithHttpInfo($import_id, $campaign_id)
    {
        $returnType = '\Swagger\Client\Model\KeywordsImportStatus';
        $request = $this->rankTrackerV30KeywordsImportStatusGetRequest($import_id, $campaign_id);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    $responseBody = $response->getBody();
                    if ($returnType === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = $responseBody->getContents();
                        if ($returnType !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, $returnType, []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'rankTrackerV30KeywordsImportStatusGet'
     *
     * @param  int $import_id The import ID of the task.  Please refer to the Add New Keywords endpoint in our API to retrieve the &#x60;import_id&#x60;. (required)
     * @param  int $campaign_id The ID of the campaign to which you want to add/import keywords.   Please refer to the Quick Start Guide to learn how to retrieve the IDs of your campaigns. (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function rankTrackerV30KeywordsImportStatusGetRequest($import_id, $campaign_id)
    {
        // verify the required parameter 'import_id' is set
        if ($import_id === null || (is_array($import_id) && count($import_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $import_id when calling rankTrackerV30KeywordsImportStatusGet'
            );
        }
        // verify the required parameter 'campaign_id' is set
        if ($campaign_id === null || (is_array($campaign_id) && count($campaign_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $campaign_id when calling rankTrackerV30KeywordsImportStatusGet'
            );
        }

        $resourcePath = '/rank-tracker/v3.0/keywords/import-status';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        if ($import_id !== null) {
            $queryParams['import_id'] = ObjectSerializer::toQueryValue($import_id, 'int32');
        }
        // query params
        if ($campaign_id !== null) {
            $queryParams['campaign_id'] = ObjectSerializer::toQueryValue($campaign_id, 'int32');
        }


        // body params
        $_tempBody = null;

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                []
            );
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            // $_tempBody is the method argument, if present
            $httpBody = $_tempBody;
            // \stdClass has no __toString(), so we should encode it manually
            if ($httpBody instanceof \stdClass && $headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($httpBody);
            }
        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $multipartContents[] = [
                        'name' => $formParamName,
                        'contents' => $formParamValue
                    ];
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($formParams);

            } else {
                // for HTTP post (form)
                $httpBody = \GuzzleHttp\Psr7\Query::build($formParams);
            }
        }

        // this endpoint requires API key authentication
        $apiKey = $this->config->getApiKeyWithPrefix('Authorization');
        if ($apiKey !== null) {
            $headers['Authorization'] = $apiKey;
        }

        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $query = \GuzzleHttp\Psr7\Query::build($queryParams);
        return new Request(
            'GET',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation rankTrackerV30KeywordsRankingPagesGet
     *
     * Get Ranking Pages
     *
     * @param  int $campaign_id This parameter specifies the ID of the campaign for which you want to return data.   Please refer to the Quick Start Guide to learn how to retrieve the IDs of your campaigns. (required)
     * @param  int $group_id The IDs of specific groups in the campaign to get keyword data for.   Please refer to the Quick Start Guide to learn how to retrieve the IDs of your groups.  If you do not specify a &#x60;group_id&#x60;, the default value is the &#x60;All Keywords&#x60; group, which means data will be returned for all active keywords in the campaign. (optional)
     * @param  int $limit Determines the maximum number of records to return in a single request.   Maximum Value: 1000 records per request.  If you do not specify a &#x60;limit&#x60;, the default number of records returned per request will be 100. (optional)
     * @param  int $offset The starting point within the collection of resource results. It&#x27;s typically used with the &#x60;limit&#x60; parameter to implement pagination.  If you do not specify an &#x60;offset&#x60;, the default is &#x60;0&#x60;, which means the API will start from the first record. (optional)
     * @param  string $search The &#x60;search&#x60; parameter allows you to filter for landing pages that include the searched term or URL path. The API will return only those records where the landing page matches (fully or partially) the provided search term or URL. (optional)
     *
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Swagger\Client\Model\RankingPages[]
     */
    public function rankTrackerV30KeywordsRankingPagesGet($campaign_id, $group_id = null, $limit = null, $offset = null, $search = null)
    {
        list($response) = $this->rankTrackerV30KeywordsRankingPagesGetWithHttpInfo($campaign_id, $group_id, $limit, $offset, $search);
        return $response;
    }

    /**
     * Operation rankTrackerV30KeywordsRankingPagesGetWithHttpInfo
     *
     * Get Ranking Pages
     *
     * @param  int $campaign_id This parameter specifies the ID of the campaign for which you want to return data.   Please refer to the Quick Start Guide to learn how to retrieve the IDs of your campaigns. (required)
     * @param  int $group_id The IDs of specific groups in the campaign to get keyword data for.   Please refer to the Quick Start Guide to learn how to retrieve the IDs of your groups.  If you do not specify a &#x60;group_id&#x60;, the default value is the &#x60;All Keywords&#x60; group, which means data will be returned for all active keywords in the campaign. (optional)
     * @param  int $limit Determines the maximum number of records to return in a single request.   Maximum Value: 1000 records per request.  If you do not specify a &#x60;limit&#x60;, the default number of records returned per request will be 100. (optional)
     * @param  int $offset The starting point within the collection of resource results. It&#x27;s typically used with the &#x60;limit&#x60; parameter to implement pagination.  If you do not specify an &#x60;offset&#x60;, the default is &#x60;0&#x60;, which means the API will start from the first record. (optional)
     * @param  string $search The &#x60;search&#x60; parameter allows you to filter for landing pages that include the searched term or URL path. The API will return only those records where the landing page matches (fully or partially) the provided search term or URL. (optional)
     *
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Swagger\Client\Model\RankingPages[], HTTP status code, HTTP response headers (array of strings)
     */
    public function rankTrackerV30KeywordsRankingPagesGetWithHttpInfo($campaign_id, $group_id = null, $limit = null, $offset = null, $search = null)
    {
        $returnType = '\Swagger\Client\Model\RankingPages[]';
        $request = $this->rankTrackerV30KeywordsRankingPagesGetRequest($campaign_id, $group_id, $limit, $offset, $search);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? $e->getResponse()->getBody()->getContents() : null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    $response->getBody()
                );
            }

            $responseBody = $response->getBody();
            if ($returnType === '\SplFileObject') {
                $content = $responseBody; //stream goes to serializer
            } else {
                $content = $responseBody->getContents();
                if (!in_array($returnType, ['string','integer','bool'])) {
                    $content = json_decode($content);
                }
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Swagger\Client\Model\RankingPages[]',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation rankTrackerV30KeywordsRankingPagesGetAsync
     *
     * Get Ranking Pages
     *
     * @param  int $campaign_id This parameter specifies the ID of the campaign for which you want to return data.   Please refer to the Quick Start Guide to learn how to retrieve the IDs of your campaigns. (required)
     * @param  int $group_id The IDs of specific groups in the campaign to get keyword data for.   Please refer to the Quick Start Guide to learn how to retrieve the IDs of your groups.  If you do not specify a &#x60;group_id&#x60;, the default value is the &#x60;All Keywords&#x60; group, which means data will be returned for all active keywords in the campaign. (optional)
     * @param  int $limit Determines the maximum number of records to return in a single request.   Maximum Value: 1000 records per request.  If you do not specify a &#x60;limit&#x60;, the default number of records returned per request will be 100. (optional)
     * @param  int $offset The starting point within the collection of resource results. It&#x27;s typically used with the &#x60;limit&#x60; parameter to implement pagination.  If you do not specify an &#x60;offset&#x60;, the default is &#x60;0&#x60;, which means the API will start from the first record. (optional)
     * @param  string $search The &#x60;search&#x60; parameter allows you to filter for landing pages that include the searched term or URL path. The API will return only those records where the landing page matches (fully or partially) the provided search term or URL. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function rankTrackerV30KeywordsRankingPagesGetAsync($campaign_id, $group_id = null, $limit = null, $offset = null, $search = null)
    {
        return $this->rankTrackerV30KeywordsRankingPagesGetAsyncWithHttpInfo($campaign_id, $group_id, $limit, $offset, $search)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation rankTrackerV30KeywordsRankingPagesGetAsyncWithHttpInfo
     *
     * Get Ranking Pages
     *
     * @param  int $campaign_id This parameter specifies the ID of the campaign for which you want to return data.   Please refer to the Quick Start Guide to learn how to retrieve the IDs of your campaigns. (required)
     * @param  int $group_id The IDs of specific groups in the campaign to get keyword data for.   Please refer to the Quick Start Guide to learn how to retrieve the IDs of your groups.  If you do not specify a &#x60;group_id&#x60;, the default value is the &#x60;All Keywords&#x60; group, which means data will be returned for all active keywords in the campaign. (optional)
     * @param  int $limit Determines the maximum number of records to return in a single request.   Maximum Value: 1000 records per request.  If you do not specify a &#x60;limit&#x60;, the default number of records returned per request will be 100. (optional)
     * @param  int $offset The starting point within the collection of resource results. It&#x27;s typically used with the &#x60;limit&#x60; parameter to implement pagination.  If you do not specify an &#x60;offset&#x60;, the default is &#x60;0&#x60;, which means the API will start from the first record. (optional)
     * @param  string $search The &#x60;search&#x60; parameter allows you to filter for landing pages that include the searched term or URL path. The API will return only those records where the landing page matches (fully or partially) the provided search term or URL. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function rankTrackerV30KeywordsRankingPagesGetAsyncWithHttpInfo($campaign_id, $group_id = null, $limit = null, $offset = null, $search = null)
    {
        $returnType = '\Swagger\Client\Model\RankingPages[]';
        $request = $this->rankTrackerV30KeywordsRankingPagesGetRequest($campaign_id, $group_id, $limit, $offset, $search);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    $responseBody = $response->getBody();
                    if ($returnType === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = $responseBody->getContents();
                        if ($returnType !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, $returnType, []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'rankTrackerV30KeywordsRankingPagesGet'
     *
     * @param  int $campaign_id This parameter specifies the ID of the campaign for which you want to return data.   Please refer to the Quick Start Guide to learn how to retrieve the IDs of your campaigns. (required)
     * @param  int $group_id The IDs of specific groups in the campaign to get keyword data for.   Please refer to the Quick Start Guide to learn how to retrieve the IDs of your groups.  If you do not specify a &#x60;group_id&#x60;, the default value is the &#x60;All Keywords&#x60; group, which means data will be returned for all active keywords in the campaign. (optional)
     * @param  int $limit Determines the maximum number of records to return in a single request.   Maximum Value: 1000 records per request.  If you do not specify a &#x60;limit&#x60;, the default number of records returned per request will be 100. (optional)
     * @param  int $offset The starting point within the collection of resource results. It&#x27;s typically used with the &#x60;limit&#x60; parameter to implement pagination.  If you do not specify an &#x60;offset&#x60;, the default is &#x60;0&#x60;, which means the API will start from the first record. (optional)
     * @param  string $search The &#x60;search&#x60; parameter allows you to filter for landing pages that include the searched term or URL path. The API will return only those records where the landing page matches (fully or partially) the provided search term or URL. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function rankTrackerV30KeywordsRankingPagesGetRequest($campaign_id, $group_id = null, $limit = null, $offset = null, $search = null)
    {
        // verify the required parameter 'campaign_id' is set
        if ($campaign_id === null || (is_array($campaign_id) && count($campaign_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $campaign_id when calling rankTrackerV30KeywordsRankingPagesGet'
            );
        }

        $resourcePath = '/rank-tracker/v3.0/keywords/ranking-pages';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        if ($campaign_id !== null) {
            $queryParams['campaign_id'] = ObjectSerializer::toQueryValue($campaign_id, null);
        }
        // query params
        if ($group_id !== null) {
            $queryParams['group_id'] = ObjectSerializer::toQueryValue($group_id, null);
        }
        // query params
        if ($limit !== null) {
            $queryParams['limit'] = ObjectSerializer::toQueryValue($limit, null);
        }
        // query params
        if ($offset !== null) {
            $queryParams['offset'] = ObjectSerializer::toQueryValue($offset, null);
        }
        // query params
        if ($search !== null) {
            $queryParams['search'] = ObjectSerializer::toQueryValue($search, null);
        }


        // body params
        $_tempBody = null;

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                []
            );
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            // $_tempBody is the method argument, if present
            $httpBody = $_tempBody;
            // \stdClass has no __toString(), so we should encode it manually
            if ($httpBody instanceof \stdClass && $headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($httpBody);
            }
        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $multipartContents[] = [
                        'name' => $formParamName,
                        'contents' => $formParamValue
                    ];
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($formParams);

            } else {
                // for HTTP post (form)
                $httpBody = \GuzzleHttp\Psr7\Query::build($formParams);
            }
        }

        // this endpoint requires API key authentication
        $apiKey = $this->config->getApiKeyWithPrefix('Authorization');
        if ($apiKey !== null) {
            $headers['Authorization'] = $apiKey;
        }

        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $query = \GuzzleHttp\Psr7\Query::build($queryParams);
        return new Request(
            'GET',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation rankTrackerV30KeywordsSerpFeaturePresenceGet
     *
     * Get Daily SERP Feature Presence
     *
     * @param  int $campaign_id This parameter specifies the ID of the campaign for which you want to return data.   Please refer to the Quick Start Guide to learn how to retrieve the IDs of your campaigns. (required)
     * @param  \DateTime $start_date This parameter specifies the start date of the timeframe for which you want to return the data in YYYY-MM-DD format. (required)
     * @param  \DateTime $end_date This parameter specifies the end date of the timeframe for which you want to return the data in YYYY-MM-DD format. (required)
     * @param  int $group_id The IDs of specific groups in the campaign to get keyword data for.   Please refer to the Quick Start Guide to learn how to retrieve the IDs of your groups.  If you do not specify a &#x60;group_id&#x60;, the default value is the &#x60;All Keywords&#x60; group, which means data will be returned for all active keywords in the campaign. (optional)
     * @param  int[] $keyword_ids This parameter allows you to specify the IDs of the keywords for which you want to return data. &#x60;keyword_ids&#x60; should be a comma-separated list of keyword IDs.  Please refer to the keyword-related endpoints in our API to retrieve the IDs of your keywords.  If you do not specify &#x60;keyword_ids&#x60;, the API will return data for all keywords that meet the other specified criteria (e.g. &#x60;group_id&#x60;). (optional)
     * @param  int $limit This parameter determines the maximum number of records to return in a single request.   Maximum Value: 1000 records per request  If you do not specify a &#x60;limit&#x60;, the default number of records returned per request will be 100. (optional)
     * @param  int $offset This parameter specifies the starting point within the collection of resource results. It&#x27;s typically used with the &#x60;limit&#x60; parameter to implement pagination.  If you do not specify an &#x60;offset&#x60;, the API will start from the first record. (optional)
     * @param  string $search The &#x60;search&#x60; parameter allows you to filter the results based on a keyword search. The API will return only those records where the keyword matches (fully or partially) the provided search term. The search parameter is case-insensitive, allowing partial matches irrespective of casing. (optional)
     *
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Swagger\Client\Model\SerpFeaturePresence
     */
    public function rankTrackerV30KeywordsSerpFeaturePresenceGet($campaign_id, $start_date, $end_date, $group_id = null, $keyword_ids = null, $limit = null, $offset = null, $search = null)
    {
        list($response) = $this->rankTrackerV30KeywordsSerpFeaturePresenceGetWithHttpInfo($campaign_id, $start_date, $end_date, $group_id, $keyword_ids, $limit, $offset, $search);
        return $response;
    }

    /**
     * Operation rankTrackerV30KeywordsSerpFeaturePresenceGetWithHttpInfo
     *
     * Get Daily SERP Feature Presence
     *
     * @param  int $campaign_id This parameter specifies the ID of the campaign for which you want to return data.   Please refer to the Quick Start Guide to learn how to retrieve the IDs of your campaigns. (required)
     * @param  \DateTime $start_date This parameter specifies the start date of the timeframe for which you want to return the data in YYYY-MM-DD format. (required)
     * @param  \DateTime $end_date This parameter specifies the end date of the timeframe for which you want to return the data in YYYY-MM-DD format. (required)
     * @param  int $group_id The IDs of specific groups in the campaign to get keyword data for.   Please refer to the Quick Start Guide to learn how to retrieve the IDs of your groups.  If you do not specify a &#x60;group_id&#x60;, the default value is the &#x60;All Keywords&#x60; group, which means data will be returned for all active keywords in the campaign. (optional)
     * @param  int[] $keyword_ids This parameter allows you to specify the IDs of the keywords for which you want to return data. &#x60;keyword_ids&#x60; should be a comma-separated list of keyword IDs.  Please refer to the keyword-related endpoints in our API to retrieve the IDs of your keywords.  If you do not specify &#x60;keyword_ids&#x60;, the API will return data for all keywords that meet the other specified criteria (e.g. &#x60;group_id&#x60;). (optional)
     * @param  int $limit This parameter determines the maximum number of records to return in a single request.   Maximum Value: 1000 records per request  If you do not specify a &#x60;limit&#x60;, the default number of records returned per request will be 100. (optional)
     * @param  int $offset This parameter specifies the starting point within the collection of resource results. It&#x27;s typically used with the &#x60;limit&#x60; parameter to implement pagination.  If you do not specify an &#x60;offset&#x60;, the API will start from the first record. (optional)
     * @param  string $search The &#x60;search&#x60; parameter allows you to filter the results based on a keyword search. The API will return only those records where the keyword matches (fully or partially) the provided search term. The search parameter is case-insensitive, allowing partial matches irrespective of casing. (optional)
     *
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Swagger\Client\Model\SerpFeaturePresence, HTTP status code, HTTP response headers (array of strings)
     */
    public function rankTrackerV30KeywordsSerpFeaturePresenceGetWithHttpInfo($campaign_id, $start_date, $end_date, $group_id = null, $keyword_ids = null, $limit = null, $offset = null, $search = null)
    {
        $returnType = '\Swagger\Client\Model\SerpFeaturePresence';
        $request = $this->rankTrackerV30KeywordsSerpFeaturePresenceGetRequest($campaign_id, $start_date, $end_date, $group_id, $keyword_ids, $limit, $offset, $search);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? $e->getResponse()->getBody()->getContents() : null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    $response->getBody()
                );
            }

            $responseBody = $response->getBody();
            if ($returnType === '\SplFileObject') {
                $content = $responseBody; //stream goes to serializer
            } else {
                $content = $responseBody->getContents();
                if (!in_array($returnType, ['string','integer','bool'])) {
                    $content = json_decode($content);
                }
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Swagger\Client\Model\SerpFeaturePresence',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation rankTrackerV30KeywordsSerpFeaturePresenceGetAsync
     *
     * Get Daily SERP Feature Presence
     *
     * @param  int $campaign_id This parameter specifies the ID of the campaign for which you want to return data.   Please refer to the Quick Start Guide to learn how to retrieve the IDs of your campaigns. (required)
     * @param  \DateTime $start_date This parameter specifies the start date of the timeframe for which you want to return the data in YYYY-MM-DD format. (required)
     * @param  \DateTime $end_date This parameter specifies the end date of the timeframe for which you want to return the data in YYYY-MM-DD format. (required)
     * @param  int $group_id The IDs of specific groups in the campaign to get keyword data for.   Please refer to the Quick Start Guide to learn how to retrieve the IDs of your groups.  If you do not specify a &#x60;group_id&#x60;, the default value is the &#x60;All Keywords&#x60; group, which means data will be returned for all active keywords in the campaign. (optional)
     * @param  int[] $keyword_ids This parameter allows you to specify the IDs of the keywords for which you want to return data. &#x60;keyword_ids&#x60; should be a comma-separated list of keyword IDs.  Please refer to the keyword-related endpoints in our API to retrieve the IDs of your keywords.  If you do not specify &#x60;keyword_ids&#x60;, the API will return data for all keywords that meet the other specified criteria (e.g. &#x60;group_id&#x60;). (optional)
     * @param  int $limit This parameter determines the maximum number of records to return in a single request.   Maximum Value: 1000 records per request  If you do not specify a &#x60;limit&#x60;, the default number of records returned per request will be 100. (optional)
     * @param  int $offset This parameter specifies the starting point within the collection of resource results. It&#x27;s typically used with the &#x60;limit&#x60; parameter to implement pagination.  If you do not specify an &#x60;offset&#x60;, the API will start from the first record. (optional)
     * @param  string $search The &#x60;search&#x60; parameter allows you to filter the results based on a keyword search. The API will return only those records where the keyword matches (fully or partially) the provided search term. The search parameter is case-insensitive, allowing partial matches irrespective of casing. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function rankTrackerV30KeywordsSerpFeaturePresenceGetAsync($campaign_id, $start_date, $end_date, $group_id = null, $keyword_ids = null, $limit = null, $offset = null, $search = null)
    {
        return $this->rankTrackerV30KeywordsSerpFeaturePresenceGetAsyncWithHttpInfo($campaign_id, $start_date, $end_date, $group_id, $keyword_ids, $limit, $offset, $search)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation rankTrackerV30KeywordsSerpFeaturePresenceGetAsyncWithHttpInfo
     *
     * Get Daily SERP Feature Presence
     *
     * @param  int $campaign_id This parameter specifies the ID of the campaign for which you want to return data.   Please refer to the Quick Start Guide to learn how to retrieve the IDs of your campaigns. (required)
     * @param  \DateTime $start_date This parameter specifies the start date of the timeframe for which you want to return the data in YYYY-MM-DD format. (required)
     * @param  \DateTime $end_date This parameter specifies the end date of the timeframe for which you want to return the data in YYYY-MM-DD format. (required)
     * @param  int $group_id The IDs of specific groups in the campaign to get keyword data for.   Please refer to the Quick Start Guide to learn how to retrieve the IDs of your groups.  If you do not specify a &#x60;group_id&#x60;, the default value is the &#x60;All Keywords&#x60; group, which means data will be returned for all active keywords in the campaign. (optional)
     * @param  int[] $keyword_ids This parameter allows you to specify the IDs of the keywords for which you want to return data. &#x60;keyword_ids&#x60; should be a comma-separated list of keyword IDs.  Please refer to the keyword-related endpoints in our API to retrieve the IDs of your keywords.  If you do not specify &#x60;keyword_ids&#x60;, the API will return data for all keywords that meet the other specified criteria (e.g. &#x60;group_id&#x60;). (optional)
     * @param  int $limit This parameter determines the maximum number of records to return in a single request.   Maximum Value: 1000 records per request  If you do not specify a &#x60;limit&#x60;, the default number of records returned per request will be 100. (optional)
     * @param  int $offset This parameter specifies the starting point within the collection of resource results. It&#x27;s typically used with the &#x60;limit&#x60; parameter to implement pagination.  If you do not specify an &#x60;offset&#x60;, the API will start from the first record. (optional)
     * @param  string $search The &#x60;search&#x60; parameter allows you to filter the results based on a keyword search. The API will return only those records where the keyword matches (fully or partially) the provided search term. The search parameter is case-insensitive, allowing partial matches irrespective of casing. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function rankTrackerV30KeywordsSerpFeaturePresenceGetAsyncWithHttpInfo($campaign_id, $start_date, $end_date, $group_id = null, $keyword_ids = null, $limit = null, $offset = null, $search = null)
    {
        $returnType = '\Swagger\Client\Model\SerpFeaturePresence';
        $request = $this->rankTrackerV30KeywordsSerpFeaturePresenceGetRequest($campaign_id, $start_date, $end_date, $group_id, $keyword_ids, $limit, $offset, $search);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    $responseBody = $response->getBody();
                    if ($returnType === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = $responseBody->getContents();
                        if ($returnType !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, $returnType, []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'rankTrackerV30KeywordsSerpFeaturePresenceGet'
     *
     * @param  int $campaign_id This parameter specifies the ID of the campaign for which you want to return data.   Please refer to the Quick Start Guide to learn how to retrieve the IDs of your campaigns. (required)
     * @param  \DateTime $start_date This parameter specifies the start date of the timeframe for which you want to return the data in YYYY-MM-DD format. (required)
     * @param  \DateTime $end_date This parameter specifies the end date of the timeframe for which you want to return the data in YYYY-MM-DD format. (required)
     * @param  int $group_id The IDs of specific groups in the campaign to get keyword data for.   Please refer to the Quick Start Guide to learn how to retrieve the IDs of your groups.  If you do not specify a &#x60;group_id&#x60;, the default value is the &#x60;All Keywords&#x60; group, which means data will be returned for all active keywords in the campaign. (optional)
     * @param  int[] $keyword_ids This parameter allows you to specify the IDs of the keywords for which you want to return data. &#x60;keyword_ids&#x60; should be a comma-separated list of keyword IDs.  Please refer to the keyword-related endpoints in our API to retrieve the IDs of your keywords.  If you do not specify &#x60;keyword_ids&#x60;, the API will return data for all keywords that meet the other specified criteria (e.g. &#x60;group_id&#x60;). (optional)
     * @param  int $limit This parameter determines the maximum number of records to return in a single request.   Maximum Value: 1000 records per request  If you do not specify a &#x60;limit&#x60;, the default number of records returned per request will be 100. (optional)
     * @param  int $offset This parameter specifies the starting point within the collection of resource results. It&#x27;s typically used with the &#x60;limit&#x60; parameter to implement pagination.  If you do not specify an &#x60;offset&#x60;, the API will start from the first record. (optional)
     * @param  string $search The &#x60;search&#x60; parameter allows you to filter the results based on a keyword search. The API will return only those records where the keyword matches (fully or partially) the provided search term. The search parameter is case-insensitive, allowing partial matches irrespective of casing. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function rankTrackerV30KeywordsSerpFeaturePresenceGetRequest($campaign_id, $start_date, $end_date, $group_id = null, $keyword_ids = null, $limit = null, $offset = null, $search = null)
    {
        // verify the required parameter 'campaign_id' is set
        if ($campaign_id === null || (is_array($campaign_id) && count($campaign_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $campaign_id when calling rankTrackerV30KeywordsSerpFeaturePresenceGet'
            );
        }
        // verify the required parameter 'start_date' is set
        if ($start_date === null || (is_array($start_date) && count($start_date) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $start_date when calling rankTrackerV30KeywordsSerpFeaturePresenceGet'
            );
        }
        // verify the required parameter 'end_date' is set
        if ($end_date === null || (is_array($end_date) && count($end_date) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $end_date when calling rankTrackerV30KeywordsSerpFeaturePresenceGet'
            );
        }

        $resourcePath = '/rank-tracker/v3.0/keywords/serp-feature-presence';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        if ($campaign_id !== null) {
            $queryParams['campaign_id'] = ObjectSerializer::toQueryValue($campaign_id, 'int32');
        }
        // query params
        if ($start_date !== null) {
            $queryParams['start_date'] = ObjectSerializer::toQueryValue($start_date, 'date');
        }
        // query params
        if ($end_date !== null) {
            $queryParams['end_date'] = ObjectSerializer::toQueryValue($end_date, 'date');
        }
        // query params
        if ($group_id !== null) {
            $queryParams['group_id'] = ObjectSerializer::toQueryValue($group_id, null);
        }
        // query params
        if (is_array($keyword_ids)) {
            $keyword_ids = ObjectSerializer::serializeCollection($keyword_ids, 'multi', true);
        }
        if ($keyword_ids !== null) {
            $queryParams['keyword_ids'] = ObjectSerializer::toQueryValue($keyword_ids, null);
        }
        // query params
        if ($limit !== null) {
            $queryParams['limit'] = ObjectSerializer::toQueryValue($limit, null);
        }
        // query params
        if ($offset !== null) {
            $queryParams['offset'] = ObjectSerializer::toQueryValue($offset, null);
        }
        // query params
        if ($search !== null) {
            $queryParams['search'] = ObjectSerializer::toQueryValue($search, null);
        }


        // body params
        $_tempBody = null;

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                []
            );
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            // $_tempBody is the method argument, if present
            $httpBody = $_tempBody;
            // \stdClass has no __toString(), so we should encode it manually
            if ($httpBody instanceof \stdClass && $headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($httpBody);
            }
        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $multipartContents[] = [
                        'name' => $formParamName,
                        'contents' => $formParamValue
                    ];
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($formParams);

            } else {
                // for HTTP post (form)
                $httpBody = \GuzzleHttp\Psr7\Query::build($formParams);
            }
        }

        // this endpoint requires API key authentication
        $apiKey = $this->config->getApiKeyWithPrefix('Authorization');
        if ($apiKey !== null) {
            $headers['Authorization'] = $apiKey;
        }

        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $query = \GuzzleHttp\Psr7\Query::build($queryParams);
        return new Request(
            'GET',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation rankTrackerV30KeywordsTopResultsGet
     *
     * Get Top 100 Results
     *
     * @param  int $campaign_id The ID of the campaign for which keyword competitor ranking data must be returned.  Please refer to the Quick Start Guide to learn how to retrieve the IDs of your campaigns. (required)
     * @param  \DateTime $date The date for which the ranking data will be provided, in YYYY-MM-DD format. (required)
     * @param  string $device The device type to get ranking data for–either &#x60;desktop&#x60; or &#x60;mobile&#x60;.  The default selection is &#x60;desktop&#x60;. (required)
     * @param  int $group_id The IDs of specific groups in the campaign to get competitor ranking data for. If not specified, returns data for all of the keywords in the campaign.  Please refer to the Quick Start Guide to learn how to identify the IDs of your groups.  If you do not specify a &#x60;group_id&#x60;, the default value is the &#x60;All Keywords&#x60; group, which means data will be returned for all active keywords in the campaign. (optional)
     * @param  int[] $keyword_ids The IDs of the keywords for which you want to return the data. &#x60;keyword_ids&#x60; should be a comma-separated list of keyword IDs.   Please refer to the Quick Start Guide to learn how to identify the IDs of your keywords.  If you do not specify &#x60;keyword_ids&#x60;, the API will return data for all keywords in the campaign that meet the other specified criteria (e.g. &#x60;group_id&#x60;). (optional)
     * @param  int $limit Determines the maximum number of records to return in a single request. Maximum Value: 1000 records per request  If you do not specify a &#x60;limit&#x60;, the default number of records returned per request will be 100. (optional)
     * @param  int $offset The starting index within the results to begin returning data. Typically used with the &#x60;limit&#x60; parameter to implement pagination.  If you do not specify an offset, the default is &#x60;0&#x60;, which means the API will start from the first record. (optional)
     *
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Swagger\Client\Model\TopResults
     */
    public function rankTrackerV30KeywordsTopResultsGet($campaign_id, $date, $device, $group_id = null, $keyword_ids = null, $limit = null, $offset = null)
    {
        list($response) = $this->rankTrackerV30KeywordsTopResultsGetWithHttpInfo($campaign_id, $date, $device, $group_id, $keyword_ids, $limit, $offset);
        return $response;
    }

    /**
     * Operation rankTrackerV30KeywordsTopResultsGetWithHttpInfo
     *
     * Get Top 100 Results
     *
     * @param  int $campaign_id The ID of the campaign for which keyword competitor ranking data must be returned.  Please refer to the Quick Start Guide to learn how to retrieve the IDs of your campaigns. (required)
     * @param  \DateTime $date The date for which the ranking data will be provided, in YYYY-MM-DD format. (required)
     * @param  string $device The device type to get ranking data for–either &#x60;desktop&#x60; or &#x60;mobile&#x60;.  The default selection is &#x60;desktop&#x60;. (required)
     * @param  int $group_id The IDs of specific groups in the campaign to get competitor ranking data for. If not specified, returns data for all of the keywords in the campaign.  Please refer to the Quick Start Guide to learn how to identify the IDs of your groups.  If you do not specify a &#x60;group_id&#x60;, the default value is the &#x60;All Keywords&#x60; group, which means data will be returned for all active keywords in the campaign. (optional)
     * @param  int[] $keyword_ids The IDs of the keywords for which you want to return the data. &#x60;keyword_ids&#x60; should be a comma-separated list of keyword IDs.   Please refer to the Quick Start Guide to learn how to identify the IDs of your keywords.  If you do not specify &#x60;keyword_ids&#x60;, the API will return data for all keywords in the campaign that meet the other specified criteria (e.g. &#x60;group_id&#x60;). (optional)
     * @param  int $limit Determines the maximum number of records to return in a single request. Maximum Value: 1000 records per request  If you do not specify a &#x60;limit&#x60;, the default number of records returned per request will be 100. (optional)
     * @param  int $offset The starting index within the results to begin returning data. Typically used with the &#x60;limit&#x60; parameter to implement pagination.  If you do not specify an offset, the default is &#x60;0&#x60;, which means the API will start from the first record. (optional)
     *
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Swagger\Client\Model\TopResults, HTTP status code, HTTP response headers (array of strings)
     */
    public function rankTrackerV30KeywordsTopResultsGetWithHttpInfo($campaign_id, $date, $device, $group_id = null, $keyword_ids = null, $limit = null, $offset = null)
    {
        $returnType = '\Swagger\Client\Model\TopResults';
        $request = $this->rankTrackerV30KeywordsTopResultsGetRequest($campaign_id, $date, $device, $group_id, $keyword_ids, $limit, $offset);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? $e->getResponse()->getBody()->getContents() : null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    $response->getBody()
                );
            }

            $responseBody = $response->getBody();
            if ($returnType === '\SplFileObject') {
                $content = $responseBody; //stream goes to serializer
            } else {
                $content = $responseBody->getContents();
                if (!in_array($returnType, ['string','integer','bool'])) {
                    $content = json_decode($content);
                }
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Swagger\Client\Model\TopResults',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation rankTrackerV30KeywordsTopResultsGetAsync
     *
     * Get Top 100 Results
     *
     * @param  int $campaign_id The ID of the campaign for which keyword competitor ranking data must be returned.  Please refer to the Quick Start Guide to learn how to retrieve the IDs of your campaigns. (required)
     * @param  \DateTime $date The date for which the ranking data will be provided, in YYYY-MM-DD format. (required)
     * @param  string $device The device type to get ranking data for–either &#x60;desktop&#x60; or &#x60;mobile&#x60;.  The default selection is &#x60;desktop&#x60;. (required)
     * @param  int $group_id The IDs of specific groups in the campaign to get competitor ranking data for. If not specified, returns data for all of the keywords in the campaign.  Please refer to the Quick Start Guide to learn how to identify the IDs of your groups.  If you do not specify a &#x60;group_id&#x60;, the default value is the &#x60;All Keywords&#x60; group, which means data will be returned for all active keywords in the campaign. (optional)
     * @param  int[] $keyword_ids The IDs of the keywords for which you want to return the data. &#x60;keyword_ids&#x60; should be a comma-separated list of keyword IDs.   Please refer to the Quick Start Guide to learn how to identify the IDs of your keywords.  If you do not specify &#x60;keyword_ids&#x60;, the API will return data for all keywords in the campaign that meet the other specified criteria (e.g. &#x60;group_id&#x60;). (optional)
     * @param  int $limit Determines the maximum number of records to return in a single request. Maximum Value: 1000 records per request  If you do not specify a &#x60;limit&#x60;, the default number of records returned per request will be 100. (optional)
     * @param  int $offset The starting index within the results to begin returning data. Typically used with the &#x60;limit&#x60; parameter to implement pagination.  If you do not specify an offset, the default is &#x60;0&#x60;, which means the API will start from the first record. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function rankTrackerV30KeywordsTopResultsGetAsync($campaign_id, $date, $device, $group_id = null, $keyword_ids = null, $limit = null, $offset = null)
    {
        return $this->rankTrackerV30KeywordsTopResultsGetAsyncWithHttpInfo($campaign_id, $date, $device, $group_id, $keyword_ids, $limit, $offset)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation rankTrackerV30KeywordsTopResultsGetAsyncWithHttpInfo
     *
     * Get Top 100 Results
     *
     * @param  int $campaign_id The ID of the campaign for which keyword competitor ranking data must be returned.  Please refer to the Quick Start Guide to learn how to retrieve the IDs of your campaigns. (required)
     * @param  \DateTime $date The date for which the ranking data will be provided, in YYYY-MM-DD format. (required)
     * @param  string $device The device type to get ranking data for–either &#x60;desktop&#x60; or &#x60;mobile&#x60;.  The default selection is &#x60;desktop&#x60;. (required)
     * @param  int $group_id The IDs of specific groups in the campaign to get competitor ranking data for. If not specified, returns data for all of the keywords in the campaign.  Please refer to the Quick Start Guide to learn how to identify the IDs of your groups.  If you do not specify a &#x60;group_id&#x60;, the default value is the &#x60;All Keywords&#x60; group, which means data will be returned for all active keywords in the campaign. (optional)
     * @param  int[] $keyword_ids The IDs of the keywords for which you want to return the data. &#x60;keyword_ids&#x60; should be a comma-separated list of keyword IDs.   Please refer to the Quick Start Guide to learn how to identify the IDs of your keywords.  If you do not specify &#x60;keyword_ids&#x60;, the API will return data for all keywords in the campaign that meet the other specified criteria (e.g. &#x60;group_id&#x60;). (optional)
     * @param  int $limit Determines the maximum number of records to return in a single request. Maximum Value: 1000 records per request  If you do not specify a &#x60;limit&#x60;, the default number of records returned per request will be 100. (optional)
     * @param  int $offset The starting index within the results to begin returning data. Typically used with the &#x60;limit&#x60; parameter to implement pagination.  If you do not specify an offset, the default is &#x60;0&#x60;, which means the API will start from the first record. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function rankTrackerV30KeywordsTopResultsGetAsyncWithHttpInfo($campaign_id, $date, $device, $group_id = null, $keyword_ids = null, $limit = null, $offset = null)
    {
        $returnType = '\Swagger\Client\Model\TopResults';
        $request = $this->rankTrackerV30KeywordsTopResultsGetRequest($campaign_id, $date, $device, $group_id, $keyword_ids, $limit, $offset);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    $responseBody = $response->getBody();
                    if ($returnType === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = $responseBody->getContents();
                        if ($returnType !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, $returnType, []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'rankTrackerV30KeywordsTopResultsGet'
     *
     * @param  int $campaign_id The ID of the campaign for which keyword competitor ranking data must be returned.  Please refer to the Quick Start Guide to learn how to retrieve the IDs of your campaigns. (required)
     * @param  \DateTime $date The date for which the ranking data will be provided, in YYYY-MM-DD format. (required)
     * @param  string $device The device type to get ranking data for–either &#x60;desktop&#x60; or &#x60;mobile&#x60;.  The default selection is &#x60;desktop&#x60;. (required)
     * @param  int $group_id The IDs of specific groups in the campaign to get competitor ranking data for. If not specified, returns data for all of the keywords in the campaign.  Please refer to the Quick Start Guide to learn how to identify the IDs of your groups.  If you do not specify a &#x60;group_id&#x60;, the default value is the &#x60;All Keywords&#x60; group, which means data will be returned for all active keywords in the campaign. (optional)
     * @param  int[] $keyword_ids The IDs of the keywords for which you want to return the data. &#x60;keyword_ids&#x60; should be a comma-separated list of keyword IDs.   Please refer to the Quick Start Guide to learn how to identify the IDs of your keywords.  If you do not specify &#x60;keyword_ids&#x60;, the API will return data for all keywords in the campaign that meet the other specified criteria (e.g. &#x60;group_id&#x60;). (optional)
     * @param  int $limit Determines the maximum number of records to return in a single request. Maximum Value: 1000 records per request  If you do not specify a &#x60;limit&#x60;, the default number of records returned per request will be 100. (optional)
     * @param  int $offset The starting index within the results to begin returning data. Typically used with the &#x60;limit&#x60; parameter to implement pagination.  If you do not specify an offset, the default is &#x60;0&#x60;, which means the API will start from the first record. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function rankTrackerV30KeywordsTopResultsGetRequest($campaign_id, $date, $device, $group_id = null, $keyword_ids = null, $limit = null, $offset = null)
    {
        // verify the required parameter 'campaign_id' is set
        if ($campaign_id === null || (is_array($campaign_id) && count($campaign_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $campaign_id when calling rankTrackerV30KeywordsTopResultsGet'
            );
        }
        // verify the required parameter 'date' is set
        if ($date === null || (is_array($date) && count($date) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $date when calling rankTrackerV30KeywordsTopResultsGet'
            );
        }
        // verify the required parameter 'device' is set
        if ($device === null || (is_array($device) && count($device) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $device when calling rankTrackerV30KeywordsTopResultsGet'
            );
        }

        $resourcePath = '/rank-tracker/v3.0/keywords/top-results';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        if ($campaign_id !== null) {
            $queryParams['campaign_id'] = ObjectSerializer::toQueryValue($campaign_id, null);
        }
        // query params
        if ($date !== null) {
            $queryParams['date'] = ObjectSerializer::toQueryValue($date, 'date');
        }
        // query params
        if ($device !== null) {
            $queryParams['device'] = ObjectSerializer::toQueryValue($device, null);
        }
        // query params
        if ($group_id !== null) {
            $queryParams['group_id'] = ObjectSerializer::toQueryValue($group_id, null);
        }
        // query params
        if (is_array($keyword_ids)) {
            $keyword_ids = ObjectSerializer::serializeCollection($keyword_ids, 'multi', true);
        }
        if ($keyword_ids !== null) {
            $queryParams['keyword_ids'] = ObjectSerializer::toQueryValue($keyword_ids, null);
        }
        // query params
        if ($limit !== null) {
            $queryParams['limit'] = ObjectSerializer::toQueryValue($limit, null);
        }
        // query params
        if ($offset !== null) {
            $queryParams['offset'] = ObjectSerializer::toQueryValue($offset, null);
        }


        // body params
        $_tempBody = null;

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                []
            );
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            // $_tempBody is the method argument, if present
            $httpBody = $_tempBody;
            // \stdClass has no __toString(), so we should encode it manually
            if ($httpBody instanceof \stdClass && $headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($httpBody);
            }
        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $multipartContents[] = [
                        'name' => $formParamName,
                        'contents' => $formParamValue
                    ];
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($formParams);

            } else {
                // for HTTP post (form)
                $httpBody = \GuzzleHttp\Psr7\Query::build($formParams);
            }
        }

        // this endpoint requires API key authentication
        $apiKey = $this->config->getApiKeyWithPrefix('Authorization');
        if ($apiKey !== null) {
            $headers['Authorization'] = $apiKey;
        }

        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $query = \GuzzleHttp\Psr7\Query::build($queryParams);
        return new Request(
            'GET',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Create http client option
     *
     * @throws \RuntimeException on file opening failure
     * @return array of http client options
     */
    protected function createHttpClientOption()
    {
        $options = [];
        if ($this->config->getDebug()) {
            $options[RequestOptions::DEBUG] = fopen($this->config->getDebugFile(), 'a');
            if (!$options[RequestOptions::DEBUG]) {
                throw new \RuntimeException('Failed to open the debug file: ' . $this->config->getDebugFile());
            }
        }

        return $options;
    }
}
