<?php declare(strict_types=1);

namespace WyriMaps\XHeaders;

final class Horde
{
    public static function headers()
    {
        return [
            'X-Horde' => 'For the Horde!',
            'X-Orc' => 'Lok-tar ogar!',
            'X-Alliance' => 'Puny Alliance',
        ];
    }
}
