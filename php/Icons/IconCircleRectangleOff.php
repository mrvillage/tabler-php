<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconCircleRectangleOff extends \Tabler\Icon {
    public static function getName(): string {
        return 'circle-rectangle-off';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M14 10h3v3m-3 1h-7v-4h3" />   <path d="M20.042 16.045a9 9 0 0 0 -12.087 -12.087m-2.318 1.677a9 9 0 1 0 12.725 12.73" />   <path d="M3 3l18 18" />
        SVG;
    }
}