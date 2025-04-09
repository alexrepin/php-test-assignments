<?php

declare(strict_types=1);

namespace App\Context\FinancialOperation\Presentation\HTTP\V1;

use API\Domain\ValueObject\Amount;
use API\Domain\ValueObject\UUID;

final readonly class TransferRequest
{
    public function __construct(
        private UUID $from,
        private UUID $to,
        private Amount $amount,
    ) {
    }

    public function getFrom(): UUID
    {
        return $this->from;
    }

    public function getTo(): UUID
    {
        return $this->to;
    }

    public function getAmount(): Amount
    {
        return $this->amount;
    }
}
