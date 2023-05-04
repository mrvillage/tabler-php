<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconChartGridDots extends Tabler\Icon {
    public static function getName(): string {
        return 'chart-grid-dots';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M18 6m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0" />   <path d="M6 12m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0" />   <path d="M6 18m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0" />   <path d="M18 18m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0" />   <path d="M8 18h8" />   <path d="M18 20v1" />   <path d="M18 3v1" />   <path d="M6 20v1" />   <path d="M6 10v-7" />   <path d="M12 3v18" />   <path d="M18 8v8" />   <path d="M8 12h13" />   <path d="M21 6h-1" />   <path d="M16 6h-13" />   <path d="M3 12h1" />   <path d="M20 18h1" />   <path d="M3 18h1" />   <path d="M6 14v2" />
        SVG;
    }
}