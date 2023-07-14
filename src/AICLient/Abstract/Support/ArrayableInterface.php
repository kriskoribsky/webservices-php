<?php declare(strict_types=1);

/*
 * This file is part of the Webservices package.
 *
 * (c) Kristian Koribsky <kristian.koribsky@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Web\Services\AIClient\Abstract\Support;

/**
 * The ArrayableInterface defines a contract for classes that can be converted to an array representation.
 */
interface ArrayableInterface
{
    /**
     * Get the instance as an array.
     *
     * @return array the instance represented as an array
     */
    public function toArray(): array;

    /**
     * Create a new instance from an array of attributes.
     *
     * @param array $attributes the attributes to populate the instance
     *
     * @return static the new instance created from the attributes
     */
    public static function fromArray(array $attributes): static;
}
