<?php
require_once(__DIR__ . '../Icon.php');

class IconChartCandle extends Icon {
    public static function getName(): string {
        return 'chart-candle';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M4 6m0 1a1 1 0 0 1 1 -1h2a1 1 0 0 1 1 1v3a1 1 0 0 1 -1 1h-2a1 1 0 0 1 -1 -1z" />   <path d="M6 4l0 2" />   <path d="M6 11l0 9" />   <path d="M10 14m0 1a1 1 0 0 1 1 -1h2a1 1 0 0 1 1 1v3a1 1 0 0 1 -1 1h-2a1 1 0 0 1 -1 -1z" />   <path d="M12 4l0 10" />   <path d="M12 19l0 1" />   <path d="M16 5m0 1a1 1 0 0 1 1 -1h2a1 1 0 0 1 1 1v4a1 1 0 0 1 -1 1h-2a1 1 0 0 1 -1 -1z" />   <path d="M18 4l0 1" />   <path d="M18 11l0 9" />
        SVG;
    }
}