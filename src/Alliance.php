<?php declare(strict_types=1);

namespace WyriMaps\XHeaders;

final class Alliance
{
    public static function headers()
    {
        return [
            'X-Stormwind-Guard' => 'King\'s honor friend',
            'X-Tyrande-Whisperwind' => 'Anu\'dora!',
            'X-Draenei' => 'The Naaru have not forgotten us.',
            'X-Gnome' => 'My, you\'re a tall one!',
            'X-Night-Elf' => 'Elune be with you.',
            'X-Worgen' => 'What\'s your story?',
        ];
    }
}
