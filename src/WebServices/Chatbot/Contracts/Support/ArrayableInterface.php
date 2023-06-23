<?php declare(strict_types=1);

namespace WebServices\AIClient\Contracts\Support;

/**
 * The ArrayableInterface defines a contract for classes that can be converted to an array representation.
 */
interface ArrayableInterface
{
    /**
     * Get the instance as an array.
     *
     * @return array The instance represented as an array.
     */
    public function toArray(): array;

    /**
     * Create a new instance from an array of attributes.
     *
     * @param array $attributes The attributes to populate the instance.
     * @return static The new instance created from the attributes.
     */
    public static function fromArray(array $attributes): static;
}
