<?php
/**
 * IssuesApi
 * PHP version 7.2
 *
 * @category Class
 * @package  MergeHRISClient
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Merge HRIS API
 *
 * The unified API for building rich integrations with multiple HR Information System platforms.
 *
 * The version of the OpenAPI document: 1.0
 * Contact: hello@merge.dev
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 5.1.1
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace MergeHRISClient\Api;

use GuzzleHttp\Client;
use GuzzleHttp\ClientInterface;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Psr7\MultipartStream;
use GuzzleHttp\Psr7\Request;
use GuzzleHttp\RequestOptions;
use MergeHRISClient\ApiException;
use MergeHRISClient\Configuration;
use MergeHRISClient\HeaderSelector;
use MergeHRISClient\ObjectSerializer;

/**
 * IssuesApi Class Doc Comment
 *
 * @category Class
 * @package  MergeHRISClient
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class IssuesApi
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
     * @var int Host index
     */
    protected $hostIndex;

    /**
     * @param ClientInterface $client
     * @param Configuration   $config
     * @param HeaderSelector  $selector
     * @param int             $hostIndex (Optional) host index to select the list of hosts if defined in the OpenAPI spec
     */
    public function __construct(
        ClientInterface $client = null,
        Configuration $config = null,
        HeaderSelector $selector = null,
        $hostIndex = 0
    ) {
        $this->client = $client ?: new Client();
        $this->config = $config ?: new Configuration();
        $this->headerSelector = $selector ?: new HeaderSelector();
        $this->hostIndex = $hostIndex;
    }

    /**
     * Set the host index
     *
     * @param int $hostIndex Host index (required)
     */
    public function setHostIndex($hostIndex): void
    {
        $this->hostIndex = $hostIndex;
    }

    /**
     * Get the host index
     *
     * @return int Host index
     */
    public function getHostIndex()
    {
        return $this->hostIndex;
    }

    /**
     * @return Configuration
     */
    public function getConfig()
    {
        return $this->config;
    }

    /**
     * Operation issuesList
     *
     * @param  string $account_token account_token (optional)
     * @param  string $cursor The pagination cursor value. (optional)
     * @param  string $end_date If included, will only include issues whose most recent action occurred before this time (optional)
     * @param  string $end_user_organization_name end_user_organization_name (optional)
     * @param  \DateTime $first_incident_time_after If provided, will only return issues whose first incident time was after this datetime. (optional)
     * @param  \DateTime $first_incident_time_before If provided, will only return issues whose first incident time was before this datetime. (optional)
     * @param  string $include_muted If True, will include muted issues (optional)
     * @param  string $integration_name integration_name (optional)
     * @param  \DateTime $last_incident_time_after If provided, will only return issues whose first incident time was after this datetime. (optional)
     * @param  \DateTime $last_incident_time_before If provided, will only return issues whose first incident time was before this datetime. (optional)
     * @param  int $page_size Number of results to return per page. (optional)
     * @param  string $start_date If included, will only include issues whose most recent action occurred after this time (optional)
     * @param  string $status status (optional)
     *
     * @throws \MergeHRISClient\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \MergeHRISClient\Model\PaginatedIssueList
     */
    public function issuesList($account_token = null, $cursor = null, $end_date = null, $end_user_organization_name = null, $first_incident_time_after = null, $first_incident_time_before = null, $include_muted = null, $integration_name = null, $last_incident_time_after = null, $last_incident_time_before = null, $page_size = null, $start_date = null, $status = null)
    {
        list($response) = $this->issuesListWithHttpInfo($account_token, $cursor, $end_date, $end_user_organization_name, $first_incident_time_after, $first_incident_time_before, $include_muted, $integration_name, $last_incident_time_after, $last_incident_time_before, $page_size, $start_date, $status);
        return $response;
    }

    /**
     * Operation issuesListWithHttpInfo
     *
     * @param  string $account_token (optional)
     * @param  string $cursor The pagination cursor value. (optional)
     * @param  string $end_date If included, will only include issues whose most recent action occurred before this time (optional)
     * @param  string $end_user_organization_name (optional)
     * @param  \DateTime $first_incident_time_after If provided, will only return issues whose first incident time was after this datetime. (optional)
     * @param  \DateTime $first_incident_time_before If provided, will only return issues whose first incident time was before this datetime. (optional)
     * @param  string $include_muted If True, will include muted issues (optional)
     * @param  string $integration_name (optional)
     * @param  \DateTime $last_incident_time_after If provided, will only return issues whose first incident time was after this datetime. (optional)
     * @param  \DateTime $last_incident_time_before If provided, will only return issues whose first incident time was before this datetime. (optional)
     * @param  int $page_size Number of results to return per page. (optional)
     * @param  string $start_date If included, will only include issues whose most recent action occurred after this time (optional)
     * @param  string $status (optional)
     *
     * @throws \MergeHRISClient\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \MergeHRISClient\Model\PaginatedIssueList, HTTP status code, HTTP response headers (array of strings)
     */
    public function issuesListWithHttpInfo($account_token = null, $cursor = null, $end_date = null, $end_user_organization_name = null, $first_incident_time_after = null, $first_incident_time_before = null, $include_muted = null, $integration_name = null, $last_incident_time_after = null, $last_incident_time_before = null, $page_size = null, $start_date = null, $status = null)
    {
        $request = $this->issuesListRequest($account_token, $cursor, $end_date, $end_user_organization_name, $first_incident_time_after, $first_incident_time_before, $include_muted, $integration_name, $last_incident_time_after, $last_incident_time_before, $page_size, $start_date, $status);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? (string) $e->getResponse()->getBody() : null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        (string) $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    (string) $response->getBody()
                );
            }

            switch($statusCode) {
                case 200:
                    if ('\MergeHRISClient\Model\PaginatedIssueList' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\MergeHRISClient\Model\PaginatedIssueList', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

            $returnType = '\MergeHRISClient\Model\PaginatedIssueList';
            if ($returnType === '\SplFileObject') {
                $content = $response->getBody(); //stream goes to serializer
            } else {
                $content = (string) $response->getBody();
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
                        '\MergeHRISClient\Model\PaginatedIssueList',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation issuesListAsync
     *
     * @param  string $account_token (optional)
     * @param  string $cursor The pagination cursor value. (optional)
     * @param  string $end_date If included, will only include issues whose most recent action occurred before this time (optional)
     * @param  string $end_user_organization_name (optional)
     * @param  \DateTime $first_incident_time_after If provided, will only return issues whose first incident time was after this datetime. (optional)
     * @param  \DateTime $first_incident_time_before If provided, will only return issues whose first incident time was before this datetime. (optional)
     * @param  string $include_muted If True, will include muted issues (optional)
     * @param  string $integration_name (optional)
     * @param  \DateTime $last_incident_time_after If provided, will only return issues whose first incident time was after this datetime. (optional)
     * @param  \DateTime $last_incident_time_before If provided, will only return issues whose first incident time was before this datetime. (optional)
     * @param  int $page_size Number of results to return per page. (optional)
     * @param  string $start_date If included, will only include issues whose most recent action occurred after this time (optional)
     * @param  string $status (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function issuesListAsync($account_token = null, $cursor = null, $end_date = null, $end_user_organization_name = null, $first_incident_time_after = null, $first_incident_time_before = null, $include_muted = null, $integration_name = null, $last_incident_time_after = null, $last_incident_time_before = null, $page_size = null, $start_date = null, $status = null)
    {
        return $this->issuesListAsyncWithHttpInfo($account_token, $cursor, $end_date, $end_user_organization_name, $first_incident_time_after, $first_incident_time_before, $include_muted, $integration_name, $last_incident_time_after, $last_incident_time_before, $page_size, $start_date, $status)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation issuesListAsyncWithHttpInfo
     *
     * @param  string $account_token (optional)
     * @param  string $cursor The pagination cursor value. (optional)
     * @param  string $end_date If included, will only include issues whose most recent action occurred before this time (optional)
     * @param  string $end_user_organization_name (optional)
     * @param  \DateTime $first_incident_time_after If provided, will only return issues whose first incident time was after this datetime. (optional)
     * @param  \DateTime $first_incident_time_before If provided, will only return issues whose first incident time was before this datetime. (optional)
     * @param  string $include_muted If True, will include muted issues (optional)
     * @param  string $integration_name (optional)
     * @param  \DateTime $last_incident_time_after If provided, will only return issues whose first incident time was after this datetime. (optional)
     * @param  \DateTime $last_incident_time_before If provided, will only return issues whose first incident time was before this datetime. (optional)
     * @param  int $page_size Number of results to return per page. (optional)
     * @param  string $start_date If included, will only include issues whose most recent action occurred after this time (optional)
     * @param  string $status (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function issuesListAsyncWithHttpInfo($account_token = null, $cursor = null, $end_date = null, $end_user_organization_name = null, $first_incident_time_after = null, $first_incident_time_before = null, $include_muted = null, $integration_name = null, $last_incident_time_after = null, $last_incident_time_before = null, $page_size = null, $start_date = null, $status = null)
    {
        $returnType = '\MergeHRISClient\Model\PaginatedIssueList';
        $request = $this->issuesListRequest($account_token, $cursor, $end_date, $end_user_organization_name, $first_incident_time_after, $first_incident_time_before, $include_muted, $integration_name, $last_incident_time_after, $last_incident_time_before, $page_size, $start_date, $status);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    if ($returnType === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
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
                        (string) $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'issuesList'
     *
     * @param  string $account_token (optional)
     * @param  string $cursor The pagination cursor value. (optional)
     * @param  string $end_date If included, will only include issues whose most recent action occurred before this time (optional)
     * @param  string $end_user_organization_name (optional)
     * @param  \DateTime $first_incident_time_after If provided, will only return issues whose first incident time was after this datetime. (optional)
     * @param  \DateTime $first_incident_time_before If provided, will only return issues whose first incident time was before this datetime. (optional)
     * @param  string $include_muted If True, will include muted issues (optional)
     * @param  string $integration_name (optional)
     * @param  \DateTime $last_incident_time_after If provided, will only return issues whose first incident time was after this datetime. (optional)
     * @param  \DateTime $last_incident_time_before If provided, will only return issues whose first incident time was before this datetime. (optional)
     * @param  int $page_size Number of results to return per page. (optional)
     * @param  string $start_date If included, will only include issues whose most recent action occurred after this time (optional)
     * @param  string $status (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function issuesListRequest($account_token = null, $cursor = null, $end_date = null, $end_user_organization_name = null, $first_incident_time_after = null, $first_incident_time_before = null, $include_muted = null, $integration_name = null, $last_incident_time_after = null, $last_incident_time_before = null, $page_size = null, $start_date = null, $status = null)
    {

        $resourcePath = '/issues';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        if ($account_token !== null) {
            if('form' === 'form' && is_array($account_token)) {
                foreach($account_token as $key => $value) {
                    $queryParams[$key] = $value;
                }
            }
            else {
                $queryParams['account_token'] = $account_token;
            }
        }
        // query params
        if ($cursor !== null) {
            if('form' === 'form' && is_array($cursor)) {
                foreach($cursor as $key => $value) {
                    $queryParams[$key] = $value;
                }
            }
            else {
                $queryParams['cursor'] = $cursor;
            }
        }
        // query params
        if ($end_date !== null) {
            if('form' === 'form' && is_array($end_date)) {
                foreach($end_date as $key => $value) {
                    $queryParams[$key] = $value;
                }
            }
            else {
                $queryParams['end_date'] = $end_date;
            }
        }
        // query params
        if ($end_user_organization_name !== null) {
            if('form' === 'form' && is_array($end_user_organization_name)) {
                foreach($end_user_organization_name as $key => $value) {
                    $queryParams[$key] = $value;
                }
            }
            else {
                $queryParams['end_user_organization_name'] = $end_user_organization_name;
            }
        }
        // query params
        if ($first_incident_time_after !== null) {
            if('form' === 'form' && is_array($first_incident_time_after)) {
                foreach($first_incident_time_after as $key => $value) {
                    $queryParams[$key] = $value;
                }
            }
            else {
                $queryParams['first_incident_time_after'] = $first_incident_time_after;
            }
        }
        // query params
        if ($first_incident_time_before !== null) {
            if('form' === 'form' && is_array($first_incident_time_before)) {
                foreach($first_incident_time_before as $key => $value) {
                    $queryParams[$key] = $value;
                }
            }
            else {
                $queryParams['first_incident_time_before'] = $first_incident_time_before;
            }
        }
        // query params
        if ($include_muted !== null) {
            if('form' === 'form' && is_array($include_muted)) {
                foreach($include_muted as $key => $value) {
                    $queryParams[$key] = $value;
                }
            }
            else {
                $queryParams['include_muted'] = $include_muted;
            }
        }
        // query params
        if ($integration_name !== null) {
            if('form' === 'form' && is_array($integration_name)) {
                foreach($integration_name as $key => $value) {
                    $queryParams[$key] = $value;
                }
            }
            else {
                $queryParams['integration_name'] = $integration_name;
            }
        }
        // query params
        if ($last_incident_time_after !== null) {
            if('form' === 'form' && is_array($last_incident_time_after)) {
                foreach($last_incident_time_after as $key => $value) {
                    $queryParams[$key] = $value;
                }
            }
            else {
                $queryParams['last_incident_time_after'] = $last_incident_time_after;
            }
        }
        // query params
        if ($last_incident_time_before !== null) {
            if('form' === 'form' && is_array($last_incident_time_before)) {
                foreach($last_incident_time_before as $key => $value) {
                    $queryParams[$key] = $value;
                }
            }
            else {
                $queryParams['last_incident_time_before'] = $last_incident_time_before;
            }
        }
        // query params
        if ($page_size !== null) {
            if('form' === 'form' && is_array($page_size)) {
                foreach($page_size as $key => $value) {
                    $queryParams[$key] = $value;
                }
            }
            else {
                $queryParams['page_size'] = $page_size;
            }
        }
        // query params
        if ($start_date !== null) {
            if('form' === 'form' && is_array($start_date)) {
                foreach($start_date as $key => $value) {
                    $queryParams[$key] = $value;
                }
            }
            else {
                $queryParams['start_date'] = $start_date;
            }
        }
        // query params
        if ($status !== null) {
            if('form' === 'form' && is_array($status)) {
                foreach($status as $key => $value) {
                    $queryParams[$key] = $value;
                }
            }
            else {
                $queryParams['status'] = $status;
            }
        }




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
        if (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $formParamValueItems = is_array($formParamValue) ? $formParamValue : [$formParamValue];
                    foreach ($formParamValueItems as $formParamValueItem) {
                        $multipartContents[] = [
                            'name' => $formParamName,
                            'contents' => $formParamValueItem
                        ];
                    }
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
     * Operation issuesRetrieve
     *
     * @param  string $id id (required)
     *
     * @throws \MergeHRISClient\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \MergeHRISClient\Model\Issue
     */
    public function issuesRetrieve($id)
    {
        list($response) = $this->issuesRetrieveWithHttpInfo($id);
        return $response;
    }

    /**
     * Operation issuesRetrieveWithHttpInfo
     *
     * @param  string $id (required)
     *
     * @throws \MergeHRISClient\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \MergeHRISClient\Model\Issue, HTTP status code, HTTP response headers (array of strings)
     */
    public function issuesRetrieveWithHttpInfo($id)
    {
        $request = $this->issuesRetrieveRequest($id);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? (string) $e->getResponse()->getBody() : null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        (string) $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    (string) $response->getBody()
                );
            }

            switch($statusCode) {
                case 200:
                    if ('\MergeHRISClient\Model\Issue' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\MergeHRISClient\Model\Issue', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

            $returnType = '\MergeHRISClient\Model\Issue';
            if ($returnType === '\SplFileObject') {
                $content = $response->getBody(); //stream goes to serializer
            } else {
                $content = (string) $response->getBody();
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
                        '\MergeHRISClient\Model\Issue',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation issuesRetrieveAsync
     *
     * @param  string $id (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function issuesRetrieveAsync($id)
    {
        return $this->issuesRetrieveAsyncWithHttpInfo($id)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation issuesRetrieveAsyncWithHttpInfo
     *
     * @param  string $id (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function issuesRetrieveAsyncWithHttpInfo($id)
    {
        $returnType = '\MergeHRISClient\Model\Issue';
        $request = $this->issuesRetrieveRequest($id);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    if ($returnType === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
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
                        (string) $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'issuesRetrieve'
     *
     * @param  string $id (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function issuesRetrieveRequest($id)
    {
        // verify the required parameter 'id' is set
        if ($id === null || (is_array($id) && count($id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $id when calling issuesRetrieve'
            );
        }

        $resourcePath = '/issues/{id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;



        // path params
        if ($id !== null) {
            $resourcePath = str_replace(
                '{' . 'id' . '}',
                ObjectSerializer::toPathValue($id),
                $resourcePath
            );
        }


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
        if (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $formParamValueItems = is_array($formParamValue) ? $formParamValue : [$formParamValue];
                    foreach ($formParamValueItems as $formParamValueItem) {
                        $multipartContents[] = [
                            'name' => $formParamName,
                            'contents' => $formParamValueItem
                        ];
                    }
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
