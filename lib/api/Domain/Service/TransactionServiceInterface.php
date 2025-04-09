<?php

declare(strict_types=1);

namespace API\Domain\Service;

use API\Domain\Entity\Transaction;
use API\Domain\ValueObject\UUID;
use Common\Domain\Exception\ServiceException;

/**
 * Контракт взаимодействия с сервисом транзакций
 */
interface TransactionServiceInterface
{
    /**
     * Возвращает транзакцию по идентификатору
     *
     * @throws ServiceException
     *
     * @param UUID $transaction
     *
     * @return ?Transaction
     */
    public function getByUUID(UUID $transaction): ?Transaction;

    /**
     * Создает транзакцию
     *
     * @throws ServiceException
     *
     * @param Transaction $transaction
     *
     * @return void
     */
    public function create(Transaction $transaction): void;
}
