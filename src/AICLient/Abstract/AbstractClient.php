<?php declare(strict_types=1);

/*
 * This file is part of the Webservices package.
 *
 * (c) Kristian Koribsky <kristian.koribsky@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Web\Services\AIClient\Contracts;

use Http\Discovery\Psr17Factory;
use Http\Discovery\Psr18Client;
use Psr\Http\Client\ClientInterface as HttpClientInterface;
use Psr\Http\Message\ResponseInterface;
use Web\Services\AIClient\Abstract\Message\MessageInterface;

abstract class AbstractClient implements ClientInterface
{
    public function __construct(
        private readonly string $key,
        public readonly ?string $organization = null,
        public readonly string $baseUri = 'api.openai.com/v1',
        private readonly ?HttpClientInterface $client = new Psr18Client(),
    ) {}

    private function api(string $method, string $relUri, MessageInterface $parameters): ResponseInterface
    {
        $psr17Factory = new Psr17Factory();

        $uri = $this->baseUri . $relUri;
    }
}
