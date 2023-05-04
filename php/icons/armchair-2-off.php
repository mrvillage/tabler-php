<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconArmchair2Off extends Icon {
    public static function getName(): string {
        return 'armchair-2-off';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M5 10v-4a3 3 0 0 1 .128 -.869m2.038 -2.013c.264 -.078 .544 -.118 .834 -.118h8a3 3 0 0 1 3 3v4" />   <path d="M16.124 12.145a3 3 0 1 1 3.756 3.724m-.88 3.131h-14v-3a3 3 0 1 1 3 -3v2" />   <path d="M8 12h4" />   <path d="M7 19v2" />   <path d="M17 19v2" />   <path d="M3 3l18 18" />
        SVG;
    }
}