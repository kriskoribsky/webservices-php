<?php declare(strict_types=1);

namespace WebServices\Chatbot\Contracts\Request;

interface RequestInterface
{
    public function setPrompts(array $prompts): self;

    public function addPrompt(array $prompt): self;

    public function setOption(string $key, mixed $value): self;

    public function getPayload(): array;
}
