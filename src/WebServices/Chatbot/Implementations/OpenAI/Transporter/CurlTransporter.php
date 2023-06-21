<?php declare(strict_types=1);

namespace WebServices\Chatbot\Implementations\OpenAI\Transporter;

use JsonException;
use WebServices\Chatbot\Contracts\Transporter\Method;
use WebServices\Chatbot\Contracts\Transporter\ContentType;
use WebServices\Chatbot\Exceptions\TransporterException;
use WebServices\Chatbot\Exceptions\TransporterConnectionException;
use WebServices\Chatbot\Contracts\Transporter\TransporterInterface;

// FEAT add validation to the methods
class CurlTransporter implements TransporterInterface
{
    private const DEFAULT_CURLOPTS = [
        \CURLOPT_PROTOCOLS => \CURLPROTO_HTTPS,
        \CURLOPT_FAILONERROR => true,
        \CURLOPT_RETURNTRANSFER => true,
    ];

    private \CurlHandle $connection;
    private string $uri;
    private Method $method;
    private array $headers = [];

    public function __construct()
    {
        $this->connection = \curl_init();

        if ($this->connection === false) {
            throw new TransporterConnectionException('Initializing cURL session failed.');
        }

        if (\curl_setopt_array($this->connection, self::DEFAULT_CURLOPTS) === false) {
            throw new TransporterException('Failed to set the default curl options.');
        }
    }

    public function setUri(string $uri): self
    {
        $this->uri = $uri;

        return $this;
    }

    public function setMethod(Method $method): self
    {
        $this->method = $method;

        return $this;
    }

    public function setHeaders(array $headers): self
    {
        $this->headers = $headers;

        return $this;
    }

    // FEAT finish test conneciton
    public function testConnection(): bool
    {
        return true;
    }

    public function serverRequest(array $payload): array
    {
        $options = [
            \CURLOPT_URL => $this->uri,
            \CURLOPT_CUSTOMREQUEST => $this->method->value,
            \CURLOPT_HTTPHEADER => $this->headers,
            \CURLOPT_POSTFIELDS => $this->toJson($payload),
        ];

        \var_dump($options);

        if (\curl_setopt_array($this->connection, $options) === false) {
            throw new TransporterException('Failed to set request options.');
        }

        $result = \curl_exec($this->connection);
        if ($result === false) {
            throw new TransporterConnectionException(
                'Sending request to the server failed: ' . \curl_error($this->connection),
            );
        }

        return $this->fromJson($result);
    }

    private function toJson(array $payload): string
    {
        return \json_encode($payload, \JSON_THROW_ON_ERROR);
    }

    private function fromJson(string $json): array
    {
        return \json_decode($json, true, 512, \JSON_THROW_ON_ERROR);
    }
}
