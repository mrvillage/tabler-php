<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconDeviceImacPause extends \Tabler\Icon {
    public static function getName(): string {
        return 'device-imac-pause';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M13 17h-9a1 1 0 0 1 -1 -1v-12a1 1 0 0 1 1 -1h16a1 1 0 0 1 1 1v9" />   <path d="M3 13h18" />   <path d="M8 21h5" />   <path d="M10 17l-.5 4" />   <path d="M17 17v5" />   <path d="M21 17v5" />
        SVG;
    }
}