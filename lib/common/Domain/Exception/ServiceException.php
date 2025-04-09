<?php

declare(strict_types=1);

namespace Common\Domain\Exception;

use API\Domain\Type\ExceptionCode;
use Exception;

final class ServiceException extends Exception
{
    public function __construct()
    {
        parent::__construct(message: 'Service error', code: ExceptionCode::ERROR->value);
    }
}
