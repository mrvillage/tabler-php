<?php
require_once(__DIR__ . '../Icon.php');

class IconDeviceWatchExclamation extends Icon {
    public static function getName(): string {
        return 'device-watch-exclamation';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M15 18h-6a3 3 0 0 1 -3 -3v-6a3 3 0 0 1 3 -3h6a3 3 0 0 1 3 3v3" />   <path d="M9 18v3h6v-3" />   <path d="M9 6v-3h6v3" />   <path d="M19 16v3" />   <path d="M19 22v.01" />
        SVG;
    }
}