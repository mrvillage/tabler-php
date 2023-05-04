<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconMapPinCheck extends \Tabler\Icon {
    public static function getName(): string {
        return 'map-pin-check';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M9 11a3 3 0 1 0 6 0a3 3 0 0 0 -6 0" />   <path d="M11.87 21.48a1.992 1.992 0 0 1 -1.283 -.58l-4.244 -4.243a8 8 0 1 1 13.355 -3.474" />   <path d="M15 19l2 2l4 -4" />
        SVG;
    }
}