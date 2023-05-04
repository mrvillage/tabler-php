<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconCircuitCellPlus extends \Tabler\Icon {
    public static function getName(): string {
        return 'circuit-cell-plus';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M2 12h9" />   <path d="M15 12h7" />   <path d="M11 5v14" />   <path d="M15 9v6" />   <path d="M3 5h4" />   <path d="M5 3v4" />
        SVG;
    }
}