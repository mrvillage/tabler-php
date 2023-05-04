<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconDeviceImacOff extends Icon {
    public static function getName(): string {
        return 'device-imac-off';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M7 3h13a1 1 0 0 1 1 1v12c0 .28 -.115 .532 -.3 .713m-3.7 .287h-13a1 1 0 0 1 -1 -1v-12c0 -.276 .112 -.526 .293 -.707" />   <path d="M3 13h10m4 0h4" />   <path d="M8 21h8" />   <path d="M10 17l-.5 4" />   <path d="M14 17l.5 4" />   <path d="M3 3l18 18" />
        SVG;
    }
}