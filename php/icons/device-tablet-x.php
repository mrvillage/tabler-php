<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconDeviceTabletX extends Icon {
    public static function getName(): string {
        return 'device-tablet-x';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M13 21h-7a1 1 0 0 1 -1 -1v-16a1 1 0 0 1 1 -1h12a1 1 0 0 1 1 1v9.5" />   <path d="M22 22l-5 -5" />   <path d="M17 22l5 -5" />   <path d="M11 17a1 1 0 1 0 2 0a1 1 0 0 0 -2 0" />
        SVG;
    }
}