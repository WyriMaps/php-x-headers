<?php declare(strict_types=1);

namespace WyriMaps\XHeaders;

final class Alliance
{
    public static function headers()
    {
        return [
            'X-Stormwind-Guard' => 'King\'s honor friend',
            'X-Dwarf' => 'For Khaz Modan!',
            'X-Human' => 'For the Alliance!',
            'X-Varian-Wrynn' => 'Stormwind honors your service to the Alliance',
            'X-Arthas-Menethil' => 'For Lordaeron!',
            'X-Magni-Bronzebeard' => 'Feel the fury of the mountain!',
        ];
    }
}
