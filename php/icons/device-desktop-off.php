<?php
require_once(__DIR__ . '/../Icon.php');

class IconDeviceDesktopOff extends Icon {
    public static function getName(): string {
        return 'device-desktop-off';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M8 4h12a1 1 0 0 1 1 1v10a1 1 0 0 1 -1 1m-4 0h-12a1 1 0 0 1 -1 -1v-10a1 1 0 0 1 1 -1" />   <path d="M7 20h10" />   <path d="M9 16v4" />   <path d="M15 16v4" />   <path d="M3 3l18 18" />
        SVG;
    }
}