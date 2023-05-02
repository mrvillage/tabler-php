<?php
require_once('../Icon.php');

class IconDeviceDesktopPause extends Icon {
    public static function getName(): string {
        return 'device-desktop-pause';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M13 16h-9a1 1 0 0 1 -1 -1v-10a1 1 0 0 1 1 -1h16a1 1 0 0 1 1 1v8" />   <path d="M17 17v5" />   <path d="M21 17v5" />   <path d="M7 20h6" />   <path d="M9 16v4" />
        SVG;
    }
}