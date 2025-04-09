<?php

declare(strict_types=1);

namespace API\Domain\Service;

use API\Domain\ValueObject\Amount;
use API\Domain\ValueObject\UUID;
use Common\Domain\Exception\ServiceException;

/**
 * Контракт взаимодействия с сервисом комиссий
 */
interface FeeServiceInterface
{
    /**
     * Возвращает процент комисии в случае, если у пользователя она имеется
     *
     * @throws ServiceException
     *
     * @param UUID $customer
     *
     * @return ?Amount
     */
    public function getPercent(UUID $customer): ?Amount;
}
