<?php

declare(strict_types=1);

namespace App\Context\API\Domain\Entity;

use App\Context\API\Domain\Collection\AccountCollection;
use App\Context\API\Domain\ValueObject\Amount;
use App\Context\API\Domain\ValueObject\UUID;

final readonly class Transaction
{
    public function __construct(
        private UUID $uuid,
        private UUID $account,
        private Amount $amount,
        private string $type,
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

    public function getType(): string
    {
        return $this->type;
    }

    public function getParent(): ?UUID
    {
        return $this->parent;
    }
}
