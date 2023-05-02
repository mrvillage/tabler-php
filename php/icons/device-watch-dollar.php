<?php
require_once(__DIR__ . '../Icon.php');

class IconDeviceWatchDollar extends Icon {
    public static function getName(): string {
        return 'device-watch-dollar';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M13 18h-4a3 3 0 0 1 -3 -3v-6a3 3 0 0 1 3 -3h6a3 3 0 0 1 3 3v1" />   <path d="M21 15h-2.5a1.5 1.5 0 0 0 0 3h1a1.5 1.5 0 0 1 0 3h-2.5" />   <path d="M19 21v1m0 -8v1" />   <path d="M9 18v3h4" />   <path d="M9 6v-3h6v3" />
        SVG;
    }
}