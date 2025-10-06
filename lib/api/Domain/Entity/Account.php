<?php

declare(strict_types=1);

namespace API\Domain\Entity;

use API\Domain\Type\CurrencyType;
use API\Domain\ValueObject\UUID;
use Common\Domain\Entity\DomainEntityInterface;

readonly class Account implements DomainEntityInterface
{
    public function __construct(
        private UUID $uuid,
        private UUID $customer,
        private CurrencyType $currency,
    ) {
    }

    public function getUUID(): UUID
    {
        return $this->uuid;
    }

    public function getCustomer(): UUID
    {
        return $this->customer;
    }

    public function getCurrency(): CurrencyType
    {
        return $this->currency;
    }

    public function jsonSerialize(): array
    {
        return [
            'uuid' => (string) $this->getUUID(),
            'customer' => (string) $this->getCustomer(),
            'currency' => $this->getCurrency()->value,
        ];
    }
}
