<?php
require_once('../Icon.php');

class IconZodiacAquarius extends Icon {
    public static function getName(): string {
        return 'zodiac-aquarius';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M3 10l3 -3l3 3l3 -3l3 3l3 -3l3 3" />   <path d="M3 17l3 -3l3 3l3 -3l3 3l3 -3l3 3" />
        SVG;
    }
}