<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconChartSankey extends Icon {
    public static function getName(): string {
        return 'chart-sankey';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M3 3v18h18" />   <path d="M3 6h18" />   <path d="M3 8c10 0 8 9 18 9" />
        SVG;
    }
}