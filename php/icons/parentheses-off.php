<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconParenthesesOff extends Icon {
    public static function getName(): string {
        return 'parentheses-off';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M5.743 5.745a12.253 12.253 0 0 0 1.257 14.255" />   <path d="M17 4a12.25 12.25 0 0 1 2.474 11.467m-1.22 2.794a12.291 12.291 0 0 1 -1.254 1.739" />   <path d="M3 3l18 18" />
        SVG;
    }
}