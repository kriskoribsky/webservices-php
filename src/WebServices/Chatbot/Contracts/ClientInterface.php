<?php declare(strict_types=1);

namespace WebServices\AIClient\Contracts;

use WebServices\AIClient\Contracts\Action\AudioActionInterface;
use WebServices\AIClient\Contracts\Action\FileActionInterface;
use WebServices\AIClient\Contracts\Action\ImageActionInterface;
use WebServices\AIClient\Contracts\Action\ModelActionInterface;
use WebServices\AIClient\Contracts\Action\TextActionInterface;
use WebServices\AIClient\Contracts\Action\TuneActionInterface;

interface ClientInterface
{
    public function text(): TextActionInterface;

    public function image(): ImageActionInterface;

    public function audio(): AudioActionInterface;

    public function file(): FileActionInterface;

    public function model(): ModelActionInterface;

    public function tune(): TuneActionInterface;
}
