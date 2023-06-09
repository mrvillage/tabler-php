<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconDeviceTabletExclamation extends \Tabler\Icon {
    public static function getName(): string {
        return 'device-tablet-exclamation';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M15 21h-9a1 1 0 0 1 -1 -1v-16a1 1 0 0 1 1 -1h12a1 1 0 0 1 1 1v8" />   <path d="M11 17a1 1 0 1 0 2 0a1 1 0 0 0 -2 0" />   <path d="M19 16v3" />   <path d="M19 22v.01" />
        SVG;
    }
}