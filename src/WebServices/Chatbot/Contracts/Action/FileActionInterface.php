<?php declare(strict_types=1);

namespace WebServices\AIClient\Contracts\Action;

use WebServices\AIClient\Contracts\Data\DataInterface;

interface FileActionInterface extends ActionInterface
{
    public function list(): DataInterface;

    public function upload(DataInterface $parameters): DataInterface;

    public function info(string $file): DataInterface;

    public function delete(string $file): DataInterface;

    public function download(string $file): DataInterface;
}
