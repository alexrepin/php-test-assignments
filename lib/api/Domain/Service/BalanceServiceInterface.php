<?php

declare(strict_types=1);

namespace API\Domain\Service;

use API\Domain\Exception\AccountNotFoundException;
use API\Domain\ValueObject\Amount;
use API\Domain\ValueObject\UUID;
use Common\Domain\Exception\ServiceException;

/**
 * Контракт взаимодействия с сервисом баланса аккаунтов (счетов)
 */
interface BalanceServiceInterface
{
    /**
     * Получение баланса аккаунта
     *
     * @throws ServiceException
     * @throws AccountNotFoundException
     *
     * @param UUID $account
     *
     * @return Amount|null
     */
    public function getByUUID(UUID $account): ?Amount;

    /**
     * Понижает баланс аккаунта на сумму $amount
     *
     * @throws ServiceException
     * @throws AccountNotFoundException
     *
     * @param UUID $account
     * @param Amount $amount
     *
     * @return void
     */
    public function debit(UUID $account, Amount $amount): void;

    /**
     * Увеличивает баланс аккаунта на сумму $amount
     *
     * @throws ServiceException
     * @throws AccountNotFoundException
     *
     * @param UUID $account
     * @param Amount $amount
     *
     * @return void
     */
    public function credit(UUID $account, Amount $amount): void;
}
