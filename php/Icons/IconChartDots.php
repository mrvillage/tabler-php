<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconChartDots extends \Tabler\Icon {
    public static function getName(): string {
        return 'chart-dots';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M3 3v18h18" />   <path d="M9 9m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0" />   <path d="M19 7m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0" />   <path d="M14 15m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0" />   <path d="M10.16 10.62l2.34 2.88" />   <path d="M15.088 13.328l2.837 -4.586" />
        SVG;
    }
}