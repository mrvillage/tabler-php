<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconDiamondOff extends \Tabler\Icon {
    public static function getName(): string {
        return 'diamond-off';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M9 5h9l3 5l-3.308 3.697m-1.883 2.104l-3.309 3.699a.7 .7 0 0 1 -1 0l-8.5 -9.5l2.62 -4.368" />   <path d="M10 12l-2 -2.2l.6 -1" />   <path d="M3 3l18 18" />
        SVG;
    }
}