<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconRainbow extends \Tabler\Icon {
    public static function getName(): string {
        return 'rainbow';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M22 17c0 -5.523 -4.477 -10 -10 -10s-10 4.477 -10 10" />   <path d="M18 17a6 6 0 1 0 -12 0" />   <path d="M14 17a2 2 0 1 0 -4 0" />
        SVG;
    }
}