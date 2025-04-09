<?php

declare(strict_types=1);

namespace API\Domain\Exception;

use API\Domain\Type\ExceptionCode;
use Exception;

final class AccountNotFoundException extends Exception
{
    public function __construct()
    {
        parent::__construct(message: 'Account not found', code: ExceptionCode::NOT_FOUND->value);
    }
}
