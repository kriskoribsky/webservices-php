<?php declare(strict_types=1);

/*
 * This file is part of the Webservices package.
 *
 * (c) Kristian Koribsky <kristian.koribsky@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Web\Services\AIClient\Abstract\Message;

trait ArrayableTrait
{
    /**
     * {@inheritDoc}
     */
    public function toArray(): array
    {
        $result = [];

        foreach ($this as $name => $property) {
            if ($property !== null) {
                $result[$name] = $property;
            }
        }

        return $result;
    }
}
