<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconCheese extends Tabler\Icon {
    public static function getName(): string {
        return 'cheese';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M4.519 20.008l16.481 -.008v-3.5a2 2 0 1 1 0 -4v-3.5h-16.722" />   <path d="M21 9l-9.385 -4.992c-2.512 .12 -4.758 1.42 -6.327 3.425c-1.423 1.82 -2.288 4.221 -2.288 6.854c0 2.117 .56 4.085 1.519 5.721" />   <path d="M15 13v.01" />   <path d="M8 13v.01" />   <path d="M11 16v.01" />
        SVG;
    }
}