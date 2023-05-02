<?php
require_once('../Icon.php');

class IconMapPinX extends Icon {
    public static function getName(): string {
        return 'map-pin-x';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M9 11a3 3 0 1 0 6 0a3 3 0 0 0 -6 0" />   <path d="M13.024 21.204a2 2 0 0 1 -2.437 -.304l-4.244 -4.243a8 8 0 1 1 13.119 -2.766" />   <path d="M22 22l-5 -5" />   <path d="M17 22l5 -5" />
        SVG;
    }
}