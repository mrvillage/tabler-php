<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconDeviceTablet extends \Tabler\Icon {
    public static function getName(): string {
        return 'device-tablet';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M5 4a1 1 0 0 1 1 -1h12a1 1 0 0 1 1 1v16a1 1 0 0 1 -1 1h-12a1 1 0 0 1 -1 -1v-16z" />   <path d="M11 17a1 1 0 1 0 2 0a1 1 0 0 0 -2 0" />
        SVG;
    }
}