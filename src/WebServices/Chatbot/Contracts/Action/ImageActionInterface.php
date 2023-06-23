<?php declare(strict_types=1);

namespace WebServices\AIClient\Contracts\Action;

use WebServices\AIClient\Contracts\Data\DataInterface;

interface ImageActionInterface extends ActionInterface
{
    public function create(DataInterface $parameters): DataInterface;

    public function edit(DataInterface $parameters): DataInterface;

    public function variation(DataInterface $parameters): DataInterface;
}
