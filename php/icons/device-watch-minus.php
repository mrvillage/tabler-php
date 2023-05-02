<?php
require_once(__DIR__ . '/../Icon.php');

class IconDeviceWatchMinus extends Icon {
    public static function getName(): string {
        return 'device-watch-minus';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M12 18h-3a3 3 0 0 1 -3 -3v-6a3 3 0 0 1 3 -3h6a3 3 0 0 1 3 3v6" />   <path d="M9 18v3h3.5" />   <path d="M9 6v-3h6v3" />   <path d="M16 19h6" />
        SVG;
    }
}