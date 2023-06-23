<?php declare(strict_types=1);

namespace WebServices\AIClient\Contracts\Data;

use WebServices\AIClient\Contracts\Support\ArrayableInterface;

/**
 * Interface representing AIClient's data transfer object base
 * which all concrete data objects must implement.
 */
interface DataInterface extends \JsonSerializable, ArrayableInterface
{
    public function getAttribute(string $key): mixed;

    public function withAttribute(string $key, mixed $value): static;
}
