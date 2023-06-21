<?php declare(strict_types=1);

namespace WebServices\Chatbot\Contracts\Response;

abstract class AbstractResponse implements ResponseInterface
{
    public function getTotalTokenUsage(): int
    {
        return $this->getRequestTokenUsage() + $this->getResponseTokenUsage();
    }
}
