<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconDeviceWatchBolt extends \Tabler\Icon {
    public static function getName(): string {
        return 'device-watch-bolt';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M13 18h-4a3 3 0 0 1 -3 -3v-6a3 3 0 0 1 3 -3h6a3 3 0 0 1 3 3v3" />   <path d="M9 18v3h4.5" />   <path d="M9 6v-3h6v3" />   <path d="M19 16l-2 3h4l-2 3" />
        SVG;
    }
}