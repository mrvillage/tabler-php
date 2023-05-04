<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconDeviceTvOff extends \Tabler\Icon {
    public static function getName(): string {
        return 'device-tv-off';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M11 7h8a2 2 0 0 1 2 2v8m-1.178 2.824c-.25 .113 -.529 .176 -.822 .176h-14a2 2 0 0 1 -2 -2v-9a2 2 0 0 1 2 -2h2" />   <path d="M16 3l-4 4l-4 -4" />   <path d="M3 3l18 18" />
        SVG;
    }
}