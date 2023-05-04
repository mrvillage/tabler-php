<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconDeviceMobileCheck extends Icon {
    public static function getName(): string {
        return 'device-mobile-check';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M11.5 21h-3.5a2 2 0 0 1 -2 -2v-14a2 2 0 0 1 2 -2h8a2 2 0 0 1 2 2v9.5" />   <path d="M11 4h2" />   <path d="M12 17v.01" />   <path d="M15 19l2 2l4 -4" />
        SVG;
    }
}