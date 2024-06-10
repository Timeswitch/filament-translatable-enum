<?php

namespace Timeswitch\Enum\Concerns;


use Timeswitch\Enum\Contracts\TranslatableEnum;

/**
 * @method static cases(): array
 * @method toString(): string
 */
trait MapsEnum
{

    /**
     * Returns a map of the enums cases to localized strings.
     *
     * @return array<mixed,string>
     */
    public static function getMap(): array
    {
        return collect(static::cases())
            ->mapWithKeys(function (TranslatableEnum $case) {
                return [$case->value => $case->toString()];
            })
            ->toArray();
    }

    /**
     * Get the localized label for the current enum value.
     *
     * @return string|null
     */
    public function getLabel(): ?string
    {
        return $this->toString();
    }
}
