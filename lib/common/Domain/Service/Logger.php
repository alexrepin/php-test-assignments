<?php

declare(strict_types=1);

namespace Common\Domain\Service;

interface Logger
{
    public function log(string $message): void;
    public function error(string $message): void;
}
