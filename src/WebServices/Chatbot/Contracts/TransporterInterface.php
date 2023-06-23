<?php declare(strict_types=1);

namespace WebServices\AIClient\Contracts\Transporter;

interface TransporterInterface
{
    public function setUri(string $uri): self;

    public function setMethod(Method $method): self;

    public function setHeaders(array $headers): self;

    public function testConnection(): bool;

    public function serverRequest(array $payload): array;
}
