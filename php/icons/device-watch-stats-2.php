<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconDeviceWatchStats2 extends Icon {
    public static function getName(): string {
        return 'device-watch-stats-2';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M6 6m0 3a3 3 0 0 1 3 -3h6a3 3 0 0 1 3 3v6a3 3 0 0 1 -3 3h-6a3 3 0 0 1 -3 -3z" />   <path d="M9 18v3h6v-3" />   <path d="M9 6v-3h6v3" />   <path d="M12 10a2 2 0 1 0 2 2" />
        SVG;
    }
}