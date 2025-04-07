<?php

declare(strict_types=1);

namespace App\Context\API\Domain\Collection;

/**
 * Псевдо-коллекция, необходима для упрощения написания кода
 */
final readonly class AccountCollection
{
    public function __construct(
        private array $items = [],
    ) {
    }

    public function find($item): object | null
    {
        return null;
    }

    public function has($item): bool
    {
        return true;
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
