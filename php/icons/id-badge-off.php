<?php
require_once(__DIR__ . '../Icon.php');

class IconIdBadgeOff extends Icon {
    public static function getName(): string {
        return 'id-badge-off';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M7.141 3.125a3 3 0 0 1 .859 -.125h8a3 3 0 0 1 3 3v9m-.13 3.874a3 3 0 0 1 -2.87 2.126h-8a3 3 0 0 1 -3 -3v-12a3 3 0 0 1 .128 -.869" />   <path d="M11.179 11.176a2 2 0 1 0 2.635 2.667" />   <path d="M10 6h4" />   <path d="M9 18h6" />   <path d="M3 3l18 18" />
        SVG;
    }
}