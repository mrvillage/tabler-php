<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconDeviceIpadOff extends \Tabler\Icon {
    public static function getName(): string {
        return 'device-ipad-off';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M6 2h12a2 2 0 0 1 2 2v12m0 4a2 2 0 0 1 -2 2h-12a2 2 0 0 1 -2 -2v-16" />   <path d="M9 19h6" />   <path d="M3 3l18 18" />
        SVG;
    }
}