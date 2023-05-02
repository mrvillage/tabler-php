<?php
require_once(__DIR__ . '../Icon.php');

class IconStretching2 extends Icon {
    public static function getName(): string {
        return 'stretching-2';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M11 4a1 1 0 1 0 2 0a1 1 0 0 0 -2 0" />   <path d="M6.5 21l3.5 -5" />   <path d="M5 11l7 -2" />   <path d="M16 21l-4 -7v-5l7 -4" />
        SVG;
    }
}