<?php

declare(strict_types=1);

namespace App\Context\API\Domain\Service;

use App\Context\API\Domain\Entity\Transaction;

/**
 * Контракт взаимодействия с сервисом транзакций
 */
interface TransactionService
{
    public function create(Transaction $transaction): void;
}
