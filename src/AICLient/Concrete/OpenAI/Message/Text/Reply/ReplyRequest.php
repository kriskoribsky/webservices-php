<?php declare(strict_types=1);

/*
 * This file is part of the Webservices package.
 *
 * (c) Kristian Koribsky <kristian.koribsky@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Web\Services\AIClient\Implementations\OpenAI\Message\Text\Reply;

use Web\Services\AIClient\Abstract\Message\AbstractMessage;
use Web\Services\AIClient\Abstract\Message\MessageInterface;
use Web\Services\AIClient\Exceptions\MessageArgumentException;
use Web\Services\AIClient\Implementations\OpenAI\Message\Text\DefaultAttributes;

final readonly class ReplyRequest extends AbstractMessage implements MessageInterface
{
    public function __construct(
        public readonly string $model,
        public readonly array $messages,
        public readonly ?array $functions = null,
        public readonly null|array|string $function_call = null,
        public readonly ?float $temperature = null,
        public readonly ?float $top_p = null,
        public readonly ?int $n = null,
        public readonly bool $stream = null,
        public readonly null|array|string $stop = null,
        public readonly ?int $max_tokens = null,
        public readonly ?float $presence_penalty = null,
        public readonly ?float $frequence_penalty = null,
        public readonly ?array $logit_bias = null,
        public readonly ?string $user = null,
    ) {}

    /**
     * {@inheritDoc}
     */
    public static function fromArray(array $attributes): static
    {
        return new self(
            $attributes['model'] ?? DefaultAttributes::MODEL,
            $attributes['messages'] ?? throw new MessageArgumentException("Required key 'messages' not specified."),
            $attributes['functions'] ?? null,
            $attributes['function_call'] ?? null,
            $attributes['temperature'] ?? null,
            $attributes['top_p'] ?? null,
            $attributes['n'] ?? null,
            $attributes['stream'] ?? null,
            $attributes['stop'] ?? null,
            $attributes['max_tokens'] ?? null,
            $attributes['presence_penalty'] ?? null,
            $attributes['frequence_penalty'] ?? null,
            $attributes['logit_bias'] ?? null,
            $attributes['user'] ?? null,
        );
    }
}
