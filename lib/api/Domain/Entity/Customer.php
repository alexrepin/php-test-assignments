<?php

declare(strict_types=1);

namespace API\Domain\Entity;

use API\Domain\Collection\AccountCollection;
use API\Domain\Type\CustomerStatus;
use API\Domain\ValueObject\UUID;
use Common\Domain\Entity\DomainEntityInterface;

final readonly class Customer implements DomainEntityInterface
{
    public function __construct(
        private UUID $uuid,
        private CustomerStatus $status,
        private AccountCollection $accounts,
    ) {
    }

    public function getUUID(): UUID
    {
        return $this->uuid;
    }

    public function getStatus(): CustomerStatus
    {
        return $this->status;
    }

    public function getAccounts(): AccountCollection
    {
        return $this->accounts;
    }

    public function jsonSerialize(): array
    {
        return [
            'uuid' => $this->uuid,
            'status' => $this->status,
            'accounts' => $this->accounts->toArray(),
        ];
    }
}
