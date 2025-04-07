<?php

declare(strict_types=1);

namespace App\Context\API\Domain\Service;

use App\Context\API\Domain\ValueObject\Amount;
use App\Context\API\Domain\ValueObject\UUID;

/**
 * Контракт взаимодействия с сервисом баланса аккаунтов
 */
interface BalanceService
{
    /**
     * Получение баланса аккаунта
     *
     * @param UUID $account
     * @return Amount|null
     */
    public function getAccountBalance(UUID $account): ?Amount;

    /**
     * Понижает баланс аккаунта на сумму $amount
     *
     * @param UUID $account
     * @param Amount $amount
     * @return void
     */
    public function debitAccountBalance(UUID $account, Amount $amount): void;

    /**
     * Увеличивает баланс аккаунта на сумму $amount
     *
     * @param UUID $account
     * @param Amount $amount
     * @return void
     */
    public function creditAccountBalance(UUID $account, Amount $amount): void;
}
