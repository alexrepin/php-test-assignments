<?php

declare(strict_types=1);

namespace App\Context\API\Domain\Service;

use App\Context\API\Domain\Entity\Account;
use App\Context\API\Domain\Entity\Customer;
use App\Context\API\Domain\ValueObject\UUID;

/**
 * Контракт взаимодействия с сервисом аккаунтов
 */
interface CustomerService
{
    /**
     * Возвращает объект клиента по его идентификатору
     *
     * @param UUID $uuid
     * @return Customer|null
     */
    public function getCustomerByUUID(UUID $uuid): ?Customer;

    /**
     * Возвращает объект аккаунта по его идентификатору
     *
     * @param UUID $uuid
     * @return Account|null
     */
    public function getAccountByUUID(UUID $uuid): ?Account;
}
