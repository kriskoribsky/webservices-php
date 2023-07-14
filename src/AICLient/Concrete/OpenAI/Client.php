<?php declare(strict_types=1);

/*
 * This file is part of the Webservices package.
 *
 * (c) Kristian Koribsky <kristian.koribsky@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Web\Services\AIClient\Implementations\OpenAI;

use Web\Services\AIClient\Abstract\AbstractClient;
use Web\Services\AIClient\Abstract\ClientInterface;
use Web\Services\AIClient\Implementations\OpenAI\Action\TextAction;

final class Client extends AbstractClient implements ClientInterface
{
    public function text(): TextAction {}
}
