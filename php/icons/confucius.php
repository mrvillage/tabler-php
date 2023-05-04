<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconConfucius extends Tabler\Icon {
    public static function getName(): string {
        return 'confucius';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M9 19l3 2v-18" />   <path d="M4 10l8 -2" />   <path d="M4 18l8 -10" />   <path d="M20 18l-8 -8l8 -4" />
        SVG;
    }
}