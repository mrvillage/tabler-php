<?php
require_once('../Icon.php');

class IconZodiacCapricorn extends Icon {
    public static function getName(): string {
        return 'zodiac-capricorn';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M4 4a3 3 0 0 1 3 3v9" />   <path d="M7 7a3 3 0 0 1 6 0v11a3 3 0 0 1 -3 3" />   <path d="M16 17m-3 0a3 3 0 1 0 6 0a3 3 0 1 0 -6 0" />
        SVG;
    }
}