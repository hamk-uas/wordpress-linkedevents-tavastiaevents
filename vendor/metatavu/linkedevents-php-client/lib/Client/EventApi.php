<?php
/**
 * EventApi
 * PHP version 5
 *
 * @category Class
 * @package  Metatavu\LinkedEvents
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Linked Events information API
 *
 * Linked Events provides categorized data on events and places using JSON-LD format.  Events can be searched by date and location. Location can be exact address or larger area such as neighbourhood or borough  JSON-LD format is streamlined using include mechanism. API users can request that certain fields are included directly into the result, instead of being hyperlinks to objects.  Several fields are multilingual. These are implemented as object with each language variant as property. In this specification each multilingual field has (fi,sv,en) property triplet as example.
 *
 * OpenAPI spec version: v1
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 *
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Metatavu\LinkedEvents\Client;

use \Metatavu\LinkedEvents\ApiClient;
use \Metatavu\LinkedEvents\ApiException;
use \Metatavu\LinkedEvents\Configuration;
use \Metatavu\LinkedEvents\ObjectSerializer;

/**
 * EventApi Class Doc Comment
 *
 * @category Class
 * @package  Metatavu\LinkedEvents
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class EventApi
{
    /**
     * API Client
     *
     * @var \Metatavu\LinkedEvents\ApiClient instance of the ApiClient
     */
    protected $apiClient;

    /**
     * Constructor
     *
     * @param \Metatavu\LinkedEvents\ApiClient|null $apiClient The api client to use
     */
    public function __construct(\Metatavu\LinkedEvents\ApiClient $apiClient = null)
    {
        if ($apiClient === null) {
            $apiClient = new ApiClient();
        }

        $this->apiClient = $apiClient;
    }

    /**
     * Get API client
     *
     * @return \Metatavu\LinkedEvents\ApiClient get the API client
     */
    public function getApiClient()
    {
        return $this->apiClient;
    }

    /**
     * Set the API client
     *
     * @param \Metatavu\LinkedEvents\ApiClient $apiClient set the API client
     *
     * @return EventApi
     */
    public function setApiClient(\Metatavu\LinkedEvents\ApiClient $apiClient)
    {
        $this->apiClient = $apiClient;
        return $this;
    }

    /**
     * Operation eventCreate
     *
     * Create a new event
     *
     * @param \Metatavu\LinkedEvents\Model\Event $eventObject  (optional)
     * @throws \Metatavu\LinkedEvents\ApiException on non-2xx response
     * @return \Metatavu\LinkedEvents\Model\Event
     */
    public function eventCreate($eventObject = null)
    {
        list($response) = $this->eventCreateWithHttpInfo($eventObject);
        return $response;
    }

    /**
     * Operation eventCreateWithHttpInfo
     *
     * Create a new event
     *
     * @param \Metatavu\LinkedEvents\Model\Event $eventObject  (optional)
     * @throws \Metatavu\LinkedEvents\ApiException on non-2xx response
     * @return array of \Metatavu\LinkedEvents\Model\Event, HTTP status code, HTTP response headers (array of strings)
     */
    public function eventCreateWithHttpInfo($eventObject = null)
    {
        // parse inputs
        $resourcePath = "/event/";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept(['application/json']);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType([]);

        // body params
        $_tempBody = null;
        if (isset($eventObject)) {
            $_tempBody = $eventObject;
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'POST',
                $queryParams,
                $httpBody,
                $headerParams,
                '\Metatavu\LinkedEvents\Model\Event',
                '/event/'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\Metatavu\LinkedEvents\Model\Event', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 201:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Metatavu\LinkedEvents\Model\Event', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation eventDelete
     *
     * Delete an event
     *
     * @param string $id Identifier for the event to be deleted (required)
     * @throws \Metatavu\LinkedEvents\ApiException on non-2xx response
     * @return void
     */
    public function eventDelete($id)
    {
        list($response) = $this->eventDeleteWithHttpInfo($id);
        return $response;
    }

    /**
     * Operation eventDeleteWithHttpInfo
     *
     * Delete an event
     *
     * @param string $id Identifier for the event to be deleted (required)
     * @throws \Metatavu\LinkedEvents\ApiException on non-2xx response
     * @return array of null, HTTP status code, HTTP response headers (array of strings)
     */
    public function eventDeleteWithHttpInfo($id)
    {
        // verify the required parameter 'id' is set
        if ($id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $id when calling eventDelete');
        }
        // parse inputs
        $resourcePath = "/event/{id}/";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept(['application/json']);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType([]);

        // path params
        if ($id !== null) {
            $resourcePath = str_replace(
                "{" . "id" . "}",
                $this->apiClient->getSerializer()->toPathValue($id),
                $resourcePath
            );
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'DELETE',
                $queryParams,
                $httpBody,
                $headerParams,
                null,
                '/event/{id}/'
            );

            return [null, $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
            }

            throw $e;
        }
    }

    /**
     * Operation eventList
     *
     * Return a list of events
     *
     * @param string[] $include Embed given reference-type fields directly into the response, otherwise they are returned as URI references. (optional)
     * @param string $text Search (case insensitive) through all multilingual text fields (name, description, short_description, info_url) of an event (every language). Multilingual fields contain the text that users are expected to care about, thus multilinguality is useful discriminator. (optional)
     * @param string $lastModifiedSince Search for events that have been modified since or at this time. (optional)
     * @param \DateTime $start Search for events beginning or ending after this time. Dates can be specified using ISO 8601 (\&quot;2016-01-12\&quot;) and additionally \&quot;today\&quot;. (optional)
     * @param \DateTime $end Search for events beginning or ending before this time. Dates can be specified using ISO 8601 (\&quot;2016-01-12\&quot;) and additionally \&quot;today\&quot;. (optional)
     * @param string[] $bbox Search for events that are within this bounding box. Decimal coordinates are given in order west, south, east, north. Period is used as decimal separator. (optional)
     * @param string $dataSource Search for events that come from the specified source system (optional)
     * @param int[] $location Search for events in given locations as specified by id. Multiple ids are separated by comma (optional)
     * @param bool $showAll Show all events (optional) (optional)
     * @param string $division You may filter places by specific OCD division id, or by division name. The latter query checks all divisions with the name, regardless of division type. (optional)
     * @param string $keyword Search for events with given keywords as specified by id. Multiple ids are separated by comma (optional)
     * @param string $recurring Search for events based on whether they are part of recurring event set. &#39;super&#39; specifies recurring, while &#39;sub&#39; is non-recurring. (optional)
     * @param int $minDuration Search for events that are longer than given time in seconds (optional)
     * @param int $maxDuration Search for events that are shorter than given time in seconds (optional)
     * @param string $publisher Search for events published by the given organization (optional)
     * @param string $sort Sort the returned events in the given order. Possible sorting criteria are &#39;start_time&#39;, &#39;end_time&#39;, &#39;days_left&#39; and &#39;last_modified_time&#39;. The default ordering is &#39;-last_modified_time&#39;. (optional)
     * @param int $page request particular page in paginated results (optional)
     * @param int $pageSize request that server delivers page_size results in response (optional)
     * @param string $addressLocalityFi Search for events in given address localities (fi). Multiple localities can be entered by separating them by a comma (optional)
     * @param string $addressLocalitySv Search for events in given address localities (sv). Multiple localities can be entered by separating them by a comma (optional)
     * @param string $addressLocalityEn Search for events in given address localities (en). Multiple localities can be entered by separating them by a comma (optional)
     * @param string $language Search for events in given language
     * @param string $publicationStatus Filter events by publication status (either draft or public) (optional)
     * @throws \Metatavu\LinkedEvents\ApiException on non-2xx response
     * @return \Metatavu\LinkedEvents\Model\InlineResponse200
     */
    public function eventList($include = null, $text = null, $lastModifiedSince = null, $start = null, $end = null, $bbox = null, $dataSource = null, $location = null, $showAll = null, $division = null, $keyword = null, $recurring = null, $minDuration = null, $maxDuration = null, $publisher = null, $sort = null, $page = null, $pageSize = null, $addressLocalityFi = null, $addressLocalitySv = null, $addressLocalityEn = null, $language = null, $publicationStatus = null)
    {
        list($response) = $this->eventListWithHttpInfo($include, $text, $lastModifiedSince, $start, $end, $bbox, $dataSource, $location, $showAll, $division, $keyword, $recurring, $minDuration, $maxDuration, $publisher, $sort, $page, $pageSize, $addressLocalityFi, $addressLocalitySv, $addressLocalityEn, $language, $publicationStatus);
        return $response;
    }

    /**
     * Operation eventListWithHttpInfo
     *
     * Return a list of events
     *
     * @param string[] $include Embed given reference-type fields directly into the response, otherwise they are returned as URI references. (optional)
     * @param string $text Search (case insensitive) through all multilingual text fields (name, description, short_description, info_url) of an event (every language). Multilingual fields contain the text that users are expected to care about, thus multilinguality is useful discriminator. (optional)
     * @param string $lastModifiedSince Search for events that have been modified since or at this time. (optional)
     * @param \DateTime $start Search for events beginning or ending after this time. Dates can be specified using ISO 8601 (\&quot;2016-01-12\&quot;) and additionally \&quot;today\&quot;. (optional)
     * @param \DateTime $end Search for events beginning or ending before this time. Dates can be specified using ISO 8601 (\&quot;2016-01-12\&quot;) and additionally \&quot;today\&quot;. (optional)
     * @param string[] $bbox Search for events that are within this bounding box. Decimal coordinates are given in order west, south, east, north. Period is used as decimal separator. (optional)
     * @param string $dataSource Search for events that come from the specified source system (optional)
     * @param int[] $location Search for events in given locations as specified by id. Multiple ids are separated by comma (optional)
     * @param bool $showAll Show all events (optional) (optional)
     * @param string $division You may filter places by specific OCD division id, or by division name. The latter query checks all divisions with the name, regardless of division type. (optional)
     * @param string $keyword Search for events with given keywords as specified by id. Multiple ids are separated by comma (optional)
     * @param string $recurring Search for events based on whether they are part of recurring event set. &#39;super&#39; specifies recurring, while &#39;sub&#39; is non-recurring. (optional)
     * @param int $minDuration Search for events that are longer than given time in seconds (optional)
     * @param int $maxDuration Search for events that are shorter than given time in seconds (optional)
     * @param string $publisher Search for events published by the given organization (optional)
     * @param string $sort Sort the returned events in the given order. Possible sorting criteria are &#39;start_time&#39;, &#39;end_time&#39;, &#39;days_left&#39; and &#39;last_modified_time&#39;. The default ordering is &#39;-last_modified_time&#39;. (optional)
     * @param int $page request particular page in paginated results (optional)
     * @param int $pageSize request that server delivers page_size results in response (optional)
     * @param string $addressLocalityFi Search for events in given address localities (fi). Multiple localities can be entered by separating them by a comma (optional)
     * @param string $addressLocalitySv Search for events in given address localities (sv). Multiple localities can be entered by separating them by a comma (optional)
     * @param string $addressLocalityEn Search for events in given address localities (en). Multiple localities can be entered by separating them by a comma (optional)
     * @param string $language Search for events in given language
     * @param string $publicationStatus Filter events by publication status (either draft or public) (optional)
     * @throws \Metatavu\LinkedEvents\ApiException on non-2xx response
     * @return array of \Metatavu\LinkedEvents\Model\InlineResponse200, HTTP status code, HTTP response headers (array of strings)
     */
    public function eventListWithHttpInfo($include = null, $text = null, $lastModifiedSince = null, $start = null, $end = null, $bbox = null, $dataSource = null, $location = null, $showAll = null, $division = null, $keyword = null, $recurring = null, $minDuration = null, $maxDuration = null, $publisher = null, $sort = null, $page = null, $pageSize = null, $addressLocalityFi = null, $addressLocalitySv = null, $addressLocalityEn = null, $language = null, $publicationStatus = null)
    {
        if (!is_null($bbox) && (count($bbox) > 4)) {
            throw new \InvalidArgumentException('invalid value for "$bbox" when calling EventApi.eventList, number of items must be less than or equal to 4.');
        }
        if (!is_null($bbox) && (count($bbox) < 4)) {
            throw new \InvalidArgumentException('invalid value for "$bbox" when calling EventApi.eventList, number of items must be greater than or equal to 4.');
        }

        // parse inputs
        $resourcePath = "/event/";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept(['application/json']);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType([]);

        // query params
        if (is_array($include)) {
            $include = $this->apiClient->getSerializer()->serializeCollection($include, 'csv', true);
        }
        if ($include !== null) {
            $queryParams['include'] = $this->apiClient->getSerializer()->toQueryValue($include);
        }
        // query params
        if ($text !== null) {
            $queryParams['text'] = $this->apiClient->getSerializer()->toQueryValue($text);
        }
        // query params
        if ($lastModifiedSince !== null) {
            $queryParams['last_modified_since'] = $this->apiClient->getSerializer()->toQueryValue($lastModifiedSince);
        }
        // query params
        if ($start !== null) {
            $queryParams['start'] = $this->apiClient->getSerializer()->toQueryValue($start);
        }
        // query params
        if ($end !== null) {
            $queryParams['end'] = $this->apiClient->getSerializer()->toQueryValue($end);
        }
        // query params
        if (is_array($bbox)) {
            $bbox = $this->apiClient->getSerializer()->serializeCollection($bbox, 'csv', true);
        }
        if ($bbox !== null) {
            $queryParams['bbox'] = $this->apiClient->getSerializer()->toQueryValue($bbox);
        }
        // query params
        if ($dataSource !== null) {
            $queryParams['data_source'] = $this->apiClient->getSerializer()->toQueryValue($dataSource);
        }
        // query params
        if (is_array($location)) {
            $location = $this->apiClient->getSerializer()->serializeCollection($location, 'csv', true);
        }
        if ($location !== null) {
            $queryParams['location'] = $this->apiClient->getSerializer()->toQueryValue($location);
        }
        // query params
        if ($showAll !== null) {
            $queryParams['show_all'] = $this->apiClient->getSerializer()->toQueryValue($showAll);
        }
        // query params
        if ($division !== null) {
            $queryParams['division'] = $this->apiClient->getSerializer()->toQueryValue($division);
        }
        // query params
        if ($keyword !== null) {
            $queryParams['keyword'] = $this->apiClient->getSerializer()->toQueryValue($keyword);
        }
        // query params
        if ($recurring !== null) {
            $queryParams['recurring'] = $this->apiClient->getSerializer()->toQueryValue($recurring);
        }
        // query params
        if ($minDuration !== null) {
            $queryParams['min_duration'] = $this->apiClient->getSerializer()->toQueryValue($minDuration);
        }
        // query params
        if ($maxDuration !== null) {
            $queryParams['max_duration'] = $this->apiClient->getSerializer()->toQueryValue($maxDuration);
        }
        // query params
        if ($publisher !== null) {
            $queryParams['publisher'] = $this->apiClient->getSerializer()->toQueryValue($publisher);
        }
        // query params
        if ($sort !== null) {
            $queryParams['sort'] = $this->apiClient->getSerializer()->toQueryValue($sort);
        }
        // query params
        if ($page !== null) {
            $queryParams['page'] = $this->apiClient->getSerializer()->toQueryValue($page);
        }
        // query params
        if ($pageSize !== null) {
            $queryParams['page_size'] = $this->apiClient->getSerializer()->toQueryValue($pageSize);
        }
        // query params
        if ($addressLocalityFi !== null) {
            $queryParams['address_locality_fi'] = $this->apiClient->getSerializer()->toQueryValue($addressLocalityFi);
        }
        // query params
        if ($addressLocalitySv !== null) {
            $queryParams['address_locality_sv'] = $this->apiClient->getSerializer()->toQueryValue($addressLocalitySv);
        }
        // query params
        if ($addressLocalityEn !== null) {
            $queryParams['address_locality_en'] = $this->apiClient->getSerializer()->toQueryValue($addressLocalityEn);
        }
        // query params
        if (empty($language)) {
            $queryParams['language'] = $this->apiClient->getSerializer()->toQueryValue($language);
        }
        // query params
        if ($publicationStatus !== null) {
            $queryParams['publication_status'] = $this->apiClient->getSerializer()->toQueryValue($publicationStatus);
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'GET',
                $queryParams,
                $httpBody,
                $headerParams,
                '\Metatavu\LinkedEvents\Model\InlineResponse200',
                '/event/'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\Metatavu\LinkedEvents\Model\InlineResponse200', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Metatavu\LinkedEvents\Model\InlineResponse200', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation eventRetrieve
     *
     * Retrieve single event by id
     *
     * @param string $id Event identifier as defined in event schema (required)
     * @param string[] $include Embed given reference-type fields directly into the response, otherwise they are returned as URI references. (optional)
     * @throws \Metatavu\LinkedEvents\ApiException on non-2xx response
     * @return \Metatavu\LinkedEvents\Model\Event
     */
    public function eventRetrieve($id, $include = null)
    {
        list($response) = $this->eventRetrieveWithHttpInfo($id, $include);
        return $response;
    }

    /**
     * Operation eventRetrieveWithHttpInfo
     *
     * Retrieve single event by id
     *
     * @param string $id Event identifier as defined in event schema (required)
     * @param string[] $include Embed given reference-type fields directly into the response, otherwise they are returned as URI references. (optional)
     * @throws \Metatavu\LinkedEvents\ApiException on non-2xx response
     * @return array of \Metatavu\LinkedEvents\Model\Event, HTTP status code, HTTP response headers (array of strings)
     */
    public function eventRetrieveWithHttpInfo($id, $include = null)
    {
        // verify the required parameter 'id' is set
        if ($id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $id when calling eventRetrieve');
        }
        // parse inputs
        $resourcePath = "/event/{id}/";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept(['application/json']);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType([]);

        // query params
        if (is_array($include)) {
            $include = $this->apiClient->getSerializer()->serializeCollection($include, 'csv', true);
        }
        if ($include !== null) {
            $queryParams['include'] = $this->apiClient->getSerializer()->toQueryValue($include);
        }
        // path params
        if ($id !== null) {
            $resourcePath = str_replace(
                "{" . "id" . "}",
                $this->apiClient->getSerializer()->toPathValue($id),
                $resourcePath
            );
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'GET',
                $queryParams,
                $httpBody,
                $headerParams,
                '\Metatavu\LinkedEvents\Model\Event',
                '/event/{id}/'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\Metatavu\LinkedEvents\Model\Event', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Metatavu\LinkedEvents\Model\Event', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation eventUpdate
     *
     * Update an event
     *
     * @param string $id Identifier for the event to be updated (required)
     * @param \Metatavu\LinkedEvents\Model\Event $eventObject Event object that should replace the existing event, note that some implementations may retain unspecified fields at their original values. (optional)
     * @throws \Metatavu\LinkedEvents\ApiException on non-2xx response
     * @return \Metatavu\LinkedEvents\Model\Event
     */
    public function eventUpdate($id, $eventObject = null)
    {
        list($response) = $this->eventUpdateWithHttpInfo($id, $eventObject);
        return $response;
    }

    /**
     * Operation eventUpdateWithHttpInfo
     *
     * Update an event
     *
     * @param string $id Identifier for the event to be updated (required)
     * @param \Metatavu\LinkedEvents\Model\Event $eventObject Event object that should replace the existing event, note that some implementations may retain unspecified fields at their original values. (optional)
     * @throws \Metatavu\LinkedEvents\ApiException on non-2xx response
     * @return array of \Metatavu\LinkedEvents\Model\Event, HTTP status code, HTTP response headers (array of strings)
     */
    public function eventUpdateWithHttpInfo($id, $eventObject = null)
    {
        // verify the required parameter 'id' is set
        if ($id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $id when calling eventUpdate');
        }
        // parse inputs
        $resourcePath = "/event/{id}/";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept(['application/json']);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType([]);

        // path params
        if ($id !== null) {
            $resourcePath = str_replace(
                "{" . "id" . "}",
                $this->apiClient->getSerializer()->toPathValue($id),
                $resourcePath
            );
        }
        // body params
        $_tempBody = null;
        if (isset($eventObject)) {
            $_tempBody = $eventObject;
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'PUT',
                $queryParams,
                $httpBody,
                $headerParams,
                '\Metatavu\LinkedEvents\Model\Event',
                '/event/{id}/'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\Metatavu\LinkedEvents\Model\Event', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Metatavu\LinkedEvents\Model\Event', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }
}
