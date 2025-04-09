<?php

declare(strict_types=1);

namespace API\Domain\Entity;

use API\Domain\Type\TransactionType;
use API\Domain\ValueObject\Amount;
use API\Domain\ValueObject\UUID;
use Common\Domain\Entity\DomainEntityInterface;

final readonly class Transaction implements DomainEntityInterface
{
    public function __construct(
        private UUID $uuid,
        private UUID $account,
        private Amount $amount,
        private TransactionType $type,
        private ?UUID $parent = null,
    ) {
    }

    public function getUUID(): UUID
    {
        return $this->uuid;
    }

    public function getAccount(): UUID
    {
        return $this->account;
    }

    public function getAmount(): Amount
    {
        return $this->amount;
    }

    public function getType(): TransactionType
    {
        return $this->type;
    }

    public function getParent(): ?UUID
    {
        return $this->parent;
    }

    public function jsonSerialize(): array
    {
        return [
            'uuid' => $this->uuid,
            'account' => $this->account,
            'amount' => $this->amount,
            'type' => $this->type,
            'parent' => $this->parent,
        ];
    }
}
