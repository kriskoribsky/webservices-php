<?php declare(strict_types=1);

namespace WebServices\Chatbot\Implementations;

use Exception;

class OpenAI
{
    private const MODEL = 'gpt-3.5-turbo';

    private \CurlHandle $handle;

    public function __construct(string $apiUrl, string $apiKey)
    {
        if (($this->handle = \curl_init()) === false) {
            throw new \Exception('Connecting to the endpoint failed.');
        }

        $curlOpt = [
            \CURLOPT_PROTOCOLS => CURLPROTO_HTTPS,
            \CURLOPT_POST => true,
            \CURLOPT_RETURNTRANSFER => true,
            \CURLOPT_HEADEROPT => \CURLHEADER_UNIFIED,

            \CURLOPT_URL => $apiUrl,
            \CURLOPT_HTTPHEADER => ['Content-Type: application/json', "Authorization: Bearer $apiKey"],
        ];

        if (\curl_setopt_array($this->handle, $curlOpt) === false) {
            throw new \Exception('There was an error setting curl options.');
        }
    }

    public function completion(string $prompt): string
    {
        $data = [
            'model' => self::MODEL,
            'messages' => [['role' => 'user', 'content' => "$prompt"]],
            'temperature' => 1,
        ];

        curl_setopt($this->handle, \CURLOPT_POSTFIELDS, \json_encode($data));

        if (($response = \curl_exec($this->handle)) === false) {
            throw new \Exception('Executing curl failed.');
        }
        return \json_decode($response);
    }
}
