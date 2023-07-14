<?php declare(strict_types=1);

/*
 * This file is part of the Webservices package.
 *
 * (c) Kristian Koribsky <kristian.koribsky@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Web\Services\AIClient\Abstract\Action;

use Web\Services\AIClient\Abstract\Message\MessageInterface;

interface TuneActionInterface extends ActionInterface
{
    public function list(): MessageInterface;

    public function listEvents(string $id): MessageInterface;

    public function retrieve(string $id): MessageInterface;

    public function create(MessageInterface $parameters): MessageInterface;

    public function cancel(string $id): MessageInterface;
}
