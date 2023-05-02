<?php
require_once(__DIR__ . '../Icon.php');

class IconBuildingCommunity extends Icon {
    public static function getName(): string {
        return 'building-community';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M8 9l5 5v7h-5v-4m0 4h-5v-7l5 -5m1 1v-6a1 1 0 0 1 1 -1h10a1 1 0 0 1 1 1v17h-8" />   <path d="M13 7l0 .01" />   <path d="M17 7l0 .01" />   <path d="M17 11l0 .01" />   <path d="M17 15l0 .01" />
        SVG;
    }
}