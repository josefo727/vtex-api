<?php

namespace Vtex;

use GuzzleHttp\Client;
use GuzzleHttp\Exception\ClientException;
use GuzzleHttp\Exception\GuzzleException;
use phpDocumentor\Reflection\Types\Mixed_;
use Psr\Http\Message\ResponseInterface;
use Vtex\Exception\VtexException;

class VtexClient
{
    /**
     * @var array
     */
    private $credentials;

    /**
     * @var array
     */
    private $api;

    /**
     * @var ResponseInterface
     */
    private $response;

    private $cookies;

    /**
     * @param array $config
     */
    public function __construct(array $config = [])
    {
        $this->api = api($this->parseClass());

        if (isset($config['credentials'])) {
            $this->credentials = $config['credentials'];
        } else {
            $this->credentials = [
                'accountName' => getenv('VTEX_ACCOUNT_NAME'),
                'environment' => getenv('VTEX_ENVIRONMENT'),
                'appKey' => getenv('VTEX_APP_KEY'),
                'appToken' => getenv('VTEX_APP_TOKEN')
            ];
        }
    }

    /**
     * @return ResponseInterface
     */
    public function getResponse(): ResponseInterface
    {
        return $this->response;
    }

    /**
     * @param string $name
     * @param array $args = []
     * @return array|boolean
     * @throws VtexException
     */
    public function __call(string $name, array $args = [])
    {
        try {
            $apiPaths = $this->api['paths'];
            $securitySchemas = $this->api['components']['securitySchemes'] ?? [];
            $uri = $this->api['servers'][0]['url'];
            $headers = [];
            $pathArgs = ($args[0]['pathParams'] ?? []) + $this->credentials;
            $queryArgs = $args[0]['queryParams'] ?? [];
            $queryParams = [];
            $existOperation = false;
            $methodOperation = 'get';

            foreach ($apiPaths as $apiPath => $methods) {
                foreach ($methods as $method => $operation) {
                    if (
                        isset($operation['operationId']) &&
                        ucfirst($name) === $operation['operationId']
                    ) {
                        $uri = $uri . $apiPath;
                        $methodOperation = $method;

                        foreach ($operation['parameters'] as $parameter) {
                            switch ($parameter['in']) {
                                case 'path':
                                    if ($parameter['required']) {
                                        if (isset($pathArgs[$parameter['name']])) {
                                            $uri = str_replace(
                                                '{' . $parameter['name'] . '}',
                                                $pathArgs[$parameter['name']],
                                                $uri
                                            );
                                        } else {
                                            throw new VtexException(
                                                "missing parameter {$parameter['name']} path"
                                            );
                                        }
                                    } elseif (isset($pathArgs[$parameter['name']])) {
                                        $uri = str_replace(
                                            '{' . $parameter['name'] . '}',
                                            $pathArgs[$parameter['name']],
                                            $uri
                                        );
                                    }

                                    break;
                                case 'query':
                                    if ($parameter['required']) {
                                        if (isset($queryArgs[$parameter['name']])) {
                                            $queryParams[$parameter['name']] = $queryArgs[$parameter['name']];
                                        } else {
                                            throw new VtexException(
                                                "missing parameter {$parameter['name']} query"
                                            );
                                        }
                                    } elseif (isset($queryArgs[$parameter['name']])) {
                                        $queryParams[$parameter['name']] = $queryArgs[$parameter['name']];
                                    }

                                    break;
                                case 'header':
                                    $headers[$parameter['name']] = $parameter['schema']['default'] ??
                                        $parameter['schema']['example'];

                                    break;
                            }
                        }

                        $existOperation = true;

                        break 2;
                    }
                }
            }

            if (!$existOperation) {
                throw new VtexException(
                    "operation {$name} not found"
                );
            }

            foreach ($securitySchemas as $key => $securitySchema) {
                $headers[$securitySchema['name']] = $this->credentials[$key];
            }

            $arguments = [
                'headers' => $headers,
                'query' => $queryParams
            ];

            if (isset($args[0]['body'])) {
                $arguments['json'] = $args[0]['body'];
            }

            $client = new Client(['cookies' => true]);

            $this->response = $client->request(
                $methodOperation,
                $uri,
                $arguments
            );

            // Se define la colección de cookies retornadas en la petición
            $this->cookies = $client->getConfig('cookies');

            try {
                return json_decode($this->response->getBody()->getContents(), true);
            } catch (ClientException $clientException) {
                return json_decode($this->response->getBody(), true);
            }
        } catch (ClientException $clientException) {
            throw new VtexException(
                $clientException->getResponse()->getBody()->getContents()
            );
        } catch (GuzzleException $guzzleException) {
            throw new VtexException(
                $guzzleException->getMessage()
            );
        } catch (\Exception $exception) {
            throw new VtexException(
                $exception->getMessage()
            );
        }
    }

    public function getCookie($key)
    {
        if (isset($this->cookies)) {
            return $this->cookies->getCookieByName($key);
        }
        return null;
    }

    /**
     * @return string
     */
    private function parseClass(): string
    {
        $getClass = get_class($this);
        $service = substr($getClass, strrpos($getClass, '\\') + 1, -6);

        return strtolower($service);
    }
}
