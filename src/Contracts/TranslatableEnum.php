<?php

namespace Timeswitch\Enum\Contracts;

use Filament\Support\Contracts\HasLabel;

interface TranslatableEnum extends HasLabel
{

    /**
     * Converts the current value into a localized string.
     *
     * @return string
     */
    public function toString(): string;
}
