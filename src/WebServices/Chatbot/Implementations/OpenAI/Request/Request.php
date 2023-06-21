<?php declare(strict_types=1);

namespace WebServices\Chatbot\Implementations\OpenAI\Request;

use WebServices\Chatbot\Contracts\Request\RequestInterface;

// FEAT implement option/prompt key validation
class Request implements RequestInterface
{
    private array $options = [];

    public function setPrompts(array $prompts): self
    {
        foreach ($prompts as $prompt) {
            $this->addPrompt($prompt);
        }

        return $this;
    }

    public function addPrompt(array $prompt): self
    {
        $this->options['messages'][] = $prompt;

        return $this;
    }

    public function setOption(string $key, mixed $value): self
    {
        $this->options[$key] = $value;

        return $this;
    }

    public function getPayload(): array
    {
        return $this->options;
    }
}
