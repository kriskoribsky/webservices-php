<?php declare(strict_types=1);

namespace WebServices\AIClient\Contracts\Action;

use WebServices\AIClient\Contracts\Data\DataInterface;

interface ModelActionInterface extends ActionInterface
{
    public function list(): DataInterface;

    public function retrieve(string $model): DataInterface;

    public function delete(string $model): DataInterface;
}
