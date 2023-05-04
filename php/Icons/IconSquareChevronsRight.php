<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconSquareChevronsRight extends \Tabler\Icon {
    public static function getName(): string {
        return 'square-chevrons-right';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M9 9l3 3l-3 3" />   <path d="M13 9l3 3l-3 3" />   <path d="M3 3m0 2a2 2 0 0 1 2 -2h14a2 2 0 0 1 2 2v14a2 2 0 0 1 -2 2h-14a2 2 0 0 1 -2 -2z" />
        SVG;
    }
}