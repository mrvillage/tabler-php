<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconMobiledata extends Icon {
    public static function getName(): string {
        return 'mobiledata';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M16 12v-8" />   <path d="M8 20v-8" />   <path d="M13 7l3 -3l3 3" />   <path d="M5 17l3 3l3 -3" />
        SVG;
    }
}