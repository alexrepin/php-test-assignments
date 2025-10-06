<?php

declare(strict_types=1);

namespace API\Domain\Exception;

use API\Domain\Type\ExceptionCode;
use Exception;

final class LockException extends Exception
{
    public function __construct()
    {
        parent::__construct(message: 'Lock error', code: ExceptionCode::ERROR->value);
    }
}
