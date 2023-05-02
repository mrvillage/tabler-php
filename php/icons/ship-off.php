<?php
require_once(__DIR__ . '../Icon.php');

class IconShipOff extends Icon {
    public static function getName(): string {
        return 'ship-off';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M2 20a2.4 2.4 0 0 0 2 1a2.4 2.4 0 0 0 2 -1a2.4 2.4 0 0 1 2 -1a2.4 2.4 0 0 1 2 1a2.4 2.4 0 0 0 2 1a2.4 2.4 0 0 0 2 -1a2.4 2.4 0 0 1 2 -1a2.4 2.4 0 0 1 2 1a2.4 2.4 0 0 0 2 1a2.4 2.4 0 0 0 2 -1" />   <path d="M4 18l-1 -5h10m4 0h4l-1.334 2.668" />   <path d="M5 13v-6h2m4 0h2l4 6" />   <path d="M3 3l18 18" />
        SVG;
    }
}