<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconMapPinShare extends \Tabler\Icon {
    public static function getName(): string {
        return 'map-pin-share';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M9 11a3 3 0 1 0 6 0a3 3 0 0 0 -6 0" />   <path d="M12.02 21.485a1.996 1.996 0 0 1 -1.433 -.585l-4.244 -4.243a8 8 0 1 1 13.403 -3.651" />   <path d="M16 22l5 -5" />   <path d="M21 21.5v-4.5h-4.5" />
        SVG;
    }
}