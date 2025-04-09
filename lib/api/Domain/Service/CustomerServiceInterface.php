<?php

declare(strict_types=1);

namespace API\Domain\Service;

use API\Domain\Entity\Customer;
use API\Domain\Exception\CustomerNotFoundException;
use API\Domain\ValueObject\UUID;
use Common\Domain\Exception\ServiceException;

/**
 * Контракт взаимодействия с сервисом клиентов
 */
interface CustomerServiceInterface
{
    /**
     * Возвращает объект клиента по его идентификатору
     *
     * @throws CustomerNotFoundException
     * @throws ServiceException
     *
     * @param UUID $uuid
     *
     * @return Customer|null
     */
    public function getByUUID(UUID $uuid): ?Customer;
}
