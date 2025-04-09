<?php

declare(strict_types=1);

namespace Common\Domain\Exception;

use API\Domain\Type\ExceptionCode;
use Exception;

final class ValueObjectException extends Exception
{
    public function __construct(string $message)
    {
        parent::__construct(message: $message, code: ExceptionCode::ERROR->value);
    }
}
