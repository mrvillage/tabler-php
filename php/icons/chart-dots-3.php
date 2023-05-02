<?php
require_once(__DIR__ . '../Icon.php');

class IconChartDots3 extends Icon {
    public static function getName(): string {
        return 'chart-dots-3';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M5 7m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0" />   <path d="M16 15m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0" />   <path d="M18 6m-3 0a3 3 0 1 0 6 0a3 3 0 1 0 -6 0" />   <path d="M6 18m-3 0a3 3 0 1 0 6 0a3 3 0 1 0 -6 0" />   <path d="M9 17l5 -1.5" />   <path d="M6.5 8.5l7.81 5.37" />   <path d="M7 7l8 -1" />
        SVG;
    }
}