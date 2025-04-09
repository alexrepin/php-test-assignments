<?php

declare(strict_types=1);

namespace API\Domain\Collection;

use API\Domain\Entity\Account;
use API\Domain\ValueObject\UUID;

final readonly class AccountCollection
{
    public function __construct(
        private array $items = [],
    ) {
    }

    public function findByUUID(UUID $account): ?Account
    {
        $index = array_search(
            fn(Account $item) => $item->getUUID()->equals($account),
            $this->items,
        );

        if ($index === false) {
            return null;
        }

        return $this->items[$index];
    }

    public function isEmpty(): bool
    {
        return empty($this->items);
    }

    public function toArray(): array
    {
        return $this->items;
    }
}
