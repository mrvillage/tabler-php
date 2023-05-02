<?php
require_once(__DIR__ . '../Icon.php');

class IconChartArcs3 extends Icon {
    public static function getName(): string {
        return 'chart-arcs-3';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M12 12m-1 0a1 1 0 1 0 2 0a1 1 0 1 0 -2 0" />   <path d="M7 12a5 5 0 1 0 5 -5" />   <path d="M6.29 18.957a9 9 0 1 0 5.71 -15.957" />
        SVG;
    }
}