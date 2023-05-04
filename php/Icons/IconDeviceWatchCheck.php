<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconDeviceWatchCheck extends \Tabler\Icon {
    public static function getName(): string {
        return 'device-watch-check';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M11 18h-2a3 3 0 0 1 -3 -3v-6a3 3 0 0 1 3 -3h6a3 3 0 0 1 3 3v5.5" />   <path d="M9 18v3h2.5" />   <path d="M9 6v-3h6v3" />   <path d="M15 19l2 2l4 -4" />
        SVG;
    }
}