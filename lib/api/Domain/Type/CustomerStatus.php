<?php

declare(strict_types=1);

namespace API\Domain\Type;

enum CustomerStatus: string
{
    case ACTIVE = 'active';
    case INACTIVE = 'inactive';
}
