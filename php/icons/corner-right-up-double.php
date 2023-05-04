<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconCornerRightUpDouble extends Icon {
    public static function getName(): string {
        return 'corner-right-up-double';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M5 19h6a3 3 0 0 0 3 -3v-7" />   <path d="M10 13l4 -4l4 4m-8 -5l4 -4l4 4" />
        SVG;
    }
}