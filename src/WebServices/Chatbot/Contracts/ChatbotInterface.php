<?php declare(strict_types=1);

namespace WebServices\Chatbot\Contracts;

use WebServices\Chatbot\Contracts\Request\RequestInterface;
use WebServices\Chatbot\Contracts\Response\ResponseInterface;

interface ChatbotInterface
{
    public function chat(RequestInterface|string $request): ResponseInterface;

    /**
     * @return array<mixed>
     */
    public function getHistory(): array;
}
