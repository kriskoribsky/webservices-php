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

use Web\Services\AIClient\Abstract\Support\ArrayableInterface;

/**
 * Interface representing AIClient's Message transfer object base
 * which all concrete Message objects must implement.
 */
interface MessageInterface extends \JsonSerializable, ArrayableInterface {}
