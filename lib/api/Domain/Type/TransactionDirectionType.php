<?php

declare(strict_types=1);

namespace API\Domain\Type;

enum TransactionDirectionType: string
{
    case INCOME = 'income';
    case OUTCOME = 'outcome';
}
