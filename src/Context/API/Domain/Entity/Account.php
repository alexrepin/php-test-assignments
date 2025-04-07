<?php

declare(strict_types=1);

namespace App\Context\API\Domain\Entity;

use App\Context\API\Domain\ValueObject\UUID;

final readonly class Account
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
}
