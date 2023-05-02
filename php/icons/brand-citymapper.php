<?php
require_once(__DIR__ . '../Icon.php');

class IconBrandCitymapper extends Icon {
    public static function getName(): string {
        return 'brand-citymapper';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M3 11a1 1 0 1 1 -1 1.013a1 1 0 0 1 1 -1v-.013z" />   <path d="M21 11a1 1 0 1 1 -1 1.013a1 1 0 0 1 1 -1v-.013z" />   <path d="M8 12h8" />   <path d="M13 9l3 3l-3 3" />
        SVG;
    }
}