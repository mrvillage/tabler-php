<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconDeviceAnalytics extends Tabler\Icon {
    public static function getName(): string {
        return 'device-analytics';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M3 4m0 1a1 1 0 0 1 1 -1h16a1 1 0 0 1 1 1v10a1 1 0 0 1 -1 1h-16a1 1 0 0 1 -1 -1z" />   <path d="M7 20l10 0" />   <path d="M9 16l0 4" />   <path d="M15 16l0 4" />   <path d="M8 12l3 -3l2 2l3 -3" />
        SVG;
    }
}