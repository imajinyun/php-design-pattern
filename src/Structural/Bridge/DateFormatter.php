<?php

declare(strict_types=1);

namespace DesignPattern\Structural\Bridge;

class DateFormatter implements FormatterInterface
{
    /**
     * Format timestamp string to Date.
     *
     * @param  string  $string
     *
     * @return false|string
     */
    public function format(string $string): string
    {
        return date('Y-m-d', (int)$string);
    }
}
