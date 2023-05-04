<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconChartDonut3 extends Icon {
    public static function getName(): string {
        return 'chart-donut-3';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M12 3v5m4 4h5" />   <path d="M8.929 14.582l-3.429 2.918" />   <path d="M12 12m-4 0a4 4 0 1 0 8 0a4 4 0 1 0 -8 0" />   <path d="M12 12m-9 0a9 9 0 1 0 18 0a9 9 0 1 0 -18 0" />
        SVG;
    }
}