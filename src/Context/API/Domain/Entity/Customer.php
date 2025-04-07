<?php

declare(strict_types=1);

namespace App\Context\API\Domain\Entity;

use App\Context\API\Domain\Collection\AccountCollection;
use App\Context\API\Domain\ValueObject\UUID;

final readonly class Customer
{
    public function __construct(
        private UUID $uuid,
        private bool $isActive,
        private AccountCollection $accounts,
    ) {
    }

    public function getUUID(): UUID
    {
        return $this->uuid;
    }

    public function isActive(): bool
    {
        return $this->isActive;
    }

    public function getAccounts(): AccountCollection
    {
        return $this->accounts;
    }
}
