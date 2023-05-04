<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconMenuOrder extends Icon {
    public static function getName(): string {
        return 'menu-order';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M4 10h16" />   <path d="M4 14h16" />   <path d="M9 18l3 3l3 -3" />   <path d="M9 6l3 -3l3 3" />
        SVG;
    }
}