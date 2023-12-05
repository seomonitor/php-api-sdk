<?php
/**
 * OrganicTrafficApi
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
 * OrganicTrafficApi Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class OrganicTrafficApi
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
     * Operation organicTrafficV30DailyTrafficGet
     *
     * Get Daily Traffic Data by Segment
     *
     * @param  int $campaign_id This parameter specifies the ID of the campaign for which you want to return data.   Please refer to the Quick Start Guide to learn how to retrieve the IDs of your campaigns. (required)
     * @param  \DateTime $start_date This parameter specifies the start date of the timeframe for which you want to return the data, in YYYY-MM-DD format. (required)
     * @param  \DateTime $end_date This parameter specifies the end date of the timeframe for which you want to return the data, in YYYY-MM-DD format. (required)
     * @param  string $segment The name assigned to the segment in the platform. Accepted values are &#x60;all&#x60;, &#x60;non-brand&#x60;, &#x60;brand&#x60;, or the name of a custom traffic segment created in the SEOmonitor platform, e.g. \&quot;blog\&quot;.  Unless otherwise specified, data will be returned for the Non-Brand segment by default. (optional)
     *
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Swagger\Client\Model\TrafficOverview
     */
    public function organicTrafficV30DailyTrafficGet($campaign_id, $start_date, $end_date, $segment = null)
    {
        list($response) = $this->organicTrafficV30DailyTrafficGetWithHttpInfo($campaign_id, $start_date, $end_date, $segment);
        return $response;
    }

    /**
     * Operation organicTrafficV30DailyTrafficGetWithHttpInfo
     *
     * Get Daily Traffic Data by Segment
     *
     * @param  int $campaign_id This parameter specifies the ID of the campaign for which you want to return data.   Please refer to the Quick Start Guide to learn how to retrieve the IDs of your campaigns. (required)
     * @param  \DateTime $start_date This parameter specifies the start date of the timeframe for which you want to return the data, in YYYY-MM-DD format. (required)
     * @param  \DateTime $end_date This parameter specifies the end date of the timeframe for which you want to return the data, in YYYY-MM-DD format. (required)
     * @param  string $segment The name assigned to the segment in the platform. Accepted values are &#x60;all&#x60;, &#x60;non-brand&#x60;, &#x60;brand&#x60;, or the name of a custom traffic segment created in the SEOmonitor platform, e.g. \&quot;blog\&quot;.  Unless otherwise specified, data will be returned for the Non-Brand segment by default. (optional)
     *
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Swagger\Client\Model\TrafficOverview, HTTP status code, HTTP response headers (array of strings)
     */
    public function organicTrafficV30DailyTrafficGetWithHttpInfo($campaign_id, $start_date, $end_date, $segment = null)
    {
        $returnType = '\Swagger\Client\Model\TrafficOverview';
        $request = $this->organicTrafficV30DailyTrafficGetRequest($campaign_id, $start_date, $end_date, $segment);

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
                        '\Swagger\Client\Model\TrafficOverview',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation organicTrafficV30DailyTrafficGetAsync
     *
     * Get Daily Traffic Data by Segment
     *
     * @param  int $campaign_id This parameter specifies the ID of the campaign for which you want to return data.   Please refer to the Quick Start Guide to learn how to retrieve the IDs of your campaigns. (required)
     * @param  \DateTime $start_date This parameter specifies the start date of the timeframe for which you want to return the data, in YYYY-MM-DD format. (required)
     * @param  \DateTime $end_date This parameter specifies the end date of the timeframe for which you want to return the data, in YYYY-MM-DD format. (required)
     * @param  string $segment The name assigned to the segment in the platform. Accepted values are &#x60;all&#x60;, &#x60;non-brand&#x60;, &#x60;brand&#x60;, or the name of a custom traffic segment created in the SEOmonitor platform, e.g. \&quot;blog\&quot;.  Unless otherwise specified, data will be returned for the Non-Brand segment by default. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function organicTrafficV30DailyTrafficGetAsync($campaign_id, $start_date, $end_date, $segment = null)
    {
        return $this->organicTrafficV30DailyTrafficGetAsyncWithHttpInfo($campaign_id, $start_date, $end_date, $segment)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation organicTrafficV30DailyTrafficGetAsyncWithHttpInfo
     *
     * Get Daily Traffic Data by Segment
     *
     * @param  int $campaign_id This parameter specifies the ID of the campaign for which you want to return data.   Please refer to the Quick Start Guide to learn how to retrieve the IDs of your campaigns. (required)
     * @param  \DateTime $start_date This parameter specifies the start date of the timeframe for which you want to return the data, in YYYY-MM-DD format. (required)
     * @param  \DateTime $end_date This parameter specifies the end date of the timeframe for which you want to return the data, in YYYY-MM-DD format. (required)
     * @param  string $segment The name assigned to the segment in the platform. Accepted values are &#x60;all&#x60;, &#x60;non-brand&#x60;, &#x60;brand&#x60;, or the name of a custom traffic segment created in the SEOmonitor platform, e.g. \&quot;blog\&quot;.  Unless otherwise specified, data will be returned for the Non-Brand segment by default. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function organicTrafficV30DailyTrafficGetAsyncWithHttpInfo($campaign_id, $start_date, $end_date, $segment = null)
    {
        $returnType = '\Swagger\Client\Model\TrafficOverview';
        $request = $this->organicTrafficV30DailyTrafficGetRequest($campaign_id, $start_date, $end_date, $segment);

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
     * Create request for operation 'organicTrafficV30DailyTrafficGet'
     *
     * @param  int $campaign_id This parameter specifies the ID of the campaign for which you want to return data.   Please refer to the Quick Start Guide to learn how to retrieve the IDs of your campaigns. (required)
     * @param  \DateTime $start_date This parameter specifies the start date of the timeframe for which you want to return the data, in YYYY-MM-DD format. (required)
     * @param  \DateTime $end_date This parameter specifies the end date of the timeframe for which you want to return the data, in YYYY-MM-DD format. (required)
     * @param  string $segment The name assigned to the segment in the platform. Accepted values are &#x60;all&#x60;, &#x60;non-brand&#x60;, &#x60;brand&#x60;, or the name of a custom traffic segment created in the SEOmonitor platform, e.g. \&quot;blog\&quot;.  Unless otherwise specified, data will be returned for the Non-Brand segment by default. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function organicTrafficV30DailyTrafficGetRequest($campaign_id, $start_date, $end_date, $segment = null)
    {
        // verify the required parameter 'campaign_id' is set
        if ($campaign_id === null || (is_array($campaign_id) && count($campaign_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $campaign_id when calling organicTrafficV30DailyTrafficGet'
            );
        }
        // verify the required parameter 'start_date' is set
        if ($start_date === null || (is_array($start_date) && count($start_date) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $start_date when calling organicTrafficV30DailyTrafficGet'
            );
        }
        // verify the required parameter 'end_date' is set
        if ($end_date === null || (is_array($end_date) && count($end_date) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $end_date when calling organicTrafficV30DailyTrafficGet'
            );
        }

        $resourcePath = '/organic-traffic/v3.0/daily-traffic';
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
        if ($segment !== null) {
            $queryParams['segment'] = ObjectSerializer::toQueryValue($segment, null);
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
     * Operation organicTrafficV30KeywordsGet
     *
     * Get Traffic Data by Keywords
     *
     * @param  int $campaign_id This parameter specifies the ID of the campaign for which you want to return data.   Please refer to the Quick Start Guide to learn how to retrieve the IDs of your campaigns. (required)
     * @param  \DateTime $start_date This parameter specifies the start date of the timeframe for which you want to return the data, in YYYY-MM-DD format. (required)
     * @param  \DateTime $end_date This parameter specifies the end date of the timeframe for which you want to return the data, in YYYY-MM-DD format. (required)
     * @param  string $segment The name assigned to the segment in the platform. Accepted values are &#x60;all&#x60;, &#x60;non-brand&#x60;, &#x60;brand&#x60;, or the name of a custom traffic segment created in the SEOmonitor platform, e.g. \&quot;blog\&quot;.  Unless otherwise specified, data will be returned for the Non-Brand segment by default. (optional)
     * @param  int $limit This parameter determines the maximum number of records to return in a single request.   Maximum Value: 1000 records per request  If you do not specify a &#x60;limit&#x60;, the default number of records returned per request will be 100. (optional)
     * @param  int $offset This parameter specifies the starting point within the collection of resource results. It&#x27;s typically used with the &#x60;limit&#x60; parameter to implement pagination.  If you do not specify an &#x60;offset&#x60;, the API will start from the first record. (optional)
     * @param  string $order_by This parameter enables you to sort the returned data based on a specified field.  The field names you can use to sort data are:  - &#x60;avg_position&#x60;   - &#x60;sessions&#x60;  - &#x60;transactions&#x60;  - &#x60;goals&#x60;  - &#x60;transactions_revenue&#x60;  - &#x60;goals_revenue&#x60;   If you do not specify an &#x60;order_direction&#x60;, the default is &#x60;asc&#x60;, which means the API will sort the data in ascending order. (optional)
     * @param  string $order_direction This parameter determines the sorting direction of the &#x60;order_by&#x60; field. You can sort the data in either ascending (&#x60;asc&#x60;) or descending (&#x60;desc&#x60;) order.  If the &#x60;tracking_status&#x60; is not specified, data for all keywords is returned. (optional)
     * @param  string $tracking_status This parameter enables you to filter the results based on the keyword property of being tracked in the SEOmonitor platform. Allowed values are &#x60;tracked&#x60;, &#x60;untracked&#x60;, and &#x60;all&#x60;.  If the &#x60;tracking_status&#x60; is not specified, data for all keywords is returned. (optional)
     * @param  string $search The &#x60;search&#x60; parameter allows you to filter the results based on a keyword search. The API will return only those records where the keyword matches (fully or partially) the provided search term.  The search parameter is case-insensitive, allowing partial matches irrespective of casing. (optional)
     *
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Swagger\Client\Model\TrafficKeywords
     */
    public function organicTrafficV30KeywordsGet($campaign_id, $start_date, $end_date, $segment = null, $limit = null, $offset = null, $order_by = null, $order_direction = null, $tracking_status = null, $search = null)
    {
        list($response) = $this->organicTrafficV30KeywordsGetWithHttpInfo($campaign_id, $start_date, $end_date, $segment, $limit, $offset, $order_by, $order_direction, $tracking_status, $search);
        return $response;
    }

    /**
     * Operation organicTrafficV30KeywordsGetWithHttpInfo
     *
     * Get Traffic Data by Keywords
     *
     * @param  int $campaign_id This parameter specifies the ID of the campaign for which you want to return data.   Please refer to the Quick Start Guide to learn how to retrieve the IDs of your campaigns. (required)
     * @param  \DateTime $start_date This parameter specifies the start date of the timeframe for which you want to return the data, in YYYY-MM-DD format. (required)
     * @param  \DateTime $end_date This parameter specifies the end date of the timeframe for which you want to return the data, in YYYY-MM-DD format. (required)
     * @param  string $segment The name assigned to the segment in the platform. Accepted values are &#x60;all&#x60;, &#x60;non-brand&#x60;, &#x60;brand&#x60;, or the name of a custom traffic segment created in the SEOmonitor platform, e.g. \&quot;blog\&quot;.  Unless otherwise specified, data will be returned for the Non-Brand segment by default. (optional)
     * @param  int $limit This parameter determines the maximum number of records to return in a single request.   Maximum Value: 1000 records per request  If you do not specify a &#x60;limit&#x60;, the default number of records returned per request will be 100. (optional)
     * @param  int $offset This parameter specifies the starting point within the collection of resource results. It&#x27;s typically used with the &#x60;limit&#x60; parameter to implement pagination.  If you do not specify an &#x60;offset&#x60;, the API will start from the first record. (optional)
     * @param  string $order_by This parameter enables you to sort the returned data based on a specified field.  The field names you can use to sort data are:  - &#x60;avg_position&#x60;   - &#x60;sessions&#x60;  - &#x60;transactions&#x60;  - &#x60;goals&#x60;  - &#x60;transactions_revenue&#x60;  - &#x60;goals_revenue&#x60;   If you do not specify an &#x60;order_direction&#x60;, the default is &#x60;asc&#x60;, which means the API will sort the data in ascending order. (optional)
     * @param  string $order_direction This parameter determines the sorting direction of the &#x60;order_by&#x60; field. You can sort the data in either ascending (&#x60;asc&#x60;) or descending (&#x60;desc&#x60;) order.  If the &#x60;tracking_status&#x60; is not specified, data for all keywords is returned. (optional)
     * @param  string $tracking_status This parameter enables you to filter the results based on the keyword property of being tracked in the SEOmonitor platform. Allowed values are &#x60;tracked&#x60;, &#x60;untracked&#x60;, and &#x60;all&#x60;.  If the &#x60;tracking_status&#x60; is not specified, data for all keywords is returned. (optional)
     * @param  string $search The &#x60;search&#x60; parameter allows you to filter the results based on a keyword search. The API will return only those records where the keyword matches (fully or partially) the provided search term.  The search parameter is case-insensitive, allowing partial matches irrespective of casing. (optional)
     *
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Swagger\Client\Model\TrafficKeywords, HTTP status code, HTTP response headers (array of strings)
     */
    public function organicTrafficV30KeywordsGetWithHttpInfo($campaign_id, $start_date, $end_date, $segment = null, $limit = null, $offset = null, $order_by = null, $order_direction = null, $tracking_status = null, $search = null)
    {
        $returnType = '\Swagger\Client\Model\TrafficKeywords';
        $request = $this->organicTrafficV30KeywordsGetRequest($campaign_id, $start_date, $end_date, $segment, $limit, $offset, $order_by, $order_direction, $tracking_status, $search);

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
                        '\Swagger\Client\Model\TrafficKeywords',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation organicTrafficV30KeywordsGetAsync
     *
     * Get Traffic Data by Keywords
     *
     * @param  int $campaign_id This parameter specifies the ID of the campaign for which you want to return data.   Please refer to the Quick Start Guide to learn how to retrieve the IDs of your campaigns. (required)
     * @param  \DateTime $start_date This parameter specifies the start date of the timeframe for which you want to return the data, in YYYY-MM-DD format. (required)
     * @param  \DateTime $end_date This parameter specifies the end date of the timeframe for which you want to return the data, in YYYY-MM-DD format. (required)
     * @param  string $segment The name assigned to the segment in the platform. Accepted values are &#x60;all&#x60;, &#x60;non-brand&#x60;, &#x60;brand&#x60;, or the name of a custom traffic segment created in the SEOmonitor platform, e.g. \&quot;blog\&quot;.  Unless otherwise specified, data will be returned for the Non-Brand segment by default. (optional)
     * @param  int $limit This parameter determines the maximum number of records to return in a single request.   Maximum Value: 1000 records per request  If you do not specify a &#x60;limit&#x60;, the default number of records returned per request will be 100. (optional)
     * @param  int $offset This parameter specifies the starting point within the collection of resource results. It&#x27;s typically used with the &#x60;limit&#x60; parameter to implement pagination.  If you do not specify an &#x60;offset&#x60;, the API will start from the first record. (optional)
     * @param  string $order_by This parameter enables you to sort the returned data based on a specified field.  The field names you can use to sort data are:  - &#x60;avg_position&#x60;   - &#x60;sessions&#x60;  - &#x60;transactions&#x60;  - &#x60;goals&#x60;  - &#x60;transactions_revenue&#x60;  - &#x60;goals_revenue&#x60;   If you do not specify an &#x60;order_direction&#x60;, the default is &#x60;asc&#x60;, which means the API will sort the data in ascending order. (optional)
     * @param  string $order_direction This parameter determines the sorting direction of the &#x60;order_by&#x60; field. You can sort the data in either ascending (&#x60;asc&#x60;) or descending (&#x60;desc&#x60;) order.  If the &#x60;tracking_status&#x60; is not specified, data for all keywords is returned. (optional)
     * @param  string $tracking_status This parameter enables you to filter the results based on the keyword property of being tracked in the SEOmonitor platform. Allowed values are &#x60;tracked&#x60;, &#x60;untracked&#x60;, and &#x60;all&#x60;.  If the &#x60;tracking_status&#x60; is not specified, data for all keywords is returned. (optional)
     * @param  string $search The &#x60;search&#x60; parameter allows you to filter the results based on a keyword search. The API will return only those records where the keyword matches (fully or partially) the provided search term.  The search parameter is case-insensitive, allowing partial matches irrespective of casing. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function organicTrafficV30KeywordsGetAsync($campaign_id, $start_date, $end_date, $segment = null, $limit = null, $offset = null, $order_by = null, $order_direction = null, $tracking_status = null, $search = null)
    {
        return $this->organicTrafficV30KeywordsGetAsyncWithHttpInfo($campaign_id, $start_date, $end_date, $segment, $limit, $offset, $order_by, $order_direction, $tracking_status, $search)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation organicTrafficV30KeywordsGetAsyncWithHttpInfo
     *
     * Get Traffic Data by Keywords
     *
     * @param  int $campaign_id This parameter specifies the ID of the campaign for which you want to return data.   Please refer to the Quick Start Guide to learn how to retrieve the IDs of your campaigns. (required)
     * @param  \DateTime $start_date This parameter specifies the start date of the timeframe for which you want to return the data, in YYYY-MM-DD format. (required)
     * @param  \DateTime $end_date This parameter specifies the end date of the timeframe for which you want to return the data, in YYYY-MM-DD format. (required)
     * @param  string $segment The name assigned to the segment in the platform. Accepted values are &#x60;all&#x60;, &#x60;non-brand&#x60;, &#x60;brand&#x60;, or the name of a custom traffic segment created in the SEOmonitor platform, e.g. \&quot;blog\&quot;.  Unless otherwise specified, data will be returned for the Non-Brand segment by default. (optional)
     * @param  int $limit This parameter determines the maximum number of records to return in a single request.   Maximum Value: 1000 records per request  If you do not specify a &#x60;limit&#x60;, the default number of records returned per request will be 100. (optional)
     * @param  int $offset This parameter specifies the starting point within the collection of resource results. It&#x27;s typically used with the &#x60;limit&#x60; parameter to implement pagination.  If you do not specify an &#x60;offset&#x60;, the API will start from the first record. (optional)
     * @param  string $order_by This parameter enables you to sort the returned data based on a specified field.  The field names you can use to sort data are:  - &#x60;avg_position&#x60;   - &#x60;sessions&#x60;  - &#x60;transactions&#x60;  - &#x60;goals&#x60;  - &#x60;transactions_revenue&#x60;  - &#x60;goals_revenue&#x60;   If you do not specify an &#x60;order_direction&#x60;, the default is &#x60;asc&#x60;, which means the API will sort the data in ascending order. (optional)
     * @param  string $order_direction This parameter determines the sorting direction of the &#x60;order_by&#x60; field. You can sort the data in either ascending (&#x60;asc&#x60;) or descending (&#x60;desc&#x60;) order.  If the &#x60;tracking_status&#x60; is not specified, data for all keywords is returned. (optional)
     * @param  string $tracking_status This parameter enables you to filter the results based on the keyword property of being tracked in the SEOmonitor platform. Allowed values are &#x60;tracked&#x60;, &#x60;untracked&#x60;, and &#x60;all&#x60;.  If the &#x60;tracking_status&#x60; is not specified, data for all keywords is returned. (optional)
     * @param  string $search The &#x60;search&#x60; parameter allows you to filter the results based on a keyword search. The API will return only those records where the keyword matches (fully or partially) the provided search term.  The search parameter is case-insensitive, allowing partial matches irrespective of casing. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function organicTrafficV30KeywordsGetAsyncWithHttpInfo($campaign_id, $start_date, $end_date, $segment = null, $limit = null, $offset = null, $order_by = null, $order_direction = null, $tracking_status = null, $search = null)
    {
        $returnType = '\Swagger\Client\Model\TrafficKeywords';
        $request = $this->organicTrafficV30KeywordsGetRequest($campaign_id, $start_date, $end_date, $segment, $limit, $offset, $order_by, $order_direction, $tracking_status, $search);

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
     * Create request for operation 'organicTrafficV30KeywordsGet'
     *
     * @param  int $campaign_id This parameter specifies the ID of the campaign for which you want to return data.   Please refer to the Quick Start Guide to learn how to retrieve the IDs of your campaigns. (required)
     * @param  \DateTime $start_date This parameter specifies the start date of the timeframe for which you want to return the data, in YYYY-MM-DD format. (required)
     * @param  \DateTime $end_date This parameter specifies the end date of the timeframe for which you want to return the data, in YYYY-MM-DD format. (required)
     * @param  string $segment The name assigned to the segment in the platform. Accepted values are &#x60;all&#x60;, &#x60;non-brand&#x60;, &#x60;brand&#x60;, or the name of a custom traffic segment created in the SEOmonitor platform, e.g. \&quot;blog\&quot;.  Unless otherwise specified, data will be returned for the Non-Brand segment by default. (optional)
     * @param  int $limit This parameter determines the maximum number of records to return in a single request.   Maximum Value: 1000 records per request  If you do not specify a &#x60;limit&#x60;, the default number of records returned per request will be 100. (optional)
     * @param  int $offset This parameter specifies the starting point within the collection of resource results. It&#x27;s typically used with the &#x60;limit&#x60; parameter to implement pagination.  If you do not specify an &#x60;offset&#x60;, the API will start from the first record. (optional)
     * @param  string $order_by This parameter enables you to sort the returned data based on a specified field.  The field names you can use to sort data are:  - &#x60;avg_position&#x60;   - &#x60;sessions&#x60;  - &#x60;transactions&#x60;  - &#x60;goals&#x60;  - &#x60;transactions_revenue&#x60;  - &#x60;goals_revenue&#x60;   If you do not specify an &#x60;order_direction&#x60;, the default is &#x60;asc&#x60;, which means the API will sort the data in ascending order. (optional)
     * @param  string $order_direction This parameter determines the sorting direction of the &#x60;order_by&#x60; field. You can sort the data in either ascending (&#x60;asc&#x60;) or descending (&#x60;desc&#x60;) order.  If the &#x60;tracking_status&#x60; is not specified, data for all keywords is returned. (optional)
     * @param  string $tracking_status This parameter enables you to filter the results based on the keyword property of being tracked in the SEOmonitor platform. Allowed values are &#x60;tracked&#x60;, &#x60;untracked&#x60;, and &#x60;all&#x60;.  If the &#x60;tracking_status&#x60; is not specified, data for all keywords is returned. (optional)
     * @param  string $search The &#x60;search&#x60; parameter allows you to filter the results based on a keyword search. The API will return only those records where the keyword matches (fully or partially) the provided search term.  The search parameter is case-insensitive, allowing partial matches irrespective of casing. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function organicTrafficV30KeywordsGetRequest($campaign_id, $start_date, $end_date, $segment = null, $limit = null, $offset = null, $order_by = null, $order_direction = null, $tracking_status = null, $search = null)
    {
        // verify the required parameter 'campaign_id' is set
        if ($campaign_id === null || (is_array($campaign_id) && count($campaign_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $campaign_id when calling organicTrafficV30KeywordsGet'
            );
        }
        // verify the required parameter 'start_date' is set
        if ($start_date === null || (is_array($start_date) && count($start_date) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $start_date when calling organicTrafficV30KeywordsGet'
            );
        }
        // verify the required parameter 'end_date' is set
        if ($end_date === null || (is_array($end_date) && count($end_date) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $end_date when calling organicTrafficV30KeywordsGet'
            );
        }

        $resourcePath = '/organic-traffic/v3.0/keywords';
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
        if ($segment !== null) {
            $queryParams['segment'] = ObjectSerializer::toQueryValue($segment, null);
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
        if ($tracking_status !== null) {
            $queryParams['tracking_status'] = ObjectSerializer::toQueryValue($tracking_status, null);
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
