<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconGrill extends Icon {
    public static function getName(): string {
        return 'grill';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M19 8h-14a6 6 0 0 0 6 6h2a6 6 0 0 0 6 -5.775l0 -.225z" />   <path d="M17 20a2 2 0 1 1 0 -4a2 2 0 0 1 0 4z" />   <path d="M15 14l1 2" />   <path d="M9 14l-3 6" />   <path d="M15 18h-8" />   <path d="M15 5v-1" />   <path d="M12 5v-1" />   <path d="M9 5v-1" />
        SVG;
    }
}