<?php

/**
 * @author Robin Bidanchon
 * @version 1.0
 */

namespace App\Helper;

use JetBrains\PhpStorm\Pure;

class ColorConsole
{
    public const BLACK = 30;
    public const RED = 31;
    public const GREEN = 32;
    public const BROWN = 33;
    public const BLUE = 34;
    public const MAGENTA = 35;
    public const CYAN = 36;
    public const LIGHTGRAY = 37;
    public const DEFAULT = 0;

    private const PREFIX = "\033[";
    private const BACKGROUND = "7;";

    public static function color(string $content, int $color, bool $isBackground = false): string
    {
        $contentWithPotentialBackground = $isBackground ? " " . $content . " " : $content;
        return self::displayPrefix($color, $isBackground) . $contentWithPotentialBackground . self::resetDefaultColor();
    }

    private static function displayPrefix(int $color, bool $isBackground): string
    {
        $background = $isBackground ? self::BACKGROUND : "";
        return self::PREFIX . $background . $color . "m";
    }

    private static function resetDefaultColor(): string
    {
        return self::displayPrefix(self::DEFAULT, false);
    }
}