<?php declare(strict_types=1);

namespace WebServices\AIClient\Implementations\OpenAI;

use WebServices\AIClient\Contracts\ClientInterface;

final class Client implements ClientInterface
{
    public function text(): TextA
    {
    }

    public function image(): ActionInterface
    {
    }

    public function audio(): ActionInterface
    {
    }

    public function file(): ActionInterface
    {
    }
}
