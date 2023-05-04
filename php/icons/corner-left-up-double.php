<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconCornerLeftUpDouble extends Icon {
    public static function getName(): string {
        return 'corner-left-up-double';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M18 19h-6a3 3 0 0 1 -3 -3v-7" />   <path d="M13 13l-4 -4l-4 4m8 -5l-4 -4l-4 4" />
        SVG;
    }
}