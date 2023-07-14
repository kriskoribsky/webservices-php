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

use Web\Services\AIClient\Abstract\Action\AudioActionInterface;
use Web\Services\AIClient\Abstract\Action\FileActionInterface;
use Web\Services\AIClient\Abstract\Action\ImageActionInterface;
use Web\Services\AIClient\Abstract\Action\ModelActionInterface;
use Web\Services\AIClient\Abstract\Action\TextActionInterface;
use Web\Services\AIClient\Abstract\Action\TuneActionInterface;

interface ClientInterface
{
    public function text(): TextActionInterface;

    public function image(): ImageActionInterface;

    public function audio(): AudioActionInterface;

    public function file(): FileActionInterface;

    public function model(): ModelActionInterface;

    public function tune(): TuneActionInterface;
}
