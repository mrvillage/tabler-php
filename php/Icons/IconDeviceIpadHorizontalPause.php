<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconDeviceIpadHorizontalPause extends \Tabler\Icon {
    public static function getName(): string {
        return 'device-ipad-horizontal-pause';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M13 20h-8a2 2 0 0 1 -2 -2v-12a2 2 0 0 1 2 -2h14a2 2 0 0 1 2 2v7" />   <path d="M9 17h4" />   <path d="M17 17v5" />   <path d="M21 17v5" />
        SVG;
    }
}