<?php declare(strict_types=1);

namespace WebServices\AIClient\Contracts\Action;

use Psr\Http\Message\ResponseInterface;

interface ActionInterface
{
    public function getLastHttpResponse(): ResponseInterface;
}
