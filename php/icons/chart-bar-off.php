<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconChartBarOff extends Icon {
    public static function getName(): string {
        return 'chart-bar-off';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M3 12m0 1a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v6a1 1 0 0 1 -1 1h-4a1 1 0 0 1 -1 -1z" />   <path d="M12 8h2a1 1 0 0 1 1 1v2m0 4v4a1 1 0 0 1 -1 1h-4a1 1 0 0 1 -1 -1v-10" />   <path d="M15 11v-6a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v12m-1 3h-4a1 1 0 0 1 -1 -1v-4" />   <path d="M4 20h14" />   <path d="M3 3l18 18" />
        SVG;
    }
}