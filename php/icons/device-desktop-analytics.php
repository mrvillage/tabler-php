<?php
require_once(__DIR__ . '/../Icon.php');

class IconDeviceDesktopAnalytics extends Icon {
    public static function getName(): string {
        return 'device-desktop-analytics';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M3 4m0 1a1 1 0 0 1 1 -1h16a1 1 0 0 1 1 1v10a1 1 0 0 1 -1 1h-16a1 1 0 0 1 -1 -1z" />   <path d="M7 20h10" />   <path d="M9 16v4" />   <path d="M15 16v4" />   <path d="M9 12v-4" />   <path d="M12 12v-1" />   <path d="M15 12v-2" />   <path d="M12 12v-1" />
        SVG;
    }
}