<?php

declare(strict_types=1);

namespace Boatrace\Ninja;

/**
 * @author shimomo
 */
class MainTrimmer
{
    /**
     * @param  string|null  $value
     * @param  string       $characters
     * @return string|null
     */
    public function trim(?string $value, string $characters = "\040\t\n\r\0\x0B"): ?string
    {
        return is_null($value) ? null : trim($value, $characters);
    }

    /**
     * @param  string|null  $value
     * @param  string       $characters
     * @return string|null
     */
    public function ltrim(?string $value, string $characters = "\040\t\n\r\0\x0B"): ?string
    {
        return is_null($value) ? null : ltrim($value, $characters);
    }

    /**
     * @param  string|null  $value
     * @param  string       $characters
     * @return string|null
     */
    public function rtrim(?string $value, string $characters = "\040\t\n\r\0\x0B"): ?string
    {
        return is_null($value) ? null : rtrim($value, $characters);
    }
}
