<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconPhotoSensor3 extends Icon {
    public static function getName(): string {
        return 'photo-sensor-3';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M17 4h1a2 2 0 0 1 2 2v1" />   <path d="M20 17v1a2 2 0 0 1 -2 2h-1" />   <path d="M7 20h-1a2 2 0 0 1 -2 -2v-1" />   <path d="M4 7v-1a2 2 0 0 1 2 -2h1" />   <path d="M12 12m-3 0a3 3 0 1 0 6 0a3 3 0 1 0 -6 0" />   <path d="M12 18v2" />   <path d="M4 12h2" />   <path d="M12 4v2" />   <path d="M20 12h-2" />
        SVG;
    }
}