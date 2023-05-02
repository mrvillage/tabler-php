<?php
require_once(__DIR__ . '/../Icon.php');

class IconDeviceMobileRotated extends Icon {
    public static function getName(): string {
        return 'device-mobile-rotated';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M3 6m0 2a2 2 0 0 1 2 -2h14a2 2 0 0 1 2 2v8a2 2 0 0 1 -2 2h-14a2 2 0 0 1 -2 -2z" />   <path d="M20 11v2" />   <path d="M7 12h-.01" />
        SVG;
    }
}