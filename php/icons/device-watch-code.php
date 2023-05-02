<?php
require_once(__DIR__ . '/../Icon.php');

class IconDeviceWatchCode extends Icon {
    public static function getName(): string {
        return 'device-watch-code';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M11 18h-2a3 3 0 0 1 -3 -3v-6a3 3 0 0 1 3 -3h6a3 3 0 0 1 3 3v4" />   <path d="M20 21l2 -2l-2 -2" />   <path d="M17 17l-2 2l2 2" />   <path d="M9 18v3h3" />   <path d="M9 6v-3h6v3" />
        SVG;
    }
}