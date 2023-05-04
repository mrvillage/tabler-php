<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconChartDots2 extends Tabler\Icon {
    public static function getName(): string {
        return 'chart-dots-2';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M3 3v18h18" />   <path d="M9 15m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0" />   <path d="M13 5m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0" />   <path d="M18 12m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0" />   <path d="M21 3l-6 1.5" />   <path d="M14.113 6.65l2.771 3.695" />   <path d="M16 12.5l-5 2" />
        SVG;
    }
}