<?php declare(strict_types=1);

namespace WebServices\Chatbot\Implementations\OpenAI\Response;

use DateTimeImmutable;
use WebServices\Chatbot\Contracts\Response\AbstractResponse;
use WebServices\Chatbot\Contracts\Response\ResponseInterface;

class Response extends AbstractResponse implements ResponseInterface
{
    private array $attributes = [];

    public static function fromPayload(array $payload): self
    {
        $new = new self();
        $new->attributes = $payload;

        return $new;
    }

    public function getText(): string
    {
        return $this->attributes['choices'][0]['message']['content'];
    }

    public function getTimeStamp(): \DateTimeImmutable
    {
        $date = new DateTimeImmutable();
        return $date->setTimestamp($this->attributes['created']);
    }

    public function getRequestTokenUsage(): int
    {
        return $this->attributes['usage']['prompt_tokens'];
    }

    public function getResponseTokenUsage(): int
    {
        return $this->attributes['usage']['completion_tokens'];
    }

    public function getOption(string $key): mixed
    {
        return $this->attributes[$key];
    }
}
