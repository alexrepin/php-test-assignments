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
     */
    public function getByUUID(UUID $transaction): ?Transaction;

    /**
     * Создает транзакцию
     *
     * @throws ServiceException
     */
    public function create(Transaction $transaction): void;
}
