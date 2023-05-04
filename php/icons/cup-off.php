<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconCupOff extends Icon {
    public static function getName(): string {
        return 'cup-off';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M8 8h-3v3h6m4 0h4v-3h-7" />   <path d="M17.5 11l-.323 2.154m-.525 3.497l-.652 4.349h-8l-1.5 -10" />   <path d="M6 8v-1c0 -.296 .064 -.577 .18 -.83m2.82 -1.17h7a2 2 0 0 1 2 2v1" />   <path d="M15 5v-2" />   <path d="M3 3l18 18" />
        SVG;
    }
}