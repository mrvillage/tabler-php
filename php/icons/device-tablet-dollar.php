<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconDeviceTabletDollar extends Icon {
    public static function getName(): string {
        return 'device-tablet-dollar';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M13 21h-7a1 1 0 0 1 -1 -1v-16a1 1 0 0 1 1 -1h12a1 1 0 0 1 1 1v6" />   <path d="M11 17a1 1 0 1 0 2 0a1 1 0 0 0 -2 0" />   <path d="M21 15h-2.5a1.5 1.5 0 0 0 0 3h1a1.5 1.5 0 0 1 0 3h-2.5" />   <path d="M19 21v1m0 -8v1" />
        SVG;
    }
}