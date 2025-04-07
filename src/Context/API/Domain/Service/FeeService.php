<?php

declare(strict_types=1);

namespace App\Context\API\Domain\Service;

use App\Context\API\Domain\ValueObject\Amount;
use App\Context\API\Domain\ValueObject\UUID;

/**
 * Контракт взаимодействия с сервисом комиссий
 */
interface FeeService
{
    /**
     * Определяет наличие комисии у пользователя
     *
     * @param UUID $customer
     * @return bool
     */
    public function hasFee(UUID $customer): bool;

    /**
     * Возвращает процент комисии
     *
     * @param UUID $customer
     * @return Amount
     */
    public function getFeePercent(UUID $customer): Amount;
}
