<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconSunglasses extends Icon {
    public static function getName(): string {
        return 'sunglasses';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M8 4h-2l-3 10" />   <path d="M16 4h2l3 10" />   <path d="M10 16h4" />   <path d="M21 16.5a3.5 3.5 0 0 1 -7 0v-2.5h7v2.5" />   <path d="M10 16.5a3.5 3.5 0 0 1 -7 0v-2.5h7v2.5" />   <path d="M4 14l4.5 4.5" />   <path d="M15 14l4.5 4.5" />
        SVG;
    }
}