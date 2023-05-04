<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconDeviceTabletCode extends Icon {
    public static function getName(): string {
        return 'device-tablet-code';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M11.5 21h-5.5a1 1 0 0 1 -1 -1v-16a1 1 0 0 1 1 -1h12a1 1 0 0 1 1 1v9" />   <path d="M12.344 16.06a1 1 0 0 0 -1.07 1.627" />   <path d="M20 21l2 -2l-2 -2" />   <path d="M17 17l-2 2l2 2" />
        SVG;
    }
}