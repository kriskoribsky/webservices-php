<?php declare(strict_types=1);

namespace WebServices\AIClient\Contracts\Action;

use WebServices\AIClient\Contracts\Data\DataInterface;

interface TextActionInterface extends ActionInterface
{
    public function reply(DataInterface $parameters): DataInterface;

    public function conversation(DataInterface $parameters): DataInterface;

    public function edit(DataInterface $parameters): DataInterface;

    public function embedding(DataInterface $parameters): DataInterface;
}
