<?php
require_once(__DIR__ . '../Icon.php');

class IconChartArrowsVertical extends Icon {
    public static function getName(): string {
        return 'chart-arrows-vertical';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M18 21v-14" />   <path d="M9 15l3 -3l3 3" />   <path d="M15 10l3 -3l3 3" />   <path d="M3 21l18 0" />   <path d="M12 21l0 -9" />   <path d="M3 6l3 -3l3 3" />   <path d="M6 21v-18" />
        SVG;
    }
}