<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconMilitaryRank extends \Tabler\Icon {
    public static function getName(): string {
        return 'military-rank';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M17 7v13h-10v-13l5 -3z" />   <path d="M10 13l2 -1l2 1" />   <path d="M10 17l2 -1l2 1" />   <path d="M10 9l2 -1l2 1" />
        SVG;
    }
}