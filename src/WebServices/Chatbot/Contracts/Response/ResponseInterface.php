<?php declare(strict_types=1);

namespace WebServices\Chatbot\Contracts\Response;

interface ResponseInterface
{
    public static function fromPayload(array $payload): self;

    public function getText(): string;

    public function getTimeStamp(): \DateTimeImmutable;

    public function getRequestTokenUsage(): int;

    public function getResponseTokenUsage(): int;

    public function getTotalTokenUsage(): int;

    public function getOption(string $key): mixed;
}
