<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconDeviceWatchOff extends Icon {
    public static function getName(): string {
        return 'device-watch-off';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M10 6h5a3 3 0 0 1 3 3v5m-.89 3.132a2.99 2.99 0 0 1 -2.11 .868h-6a3 3 0 0 1 -3 -3v-6c0 -.817 .327 -1.559 .857 -2.1" />   <path d="M9 18v3h6v-3" />   <path d="M9 5v-2h6v3" />   <path d="M3 3l18 18" />
        SVG;
    }
}