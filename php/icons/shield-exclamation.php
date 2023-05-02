<?php
require_once(__DIR__ . '../Icon.php');

class IconShieldExclamation extends Icon {
    public static function getName(): string {
        return 'shield-exclamation';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M15.04 19.745c-.942 .551 -1.964 .976 -3.04 1.255a12 12 0 0 1 -8.5 -15a12 12 0 0 0 8.5 -3a12 12 0 0 0 8.5 3a12 12 0 0 1 .195 6.015" />   <path d="M19 16v3" />   <path d="M19 22v.01" />
        SVG;
    }
}