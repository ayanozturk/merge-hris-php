<?php
/**
 * EmploymentsApi
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
 * EmploymentsApi Class Doc Comment
 *
 * @category Class
 * @package  MergeHRISClient
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class EmploymentsApi
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
     * Operation employmentsList
     *
     * @param  string $x_account_token Token identifying the end user. (required)
     * @param  \DateTime $created_after If provided, will only return objects created after this datetime. (optional)
     * @param  \DateTime $created_before If provided, will only return objects created before this datetime. (optional)
     * @param  string $cursor The pagination cursor value. (optional)
     * @param  string $employee_id If provided, will only return employments for this employee. (optional)
     * @param  bool $include_deleted_data Whether to include data that was marked as deleted by third party webhooks. (optional)
     * @param  bool $include_remote_data Whether to include the original data Merge fetched from the third-party to produce these models. (optional)
     * @param  \DateTime $modified_after If provided, will only return objects modified after this datetime. (optional)
     * @param  \DateTime $modified_before If provided, will only return objects modified before this datetime. (optional)
     * @param  string $order_by Overrides the default ordering for this endpoint. (optional)
     * @param  int $page_size Number of results to return per page. (optional)
     * @param  string $remote_fields Deprecated. Use show_enum_origins. (optional)
     * @param  string $remote_id The API provider&#39;s ID for the given object. (optional)
     * @param  string $show_enum_origins Which fields should be returned in non-normalized form. (optional)
     *
     * @throws \MergeHRISClient\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \MergeHRISClient\Model\PaginatedEmploymentList
     */
    public function employmentsList($x_account_token, $created_after = null, $created_before = null, $cursor = null, $employee_id = null, $include_deleted_data = null, $include_remote_data = null, $modified_after = null, $modified_before = null, $order_by = null, $page_size = null, $remote_fields = null, $remote_id = null, $show_enum_origins = null)
    {
        list($response) = $this->employmentsListWithHttpInfo($x_account_token, $created_after, $created_before, $cursor, $employee_id, $include_deleted_data, $include_remote_data, $modified_after, $modified_before, $order_by, $page_size, $remote_fields, $remote_id, $show_enum_origins);
        return $response;
    }

    /**
     * Operation employmentsListWithHttpInfo
     *
     * @param  string $x_account_token Token identifying the end user. (required)
     * @param  \DateTime $created_after If provided, will only return objects created after this datetime. (optional)
     * @param  \DateTime $created_before If provided, will only return objects created before this datetime. (optional)
     * @param  string $cursor The pagination cursor value. (optional)
     * @param  string $employee_id If provided, will only return employments for this employee. (optional)
     * @param  bool $include_deleted_data Whether to include data that was marked as deleted by third party webhooks. (optional)
     * @param  bool $include_remote_data Whether to include the original data Merge fetched from the third-party to produce these models. (optional)
     * @param  \DateTime $modified_after If provided, will only return objects modified after this datetime. (optional)
     * @param  \DateTime $modified_before If provided, will only return objects modified before this datetime. (optional)
     * @param  string $order_by Overrides the default ordering for this endpoint. (optional)
     * @param  int $page_size Number of results to return per page. (optional)
     * @param  string $remote_fields Deprecated. Use show_enum_origins. (optional)
     * @param  string $remote_id The API provider&#39;s ID for the given object. (optional)
     * @param  string $show_enum_origins Which fields should be returned in non-normalized form. (optional)
     *
     * @throws \MergeHRISClient\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \MergeHRISClient\Model\PaginatedEmploymentList, HTTP status code, HTTP response headers (array of strings)
     */
    public function employmentsListWithHttpInfo($x_account_token, $created_after = null, $created_before = null, $cursor = null, $employee_id = null, $include_deleted_data = null, $include_remote_data = null, $modified_after = null, $modified_before = null, $order_by = null, $page_size = null, $remote_fields = null, $remote_id = null, $show_enum_origins = null)
    {
        $request = $this->employmentsListRequest($x_account_token, $created_after, $created_before, $cursor, $employee_id, $include_deleted_data, $include_remote_data, $modified_after, $modified_before, $order_by, $page_size, $remote_fields, $remote_id, $show_enum_origins);

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
                    if ('\MergeHRISClient\Model\PaginatedEmploymentList' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\MergeHRISClient\Model\PaginatedEmploymentList', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

            $returnType = '\MergeHRISClient\Model\PaginatedEmploymentList';
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
                        '\MergeHRISClient\Model\PaginatedEmploymentList',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation employmentsListAsync
     *
     * @param  string $x_account_token Token identifying the end user. (required)
     * @param  \DateTime $created_after If provided, will only return objects created after this datetime. (optional)
     * @param  \DateTime $created_before If provided, will only return objects created before this datetime. (optional)
     * @param  string $cursor The pagination cursor value. (optional)
     * @param  string $employee_id If provided, will only return employments for this employee. (optional)
     * @param  bool $include_deleted_data Whether to include data that was marked as deleted by third party webhooks. (optional)
     * @param  bool $include_remote_data Whether to include the original data Merge fetched from the third-party to produce these models. (optional)
     * @param  \DateTime $modified_after If provided, will only return objects modified after this datetime. (optional)
     * @param  \DateTime $modified_before If provided, will only return objects modified before this datetime. (optional)
     * @param  string $order_by Overrides the default ordering for this endpoint. (optional)
     * @param  int $page_size Number of results to return per page. (optional)
     * @param  string $remote_fields Deprecated. Use show_enum_origins. (optional)
     * @param  string $remote_id The API provider&#39;s ID for the given object. (optional)
     * @param  string $show_enum_origins Which fields should be returned in non-normalized form. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function employmentsListAsync($x_account_token, $created_after = null, $created_before = null, $cursor = null, $employee_id = null, $include_deleted_data = null, $include_remote_data = null, $modified_after = null, $modified_before = null, $order_by = null, $page_size = null, $remote_fields = null, $remote_id = null, $show_enum_origins = null)
    {
        return $this->employmentsListAsyncWithHttpInfo($x_account_token, $created_after, $created_before, $cursor, $employee_id, $include_deleted_data, $include_remote_data, $modified_after, $modified_before, $order_by, $page_size, $remote_fields, $remote_id, $show_enum_origins)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation employmentsListAsyncWithHttpInfo
     *
     * @param  string $x_account_token Token identifying the end user. (required)
     * @param  \DateTime $created_after If provided, will only return objects created after this datetime. (optional)
     * @param  \DateTime $created_before If provided, will only return objects created before this datetime. (optional)
     * @param  string $cursor The pagination cursor value. (optional)
     * @param  string $employee_id If provided, will only return employments for this employee. (optional)
     * @param  bool $include_deleted_data Whether to include data that was marked as deleted by third party webhooks. (optional)
     * @param  bool $include_remote_data Whether to include the original data Merge fetched from the third-party to produce these models. (optional)
     * @param  \DateTime $modified_after If provided, will only return objects modified after this datetime. (optional)
     * @param  \DateTime $modified_before If provided, will only return objects modified before this datetime. (optional)
     * @param  string $order_by Overrides the default ordering for this endpoint. (optional)
     * @param  int $page_size Number of results to return per page. (optional)
     * @param  string $remote_fields Deprecated. Use show_enum_origins. (optional)
     * @param  string $remote_id The API provider&#39;s ID for the given object. (optional)
     * @param  string $show_enum_origins Which fields should be returned in non-normalized form. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function employmentsListAsyncWithHttpInfo($x_account_token, $created_after = null, $created_before = null, $cursor = null, $employee_id = null, $include_deleted_data = null, $include_remote_data = null, $modified_after = null, $modified_before = null, $order_by = null, $page_size = null, $remote_fields = null, $remote_id = null, $show_enum_origins = null)
    {
        $returnType = '\MergeHRISClient\Model\PaginatedEmploymentList';
        $request = $this->employmentsListRequest($x_account_token, $created_after, $created_before, $cursor, $employee_id, $include_deleted_data, $include_remote_data, $modified_after, $modified_before, $order_by, $page_size, $remote_fields, $remote_id, $show_enum_origins);

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
     * Create request for operation 'employmentsList'
     *
     * @param  string $x_account_token Token identifying the end user. (required)
     * @param  \DateTime $created_after If provided, will only return objects created after this datetime. (optional)
     * @param  \DateTime $created_before If provided, will only return objects created before this datetime. (optional)
     * @param  string $cursor The pagination cursor value. (optional)
     * @param  string $employee_id If provided, will only return employments for this employee. (optional)
     * @param  bool $include_deleted_data Whether to include data that was marked as deleted by third party webhooks. (optional)
     * @param  bool $include_remote_data Whether to include the original data Merge fetched from the third-party to produce these models. (optional)
     * @param  \DateTime $modified_after If provided, will only return objects modified after this datetime. (optional)
     * @param  \DateTime $modified_before If provided, will only return objects modified before this datetime. (optional)
     * @param  string $order_by Overrides the default ordering for this endpoint. (optional)
     * @param  int $page_size Number of results to return per page. (optional)
     * @param  string $remote_fields Deprecated. Use show_enum_origins. (optional)
     * @param  string $remote_id The API provider&#39;s ID for the given object. (optional)
     * @param  string $show_enum_origins Which fields should be returned in non-normalized form. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function employmentsListRequest($x_account_token, $created_after = null, $created_before = null, $cursor = null, $employee_id = null, $include_deleted_data = null, $include_remote_data = null, $modified_after = null, $modified_before = null, $order_by = null, $page_size = null, $remote_fields = null, $remote_id = null, $show_enum_origins = null)
    {
        // verify the required parameter 'x_account_token' is set
        if ($x_account_token === null || (is_array($x_account_token) && count($x_account_token) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $x_account_token when calling employmentsList'
            );
        }

        $resourcePath = '/employments';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        if ($created_after !== null) {
            if('form' === 'form' && is_array($created_after)) {
                foreach($created_after as $key => $value) {
                    $queryParams[$key] = $value;
                }
            }
            else {
                $queryParams['created_after'] = $created_after;
            }
        }
        // query params
        if ($created_before !== null) {
            if('form' === 'form' && is_array($created_before)) {
                foreach($created_before as $key => $value) {
                    $queryParams[$key] = $value;
                }
            }
            else {
                $queryParams['created_before'] = $created_before;
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
        if ($employee_id !== null) {
            if('form' === 'form' && is_array($employee_id)) {
                foreach($employee_id as $key => $value) {
                    $queryParams[$key] = $value;
                }
            }
            else {
                $queryParams['employee_id'] = $employee_id;
            }
        }
        // query params
        if ($include_deleted_data !== null) {
            if('form' === 'form' && is_array($include_deleted_data)) {
                foreach($include_deleted_data as $key => $value) {
                    $queryParams[$key] = $value;
                }
            }
            else {
                $queryParams['include_deleted_data'] = $include_deleted_data;
            }
        }
        // query params
        if ($include_remote_data !== null) {
            if('form' === 'form' && is_array($include_remote_data)) {
                foreach($include_remote_data as $key => $value) {
                    $queryParams[$key] = $value;
                }
            }
            else {
                $queryParams['include_remote_data'] = $include_remote_data;
            }
        }
        // query params
        if ($modified_after !== null) {
            if('form' === 'form' && is_array($modified_after)) {
                foreach($modified_after as $key => $value) {
                    $queryParams[$key] = $value;
                }
            }
            else {
                $queryParams['modified_after'] = $modified_after;
            }
        }
        // query params
        if ($modified_before !== null) {
            if('form' === 'form' && is_array($modified_before)) {
                foreach($modified_before as $key => $value) {
                    $queryParams[$key] = $value;
                }
            }
            else {
                $queryParams['modified_before'] = $modified_before;
            }
        }
        // query params
        if ($order_by !== null) {
            if('form' === 'form' && is_array($order_by)) {
                foreach($order_by as $key => $value) {
                    $queryParams[$key] = $value;
                }
            }
            else {
                $queryParams['order_by'] = $order_by;
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
        if ($remote_fields !== null) {
            if('form' === 'form' && is_array($remote_fields)) {
                foreach($remote_fields as $key => $value) {
                    $queryParams[$key] = $value;
                }
            }
            else {
                $queryParams['remote_fields'] = $remote_fields;
            }
        }
        // query params
        if ($remote_id !== null) {
            if('form' === 'form' && is_array($remote_id)) {
                foreach($remote_id as $key => $value) {
                    $queryParams[$key] = $value;
                }
            }
            else {
                $queryParams['remote_id'] = $remote_id;
            }
        }
        // query params
        if ($show_enum_origins !== null) {
            if('form' === 'form' && is_array($show_enum_origins)) {
                foreach($show_enum_origins as $key => $value) {
                    $queryParams[$key] = $value;
                }
            }
            else {
                $queryParams['show_enum_origins'] = $show_enum_origins;
            }
        }

        // header params
        if ($x_account_token !== null) {
            $headerParams['X-Account-Token'] = ObjectSerializer::toHeaderValue($x_account_token);
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
     * Operation employmentsRetrieve
     *
     * @param  string $x_account_token Token identifying the end user. (required)
     * @param  string $id id (required)
     * @param  bool $include_remote_data Whether to include the original data Merge fetched from the third-party to produce these models. (optional)
     * @param  string $remote_fields Deprecated. Use show_enum_origins. (optional)
     * @param  string $show_enum_origins Which fields should be returned in non-normalized form. (optional)
     *
     * @throws \MergeHRISClient\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \MergeHRISClient\Model\Employment
     */
    public function employmentsRetrieve($x_account_token, $id, $include_remote_data = null, $remote_fields = null, $show_enum_origins = null)
    {
        list($response) = $this->employmentsRetrieveWithHttpInfo($x_account_token, $id, $include_remote_data, $remote_fields, $show_enum_origins);
        return $response;
    }

    /**
     * Operation employmentsRetrieveWithHttpInfo
     *
     * @param  string $x_account_token Token identifying the end user. (required)
     * @param  string $id (required)
     * @param  bool $include_remote_data Whether to include the original data Merge fetched from the third-party to produce these models. (optional)
     * @param  string $remote_fields Deprecated. Use show_enum_origins. (optional)
     * @param  string $show_enum_origins Which fields should be returned in non-normalized form. (optional)
     *
     * @throws \MergeHRISClient\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \MergeHRISClient\Model\Employment, HTTP status code, HTTP response headers (array of strings)
     */
    public function employmentsRetrieveWithHttpInfo($x_account_token, $id, $include_remote_data = null, $remote_fields = null, $show_enum_origins = null)
    {
        $request = $this->employmentsRetrieveRequest($x_account_token, $id, $include_remote_data, $remote_fields, $show_enum_origins);

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
                    if ('\MergeHRISClient\Model\Employment' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\MergeHRISClient\Model\Employment', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

            $returnType = '\MergeHRISClient\Model\Employment';
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
                        '\MergeHRISClient\Model\Employment',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation employmentsRetrieveAsync
     *
     * @param  string $x_account_token Token identifying the end user. (required)
     * @param  string $id (required)
     * @param  bool $include_remote_data Whether to include the original data Merge fetched from the third-party to produce these models. (optional)
     * @param  string $remote_fields Deprecated. Use show_enum_origins. (optional)
     * @param  string $show_enum_origins Which fields should be returned in non-normalized form. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function employmentsRetrieveAsync($x_account_token, $id, $include_remote_data = null, $remote_fields = null, $show_enum_origins = null)
    {
        return $this->employmentsRetrieveAsyncWithHttpInfo($x_account_token, $id, $include_remote_data, $remote_fields, $show_enum_origins)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation employmentsRetrieveAsyncWithHttpInfo
     *
     * @param  string $x_account_token Token identifying the end user. (required)
     * @param  string $id (required)
     * @param  bool $include_remote_data Whether to include the original data Merge fetched from the third-party to produce these models. (optional)
     * @param  string $remote_fields Deprecated. Use show_enum_origins. (optional)
     * @param  string $show_enum_origins Which fields should be returned in non-normalized form. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function employmentsRetrieveAsyncWithHttpInfo($x_account_token, $id, $include_remote_data = null, $remote_fields = null, $show_enum_origins = null)
    {
        $returnType = '\MergeHRISClient\Model\Employment';
        $request = $this->employmentsRetrieveRequest($x_account_token, $id, $include_remote_data, $remote_fields, $show_enum_origins);

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
     * Create request for operation 'employmentsRetrieve'
     *
     * @param  string $x_account_token Token identifying the end user. (required)
     * @param  string $id (required)
     * @param  bool $include_remote_data Whether to include the original data Merge fetched from the third-party to produce these models. (optional)
     * @param  string $remote_fields Deprecated. Use show_enum_origins. (optional)
     * @param  string $show_enum_origins Which fields should be returned in non-normalized form. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function employmentsRetrieveRequest($x_account_token, $id, $include_remote_data = null, $remote_fields = null, $show_enum_origins = null)
    {
        // verify the required parameter 'x_account_token' is set
        if ($x_account_token === null || (is_array($x_account_token) && count($x_account_token) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $x_account_token when calling employmentsRetrieve'
            );
        }
        // verify the required parameter 'id' is set
        if ($id === null || (is_array($id) && count($id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $id when calling employmentsRetrieve'
            );
        }

        $resourcePath = '/employments/{id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        if ($include_remote_data !== null) {
            if('form' === 'form' && is_array($include_remote_data)) {
                foreach($include_remote_data as $key => $value) {
                    $queryParams[$key] = $value;
                }
            }
            else {
                $queryParams['include_remote_data'] = $include_remote_data;
            }
        }
        // query params
        if ($remote_fields !== null) {
            if('form' === 'form' && is_array($remote_fields)) {
                foreach($remote_fields as $key => $value) {
                    $queryParams[$key] = $value;
                }
            }
            else {
                $queryParams['remote_fields'] = $remote_fields;
            }
        }
        // query params
        if ($show_enum_origins !== null) {
            if('form' === 'form' && is_array($show_enum_origins)) {
                foreach($show_enum_origins as $key => $value) {
                    $queryParams[$key] = $value;
                }
            }
            else {
                $queryParams['show_enum_origins'] = $show_enum_origins;
            }
        }

        // header params
        if ($x_account_token !== null) {
            $headerParams['X-Account-Token'] = ObjectSerializer::toHeaderValue($x_account_token);
        }

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
