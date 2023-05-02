<?php
require_once('../Icon.php');

class IconDeviceMobileX extends Icon {
    public static function getName(): string {
        return 'device-mobile-x';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M13 21h-5a2 2 0 0 1 -2 -2v-14a2 2 0 0 1 2 -2h8a2 2 0 0 1 2 2v8" />   <path d="M22 22l-5 -5" />   <path d="M17 22l5 -5" />   <path d="M11 4h2" />   <path d="M12 17v.01" />
        SVG;
    }
}