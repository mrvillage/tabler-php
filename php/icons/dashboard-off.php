<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconDashboardOff extends Tabler\Icon {
    public static function getName(): string {
        return 'dashboard-off';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M11.175 11.178a2 2 0 1 0 2.653 2.634" />   <path d="M14.5 10.5l1 -1" />   <path d="M8.621 4.612a9 9 0 0 1 11.721 11.72m-1.516 2.488a9.008 9.008 0 0 1 -1.226 1.18h-11.2a9 9 0 0 1 -.268 -13.87" />   <path d="M3 3l18 18" />
        SVG;
    }
}