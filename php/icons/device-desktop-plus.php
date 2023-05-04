<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconDeviceDesktopPlus extends Tabler\Icon {
    public static function getName(): string {
        return 'device-desktop-plus';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M13.5 16h-9.5a1 1 0 0 1 -1 -1v-10a1 1 0 0 1 1 -1h16a1 1 0 0 1 1 1v7.5" />   <path d="M7 20h5" />   <path d="M9 16v4" />   <path d="M16 19h6" />   <path d="M19 16v6" />
        SVG;
    }
}