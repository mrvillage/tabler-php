<?php
require_once('../Icon.php');

class IconDeviceIpadHorizontal extends Icon {
    public static function getName(): string {
        return 'device-ipad-horizontal';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M3 6a2 2 0 0 1 2 -2h14a2 2 0 0 1 2 2v12a2 2 0 0 1 -2 2h-14a2 2 0 0 1 -2 -2v-12z" />   <path d="M9 17h6" />
        SVG;
    }
}