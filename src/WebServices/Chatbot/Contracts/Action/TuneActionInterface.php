<?php declare(strict_types=1);

namespace WebServices\AIClient\Contracts\Action;

use WebServices\AIClient\Contracts\Data\DataInterface;

interface TuneActionInterface extends ActionInterface
{
    public function list(): DataInterface;

    public function listEvents(string $id): DataInterface;

    public function retrieve(string $id): DataInterface;

    public function create(DataInterface $parameters): DataInterface;

    public function cancel(string $id): DataInterface;
}
