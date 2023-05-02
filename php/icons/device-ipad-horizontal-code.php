<?php
require_once('../Icon.php');

class IconDeviceIpadHorizontalCode extends Icon {
    public static function getName(): string {
        return 'device-ipad-horizontal-code';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M11 20h-6a2 2 0 0 1 -2 -2v-12a2 2 0 0 1 2 -2h14a2 2 0 0 1 2 2v7" />   <path d="M9 17h2.5" />   <path d="M20 21l2 -2l-2 -2" />   <path d="M17 17l-2 2l2 2" />
        SVG;
    }
}