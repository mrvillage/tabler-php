<?php
require_once('../Icon.php');

class IconDeviceTabletQuestion extends Icon {
    public static function getName(): string {
        return 'device-tablet-question';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M15 21h-9a1 1 0 0 1 -1 -1v-16a1 1 0 0 1 1 -1h12a1 1 0 0 1 1 1v7" />   <path d="M19 22v.01" />   <path d="M19 19a2.003 2.003 0 0 0 .914 -3.782a1.98 1.98 0 0 0 -2.414 .483" />   <path d="M11 17a1 1 0 1 0 2 0a1 1 0 0 0 -2 0" />
        SVG;
    }
}