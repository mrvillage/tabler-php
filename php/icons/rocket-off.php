<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconRocketOff extends Tabler\Icon {
    public static function getName(): string {
        return 'rocket-off';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M9.29 9.275a9.03 9.03 0 0 0 -.29 .725a6 6 0 0 0 -5 3a8 8 0 0 1 7 7a6 6 0 0 0 3 -5c.241 -.085 .478 -.18 .708 -.283m2.428 -1.61a9 9 0 0 0 2.864 -6.107a3 3 0 0 0 -3 -3a9 9 0 0 0 -6.107 2.864" />   <path d="M7 14a6 6 0 0 0 -3 6a6 6 0 0 0 6 -3" />   <path d="M15 9m-1 0a1 1 0 1 0 2 0a1 1 0 1 0 -2 0" />   <path d="M3 3l18 18" />
        SVG;
    }
}