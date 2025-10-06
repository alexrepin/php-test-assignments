<?php

declare(strict_types=1);

namespace API\Domain\Type;

enum CurrencyType: string
{
    case USD = 'usd';
    case RUB = 'rub';
    case EUR = 'eur';
}
