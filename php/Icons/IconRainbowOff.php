<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconRainbowOff extends \Tabler\Icon {
    public static function getName(): string {
        return 'rainbow-off';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M22 17c0 -5.523 -4.477 -10 -10 -10c-.308 0 -.613 .014 -.914 .041m-3.208 .845a10 10 0 0 0 -5.878 9.114" />   <path d="M11.088 11.069a6 6 0 0 0 -5.088 5.931" />   <path d="M14 17a2 2 0 1 0 -4 0" />   <path d="M3 3l18 18" />
        SVG;
    }
}