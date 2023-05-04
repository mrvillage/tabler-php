<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconRoadOff extends Tabler\Icon {
    public static function getName(): string {
        return 'road-off';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M4 19l3.332 -11.661" />   <path d="M16 5l2.806 9.823" />   <path d="M12 8v-2" />   <path d="M12 13v-1" />   <path d="M12 18v-2" />   <path d="M3 3l18 18" />
        SVG;
    }
}