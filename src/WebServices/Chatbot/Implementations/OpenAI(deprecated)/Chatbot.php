<?php declare(strict_types=1);

namespace WebServices\AIClient\Implementations\OpenAI;

use WebServices\AIClient\Contracts\AIClientInterface;
use WebServices\AIClient\Contracts\Request\RequestInterface;
use WebServices\AIClient\Contracts\Response\ResponseInterface;
use WebServices\AIClient\Contracts\Transporter\ContentType;
use WebServices\AIClient\Contracts\Transporter\Method;
use WebServices\AIClient\Implementations\OpenAI\Request\Request;
use WebServices\AIClient\Implementations\OpenAI\Response\Response;
use WebServices\AIClient\Implementations\OpenAI\Transporter\CurlTransporter;

final class AIClient implements AIClientInterface
{
    private CurlTransporter $session;
    private array $history = [];

    public function __construct(string $apiKey)
    {
        $this->session = new CurlTransporter();
        $this->session->setHeaders(['Content-Type: ' . ContentType::JSON->value, "Authorization: Bearer $apiKey"]);
    }

    public function chat(RequestInterface|string $request): ResponseInterface
    {
        if (\is_string($request)) {
            $tmp = $request;
            $request = new Request();
            $request
                ->setPrompts([])
                ->setOption('model', 'gpt-3.5-turbo')
                ->setOption('max_tokens', 100)
                ->setOption('temperature', 0.6)
                ->addPrompt(['role' => 'user', 'content' => $tmp]);
        }

        $this->session->setUri('https://api.openai.com/v1/chat/completions');
        $this->session->setMethod(Method::POST);

        $response = $this->sendRequest($request);

        $this->history[] = $response->getText();
        return $response;
    }

    public function getHistory(): array
    {
        return $this->history;
    }

    private function sendRequest(Request $request): Response
    {
        $payload = $this->session->serverRequest($request->getPayload());

        return Response::fromPayload($payload);
    }
}
