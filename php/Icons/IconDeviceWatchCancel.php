<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconDeviceWatchCancel extends \Tabler\Icon {
    public static function getName(): string {
        return 'device-watch-cancel';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M12 18h-3a3 3 0 0 1 -3 -3v-6a3 3 0 0 1 3 -3h6a3 3 0 0 1 3 3v3" />   <path d="M9 18v3h3" />   <path d="M9 6v-3h6v3" />   <path d="M19 19m-3 0a3 3 0 1 0 6 0a3 3 0 1 0 -6 0" />   <path d="M17 21l4 -4" />
        SVG;
    }
}