<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconArmchairOff extends \Tabler\Icon {
    public static function getName(): string {
        return 'armchair-off';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M17 13a2 2 0 1 1 4 0v4m-2 2h-14a2 2 0 0 1 -2 -2v-4a2 2 0 1 1 4 0v2h8.036" />   <path d="M5 11v-5a3 3 0 0 1 .134 -.89m1.987 -1.98a3 3 0 0 1 .879 -.13h8a3 3 0 0 1 3 3v5" />   <path d="M6 19v2" />   <path d="M18 19v2" />   <path d="M3 3l18 18" />
        SVG;
    }
}