<?php
require_once('../Icon.php');

class IconChartArrows extends Icon {
    public static function getName(): string {
        return 'chart-arrows';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M3 18l14 0" />   <path d="M9 9l3 3l-3 3" />   <path d="M14 15l3 3l-3 3" />   <path d="M3 3l0 18" />   <path d="M3 12l9 0" />   <path d="M18 3l3 3l-3 3" />   <path d="M3 6l18 0" />
        SVG;
    }
}