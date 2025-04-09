<?php

declare(strict_types=1);

namespace API\Domain\ValueObject;

use Common\Domain\Exception\ValueObjectException;
use JsonSerializable;
use Ramsey\Uuid\Uuid as RamseyUUID;
use Ramsey\Uuid\UuidInterface;
use Stringable;

final readonly class UUID implements JsonSerializable, Stringable
{
    private UuidInterface $value;

    /**
     * @throws ValueObjectException
     */
    public function __construct(
        string|UuidInterface $value = null,
    ) {
        if ($value !== null) {
            if (!RamseyUUID::isValid((string)$value)) {
                throw new ValueObjectException("Value is not a valid UUID");
            }

            $this->value = RamseyUUID::fromString((string)$value);
        } else {
            $this->value = RamseyUUID::uuid4();
        }
    }

    public function equals(UUID $uuid): bool
    {
        return (string)$uuid === (string)$this->value;
    }

    public function __toString(): string
    {
        return $this->value->toString();
    }

    public function jsonSerialize(): string
    {
        return $this->__toString();
    }
}
