<?php declare(strict_types=1);

/*
 * This file is part of the Webservices package.
 *
 * (c) Kristian Koribsky <kristian.koribsky@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Web\Services\AIClient\Implementations\OpenAI\Action;

use Web\Services\AIClient\Abstract\Action\TextActionInterface;
use Web\Services\AIClient\Abstract\Message\MessageInterface;

final class TextAction implements TextActionInterface
{
    public function reply(MessageInterface $parameters): MessageInterface {}

    public function conversation(MessageInterface $parameters): MessageInterface {}

    public function edit(MessageInterface $parameters): MessageInterface {}

    public function embedding(MessageInterface $parameters): MessageInterface {}
}
