<?php declare(strict_types=1);

namespace WyriMaps\XHeaders;

final class Alliance
{
    public static function headers()
    {
        return [
            'X-Stormwind-Guard' => 'King\'s honor friend',
        ];
    }
}
