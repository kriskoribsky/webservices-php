<?php declare(strict_types=1);

namespace WebServices\Chatbot\OpenAI\Implementations;

use WebServices\Chatbot\Contracts\ChatbotInterface;
use WebServices\Chatbot\Contracts\Request\RequestInterface;
use WebServices\Chatbot\Contracts\Response\ResponseInterface;
use WebServices\Chatbot\Contracts\Transporter\ContentType;
use WebServices\Chatbot\Contracts\Transporter\Method;
use WebServices\Chatbot\Implementations\OpenAI\Request\Request;
use WebServices\Chatbot\Implementations\OpenAI\Response\Response;
use WebServices\Chatbot\Implementations\OpenAI\Transporter\CurlTransporter;

final class Chatbot implements ChatbotInterface
{
    private CurlTransporter $session;
    private Request $defaultRequest;
    private array $history = [];

    public function __construct(string $apiKey)
    {
        $this->session = new CurlTransporter();
        $this->session->setHeaders([ContentType::JSON, "Authorization: Bearer $apiKey"]);

        $this->defaultRequest = (new Request())
            ->setPrompts([])
            ->setOption('model', 'gpt-3.5-turbo')
            ->setOption('max_tokens', 100)
            ->setOption('temperature', 0.6);
    }

    public function chat(RequestInterface|string $request): ResponseInterface
    {
        if (\is_string($request)) {
            $request = $this->defaultRequest->addPrompt(['role' => 'user', 'content' => $request]);
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
