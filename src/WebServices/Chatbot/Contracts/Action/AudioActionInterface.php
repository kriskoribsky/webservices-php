<?php declare(strict_types=1);

namespace WebServices\AIClient\Contracts\Action;

use WebServices\AIClient\Contracts\Data\DataInterface;

interface AudioActionInterface extends ActionInterface
{
    public function transcription(DataInterface $parameters): DataInterface;

    public function translate(DataInterface $parameters): DataInterface;
}
