<?php

declare(strict_types=1);

namespace API\Domain\Type;

enum ExceptionCode: int
{
    case NOT_FOUND = 404;
    case FORBIDDEN = 403;
    case ERROR = 500;
}
