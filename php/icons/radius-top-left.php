<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconRadiusTopLeft extends Icon {
    public static function getName(): string {
        return 'radius-top-left';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M5 19v-6a8 8 0 0 1 8 -8h6" />
        SVG;
    }
}