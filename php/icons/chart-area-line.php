<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconChartAreaLine extends Tabler\Icon {
    public static function getName(): string {
        return 'chart-area-line';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M4 19l4 -6l4 2l4 -5l4 4l0 5l-16 0" />   <path d="M4 12l3 -4l4 2l5 -6l4 4" />
        SVG;
    }
}