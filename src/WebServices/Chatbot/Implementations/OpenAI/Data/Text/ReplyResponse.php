<?php declare(strict_types=1);

namespace WebServices\AIClient\Implementations\OpenAI\Data;

use WebServices\AIClient\Contracts\Data\DataInterface;

final class ReplyResponse implements DataInterface
{
    private function __construct(
        private readonly string $id,
        private readonly string $object,
        private readonly int $created,
        private readonly array $choices,
        private readonly array $usage,
    ) {
    }
}
