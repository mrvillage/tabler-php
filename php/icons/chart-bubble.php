<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconChartBubble extends Tabler\Icon {
    public static function getName(): string {
        return 'chart-bubble';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M6 16m-3 0a3 3 0 1 0 6 0a3 3 0 1 0 -6 0" />   <path d="M16 19m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0" />   <path d="M14.5 7.5m-4.5 0a4.5 4.5 0 1 0 9 0a4.5 4.5 0 1 0 -9 0" />
        SVG;
    }
}