<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconDeviceImacExclamation extends \Tabler\Icon {
    public static function getName(): string {
        return 'device-imac-exclamation';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M15 17h-11a1 1 0 0 1 -1 -1v-12a1 1 0 0 1 1 -1h16a1 1 0 0 1 1 1v8.5" />   <path d="M3 13h13" />   <path d="M8 21h7" />   <path d="M10 17l-.5 4" />   <path d="M14 17l.5 4" />   <path d="M19 16v3" />   <path d="M19 22v.01" />
        SVG;
    }
}