<?php
require_once(__DIR__ . '/../Icon.php');

class IconDeviceIpadHorizontalCheck extends Icon {
    public static function getName(): string {
        return 'device-ipad-horizontal-check';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M11 20h-6a2 2 0 0 1 -2 -2v-12a2 2 0 0 1 2 -2h14a2 2 0 0 1 2 2v7" />   <path d="M15 19l2 2l4 -4" />   <path d="M9 17h2.5" />
        SVG;
    }
}