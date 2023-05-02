<?php
require_once(__DIR__ . '/../Icon.php');

class IconDeviceTabletDown extends Icon {
    public static function getName(): string {
        return 'device-tablet-down';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M12.5 21h-6.5a1 1 0 0 1 -1 -1v-16a1 1 0 0 1 1 -1h12a1 1 0 0 1 1 1v8" />   <path d="M19 16v6" />   <path d="M22 19l-3 3l-3 -3" />   <path d="M11 17a1 1 0 1 0 2 0a1 1 0 0 0 -2 0" />
        SVG;
    }
}