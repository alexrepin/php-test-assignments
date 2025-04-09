<?php

declare(strict_types=1);

namespace API\Domain\Type;

enum TransactionType: string
{
    case TRANSFER = 'transfer';
    case FEE = 'fee';
}
