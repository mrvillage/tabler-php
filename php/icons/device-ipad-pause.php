<?php
require_once(__DIR__ . '/../Icon.php');

class IconDeviceIpadPause extends Icon {
    public static function getName(): string {
        return 'device-ipad-pause';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M13 21h-7a2 2 0 0 1 -2 -2v-14a2 2 0 0 1 2 -2h12a2 2 0 0 1 2 2v8" />   <path d="M9 18h4" />   <path d="M17 17v5" />   <path d="M21 17v5" />
        SVG;
    }
}