<?php

declare(strict_types=1);

namespace API\Domain\Exception;

use API\Domain\Type\ExceptionCode;
use Exception;

final class CustomerNotFoundException extends Exception
{
    public function __construct()
    {
        parent::__construct(message: 'Customer not found', code: ExceptionCode::NOT_FOUND->value);
    }
}
