<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconAdOff extends \Tabler\Icon {
    public static function getName(): string {
        return 'ad-off';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M9 5h10a2 2 0 0 1 2 2v10m-2 2h-14a2 2 0 0 1 -2 -2v-10a2 2 0 0 1 2 -2" />   <path d="M7 15v-4a2 2 0 0 1 2 -2m2 2v4" />   <path d="M7 13h4" />   <path d="M17 9v4" />   <path d="M16.115 12.131c.33 .149 .595 .412 .747 .74" />   <path d="M3 3l18 18" />
        SVG;
    }
}