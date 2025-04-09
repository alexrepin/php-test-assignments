<?php

declare(strict_types=1);

namespace API\Domain\Entity;

use API\Domain\ValueObject\UUID;
use Common\Domain\Entity\DomainEntityInterface;

final readonly class Account implements DomainEntityInterface
{
    public function __construct(
        private UUID $uuid,
        private UUID $customer,
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

    public function jsonSerialize(): array
    {
        return [
            'uuid' => $this->uuid,
            'customer' => $this->customer,
        ];
    }
}
