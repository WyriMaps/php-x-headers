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
            'X-Thrall' => 'For Doomhammer!',
            'X-Troll' => 'Taz\'dingooo!',
            'X-Forsaken' => 'Victory for Sylvanas!',
            'X-Tauren' => 'May the eternal sun shine upon thee',
            'X-Shaman' => 'Storm, earth, and fire, heed my call!',
        ];
    }
}
