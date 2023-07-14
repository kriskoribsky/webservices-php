<?php declare(strict_types=1);

/*
 * This file is part of the Webservices package.
 *
 * (c) Kristian Koribsky <kristian.koribsky@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Web\Services\AIClient\Implementations\OpenAI\Message;

use Web\Services\AIClient\Abstract\Message\AbstractMessage;
use Web\Services\AIClient\Abstract\Message\MessageInterface;
use Web\Services\AIClient\Exceptions\MessageArgumentException;

final readonly class Implementations_OpenAI_Message_Text_Reply_ReplyResponse extends AbstractMessage implements MessageInterface
{
    public function __construct(
        public readonly string $id,
        public readonly string $object,
        public readonly int $created,
        public readonly string $model,
        public readonly array $choices,
        public readonly array $usage,
    ) {}

    /**
     * {@inheritDoc}
     */
    public static function fromArray(array $attributes): static
    {
        return new self(
            $attributes['id'] ?? throw new MessageArgumentException("Required key 'id' not specified."),
            $attributes['object'] ?? throw new MessageArgumentException("Required key 'object' not specified."),
            $attributes['created'] ?? throw new MessageArgumentException("Required key 'created' not specified."),
            $attributes['model'] ?? throw new MessageArgumentException("Required key 'model' not specified."),
            $attributes['choices'] ?? throw new MessageArgumentException("Required key 'choices' not specified."),
            $attributes['usage'] ?? throw new MessageArgumentException("Required key 'usage' not specified."),
        );
    }
}
