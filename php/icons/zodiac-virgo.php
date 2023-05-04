<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconZodiacVirgo extends Tabler\Icon {
    public static function getName(): string {
        return 'zodiac-virgo';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M3 4a2 2 0 0 1 2 2v9" />   <path d="M5 6a2 2 0 0 1 4 0v9" />   <path d="M9 6a2 2 0 0 1 4 0v10a7 5 0 0 0 7 5" />   <path d="M12 21a7 5 0 0 0 7 -5v-2a3 3 0 0 0 -6 0" />
        SVG;
    }
}