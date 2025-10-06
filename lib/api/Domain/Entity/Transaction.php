<?php

declare(strict_types=1);

namespace API\Domain\Entity;

use API\Domain\Type\CurrencyType;
use API\Domain\Type\TransactionDirectionType;
use API\Domain\Type\TransactionType;
use API\Domain\ValueObject\Amount;
use API\Domain\ValueObject\UUID;
use Common\Domain\Entity\DomainEntityInterface;

readonly class Transaction implements DomainEntityInterface
{
    public function __construct(
        private UUID $uuid,
        private UUID $account,
        private Amount $amount,
        private TransactionType $type,
        private TransactionDirectionType $direction,
        private CurrencyType $currency,
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

    public function getDirection(): TransactionDirectionType
    {
        return $this->direction;
    }

    public function getCurrency(): CurrencyType
    {
        return $this->currency;
    }

    public function jsonSerialize(): array
    {
        return [
            'uuid' => (string) $this->getUUID(),
            'account' => (string) $this->getAccount(),
            'amount' => (string) $this->getAmount(),
            'type' => $this->getType()->value,
            'direction' => $this->getDirection()->value,
            'currency' => $this->getCurrency()->value,
            'parent' => $this->parent?->jsonSerialize() ?? null,
        ];
    }
}
