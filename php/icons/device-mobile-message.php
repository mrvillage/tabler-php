<?php
require_once('../Icon.php');

class IconDeviceMobileMessage extends Icon {
    public static function getName(): string {
        return 'device-mobile-message';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M11 3h10v8h-3l-4 2v-2h-3z" />   <path d="M15 16v4a1 1 0 0 1 -1 1h-8a1 1 0 0 1 -1 -1v-14a1 1 0 0 1 1 -1h2" />   <path d="M10 18v.01" />
        SVG;
    }
}