<?php
require_once(__DIR__ . '../Icon.php');

class IconDeviceDesktopDollar extends Icon {
    public static function getName(): string {
        return 'device-desktop-dollar';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M13 16h-9a1 1 0 0 1 -1 -1v-10a1 1 0 0 1 1 -1h16a1 1 0 0 1 1 1v5.5" />   <path d="M7 20h6.5" />   <path d="M9 16v4" />   <path d="M21 15h-2.5a1.5 1.5 0 0 0 0 3h1a1.5 1.5 0 0 1 0 3h-2.5" />   <path d="M19 21v1m0 -8v1" />
        SVG;
    }
}