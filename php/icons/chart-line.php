<?php
require_once(__DIR__ . '../Icon.php');

class IconChartLine extends Icon {
    public static function getName(): string {
        return 'chart-line';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M4 19l16 0" />   <path d="M4 15l4 -6l4 2l4 -5l4 4" />
        SVG;
    }
}