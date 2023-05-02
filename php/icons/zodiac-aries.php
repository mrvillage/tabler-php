<?php
require_once(__DIR__ . '../Icon.php');

class IconZodiacAries extends Icon {
    public static function getName(): string {
        return 'zodiac-aries';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M12 5a5 5 0 1 0 -4 8" />   <path d="M16 13a5 5 0 1 0 -4 -8" />   <path d="M12 21l0 -16" />
        SVG;
    }
}