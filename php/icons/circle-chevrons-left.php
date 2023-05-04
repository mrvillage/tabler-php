<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconCircleChevronsLeft extends Tabler\Icon {
    public static function getName(): string {
        return 'circle-chevrons-left';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M15 15l-3 -3l3 -3" />   <path d="M11 15l-3 -3l3 -3" />   <path d="M21 12a9 9 0 1 0 0 .265l0 -.265z" />
        SVG;
    }
}