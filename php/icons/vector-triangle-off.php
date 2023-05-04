<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconVectorTriangleOff extends Icon {
    public static function getName(): string {
        return 'vector-triangle-off';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M10 6v-1a1 1 0 0 1 1 -1h2a1 1 0 0 1 1 1v2a1 1 0 0 1 -1 1h-1" />   <path d="M3 17m0 1a1 1 0 0 1 1 -1h2a1 1 0 0 1 1 1v2a1 1 0 0 1 -1 1h-2a1 1 0 0 1 -1 -1z" />   <path d="M20.705 20.709a1 1 0 0 1 -.705 .291h-2a1 1 0 0 1 -1 -1v-2c0 -.28 .115 -.532 .3 -.714" />   <path d="M6.5 17.1l3.749 -6.823" />   <path d="M13.158 9.197l-.658 -1.197" />   <path d="M7 19h10" />   <path d="M3 3l18 18" />
        SVG;
    }
}