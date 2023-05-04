<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconMapPinPause extends Tabler\Icon {
    public static function getName(): string {
        return 'map-pin-pause';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M9 11a3 3 0 1 0 6 0a3 3 0 0 0 -6 0" />   <path d="M13.414 20.9a2 2 0 0 1 -2.827 0l-4.244 -4.243a8 8 0 1 1 13.337 -3.413" />   <path d="M17 17v5" />   <path d="M21 17v5" />
        SVG;
    }
}