<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconAbacus extends Tabler\Icon {
    public static function getName(): string {
        return 'abacus';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M5 3v18" />   <path d="M19 21v-18" />   <path d="M5 7h14" />   <path d="M5 15h14" />   <path d="M8 13v4" />   <path d="M11 13v4" />   <path d="M16 13v4" />   <path d="M14 5v4" />   <path d="M11 5v4" />   <path d="M8 5v4" />   <path d="M3 21h18" />
        SVG;
    }
}