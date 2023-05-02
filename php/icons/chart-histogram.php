<?php
require_once(__DIR__ . '../Icon.php');

class IconChartHistogram extends Icon {
    public static function getName(): string {
        return 'chart-histogram';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M3 3v18h18" />   <path d="M20 18v3" />   <path d="M16 16v5" />   <path d="M12 13v8" />   <path d="M8 16v5" />   <path d="M3 11c6 0 5 -5 9 -5s3 5 9 5" />
        SVG;
    }
}