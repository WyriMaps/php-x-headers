<?php declare(strict_types=1);

namespace WyriMaps\Tests\XHeaders;

use PHPUnit\Framework\TestCase;
use WyriMaps\XHeaders\Horde;

final class HeadersTest extends TestCase
{
    public function factionsProvider()
    {
        yield [Horde::class];
    }

    /**
     * @dataProvider factionsProvider
     */
    public function testHeaders(string $faction)
    {
        self::assertTrue(class_exists($faction));
        foreach ($faction::headers() as $header => $value) {
            self::assertInternalType('string', $header);
            self::assertInternalType('string', $value);
        }
    }
}
