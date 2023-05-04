<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconRoute2 extends Tabler\Icon {
    public static function getName(): string {
        return 'route-2';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M3 17l4 4" />   <path d="M7 17l-4 4" />   <path d="M17 3l4 4" />   <path d="M21 3l-4 4" />   <path d="M14 5a2 2 0 0 0 -2 2v10a2 2 0 0 1 -2 2" />
        SVG;
    }
}