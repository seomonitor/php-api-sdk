<?php
/**
 * ContentChange
 *
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

namespace Seomonitor\Client\Model;

use \ArrayAccess;
use \Swagger\Client\ObjectSerializer;

/**
 * ContentChange Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ContentChange implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'content-change';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'element' => 'string',
        'state_from' => 'string',
        'state_to' => 'string',
        'content_from' => 'string',
        'content_to' => 'string',
        'full_occurences' => 'int',
        'partial_occurences' => 'int',
        'full_occurences_change' => 'int',
        'partial_occurences_change' => 'int',
        'words_from' => 'int',
        'words_to' => 'int',
        'percentage_change' => 'float'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'element' => null,
        'state_from' => null,
        'state_to' => null,
        'content_from' => null,
        'content_to' => null,
        'full_occurences' => 'int32',
        'partial_occurences' => 'int32',
        'full_occurences_change' => 'int32',
        'partial_occurences_change' => 'int32',
        'words_from' => 'int32',
        'words_to' => 'int32',
        'percentage_change' => null
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerFormats()
    {
        return self::$swaggerFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'element' => 'element',
        'state_from' => 'state_from',
        'state_to' => 'state_to',
        'content_from' => 'content_from',
        'content_to' => 'content_to',
        'full_occurences' => 'full_occurences',
        'partial_occurences' => 'partial_occurences',
        'full_occurences_change' => 'full_occurences_change',
        'partial_occurences_change' => 'partial_occurences_change',
        'words_from' => 'words_from',
        'words_to' => 'words_to',
        'percentage_change' => 'percentage_change'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'element' => 'setElement',
        'state_from' => 'setStateFrom',
        'state_to' => 'setStateTo',
        'content_from' => 'setContentFrom',
        'content_to' => 'setContentTo',
        'full_occurences' => 'setFullOccurences',
        'partial_occurences' => 'setPartialOccurences',
        'full_occurences_change' => 'setFullOccurencesChange',
        'partial_occurences_change' => 'setPartialOccurencesChange',
        'words_from' => 'setWordsFrom',
        'words_to' => 'setWordsTo',
        'percentage_change' => 'setPercentageChange'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'element' => 'getElement',
        'state_from' => 'getStateFrom',
        'state_to' => 'getStateTo',
        'content_from' => 'getContentFrom',
        'content_to' => 'getContentTo',
        'full_occurences' => 'getFullOccurences',
        'partial_occurences' => 'getPartialOccurences',
        'full_occurences_change' => 'getFullOccurencesChange',
        'partial_occurences_change' => 'getPartialOccurencesChange',
        'words_from' => 'getWordsFrom',
        'words_to' => 'getWordsTo',
        'percentage_change' => 'getPercentageChange'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$swaggerModelName;
    }



    /**
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['element'] = isset($data['element']) ? $data['element'] : null;
        $this->container['state_from'] = isset($data['state_from']) ? $data['state_from'] : null;
        $this->container['state_to'] = isset($data['state_to']) ? $data['state_to'] : null;
        $this->container['content_from'] = isset($data['content_from']) ? $data['content_from'] : null;
        $this->container['content_to'] = isset($data['content_to']) ? $data['content_to'] : null;
        $this->container['full_occurences'] = isset($data['full_occurences']) ? $data['full_occurences'] : null;
        $this->container['partial_occurences'] = isset($data['partial_occurences']) ? $data['partial_occurences'] : null;
        $this->container['full_occurences_change'] = isset($data['full_occurences_change']) ? $data['full_occurences_change'] : null;
        $this->container['partial_occurences_change'] = isset($data['partial_occurences_change']) ? $data['partial_occurences_change'] : null;
        $this->container['words_from'] = isset($data['words_from']) ? $data['words_from'] : null;
        $this->container['words_to'] = isset($data['words_to']) ? $data['words_to'] : null;
        $this->container['percentage_change'] = isset($data['percentage_change']) ? $data['percentage_change'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets element
     *
     * @return string
     */
    public function getElement()
    {
        return $this->container['element'];
    }

    /**
     * Sets element
     *
     * @param string $element The type of HTML element on the landing page. Types are Title, H1, H2, H3, H4, H5, H6 or BODY
     *
     * @return $this
     */
    public function setElement($element)
    {
        $this->container['element'] = $element;

        return $this;
    }

    /**
     * Gets state_from
     *
     * @return string
     */
    public function getStateFrom()
    {
        return $this->container['state_from'];
    }

    /**
     * Sets state_from
     *
     * @param string $state_from The keyword occurrences status in the previous element content. States are missing, not-present, partialy-present or fully-present
     *
     * @return $this
     */
    public function setStateFrom($state_from)
    {
        $this->container['state_from'] = $state_from;

        return $this;
    }

    /**
     * Gets state_to
     *
     * @return string
     */
    public function getStateTo()
    {
        return $this->container['state_to'];
    }

    /**
     * Sets state_to
     *
     * @param string $state_to The keyword occurrences status in the current element content. States are missing, not-present, partialy-present or fully-present
     *
     * @return $this
     */
    public function setStateTo($state_to)
    {
        $this->container['state_to'] = $state_to;

        return $this;
    }

    /**
     * Gets content_from
     *
     * @return string
     */
    public function getContentFrom()
    {
        return $this->container['content_from'];
    }

    /**
     * Sets content_from
     *
     * @param string $content_from The previous content of the element
     *
     * @return $this
     */
    public function setContentFrom($content_from)
    {
        $this->container['content_from'] = $content_from;

        return $this;
    }

    /**
     * Gets content_to
     *
     * @return string
     */
    public function getContentTo()
    {
        return $this->container['content_to'];
    }

    /**
     * Sets content_to
     *
     * @param string $content_to The current content of the element
     *
     * @return $this
     */
    public function setContentTo($content_to)
    {
        $this->container['content_to'] = $content_to;

        return $this;
    }

    /**
     * Gets full_occurences
     *
     * @return int
     */
    public function getFullOccurences()
    {
        return $this->container['full_occurences'];
    }

    /**
     * Sets full_occurences
     *
     * @param int $full_occurences This indicates if there are fully present keywords in the HTML element
     *
     * @return $this
     */
    public function setFullOccurences($full_occurences)
    {
        $this->container['full_occurences'] = $full_occurences;

        return $this;
    }

    /**
     * Gets partial_occurences
     *
     * @return int
     */
    public function getPartialOccurences()
    {
        return $this->container['partial_occurences'];
    }

    /**
     * Sets partial_occurences
     *
     * @param int $partial_occurences This indicates if there are partially present keywords in the HTML element
     *
     * @return $this
     */
    public function setPartialOccurences($partial_occurences)
    {
        $this->container['partial_occurences'] = $partial_occurences;

        return $this;
    }

    /**
     * Gets full_occurences_change
     *
     * @return int
     */
    public function getFullOccurencesChange()
    {
        return $this->container['full_occurences_change'];
    }

    /**
     * Sets full_occurences_change
     *
     * @param int $full_occurences_change This is the difference between previous fully present occurrences count and the current fully present occurrences count in the element
     *
     * @return $this
     */
    public function setFullOccurencesChange($full_occurences_change)
    {
        $this->container['full_occurences_change'] = $full_occurences_change;

        return $this;
    }

    /**
     * Gets partial_occurences_change
     *
     * @return int
     */
    public function getPartialOccurencesChange()
    {
        return $this->container['partial_occurences_change'];
    }

    /**
     * Sets partial_occurences_change
     *
     * @param int $partial_occurences_change This is the difference between previous partially present occurrences count and the current partially present occurrences count in the element
     *
     * @return $this
     */
    public function setPartialOccurencesChange($partial_occurences_change)
    {
        $this->container['partial_occurences_change'] = $partial_occurences_change;

        return $this;
    }

    /**
     * Gets words_from
     *
     * @return int
     */
    public function getWordsFrom()
    {
        return $this->container['words_from'];
    }

    /**
     * Sets words_from
     *
     * @param int $words_from The total number of words in the previous content of the BODY element. This is only applicable to BODY element
     *
     * @return $this
     */
    public function setWordsFrom($words_from)
    {
        $this->container['words_from'] = $words_from;

        return $this;
    }

    /**
     * Gets words_to
     *
     * @return int
     */
    public function getWordsTo()
    {
        return $this->container['words_to'];
    }

    /**
     * Sets words_to
     *
     * @param int $words_to The total number of words in the current content of the BODY element. This is only applicable to BODY element
     *
     * @return $this
     */
    public function setWordsTo($words_to)
    {
        $this->container['words_to'] = $words_to;

        return $this;
    }

    /**
     * Gets percentage_change
     *
     * @return float
     */
    public function getPercentageChange()
    {
        return $this->container['percentage_change'];
    }

    /**
     * Sets percentage_change
     *
     * @param float $percentage_change The percentage change of the content in the BODY element. This is only applicable to BODY element
     *
     * @return $this
     */
    public function setPercentageChange($percentage_change)
    {
        $this->container['percentage_change'] = $percentage_change;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    #[\ReturnTypeWillChange]
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed
     */
    #[\ReturnTypeWillChange]
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     *
     * @param integer $offset Offset
     * @param mixed   $value  Value to be set
     *
     * @return void
     */
    #[\ReturnTypeWillChange]
    public function offsetSet($offset, $value)
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     *
     * @param integer $offset Offset
     *
     * @return void
     */
    #[\ReturnTypeWillChange]
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(
                ObjectSerializer::sanitizeForSerialization($this),
                JSON_PRETTY_PRINT
            );
        }

        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}
