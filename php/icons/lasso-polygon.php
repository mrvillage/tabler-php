<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconLassoPolygon extends \Tabler\Icon {
    public static function getName(): string {
        return 'lasso-polygon';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M4.028 13.252l-1.028 -3.252l2 -7l7 5l8 -3l1 9l-9 3l-5.144 -1.255" />   <path d="M5 15m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0" />   <path d="M5 17c0 1.42 .316 2.805 1 4" />
        SVG;
    }
}