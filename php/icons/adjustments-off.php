<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconAdjustmentsOff extends Icon {
    public static function getName(): string {
        return 'adjustments-off';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M4 10a2 2 0 1 0 4 0a2 2 0 0 0 -4 0" />   <path d="M6 6v2" />   <path d="M6 12v8" />   <path d="M10 16a2 2 0 1 0 4 0a2 2 0 0 0 -4 0" />   <path d="M12 4v4m0 4v2" />   <path d="M12 18v2" />   <path d="M16 7a2 2 0 1 0 4 0a2 2 0 0 0 -4 0" />   <path d="M18 4v1" />   <path d="M18 9v5m0 4v2" />   <path d="M3 3l18 18" />
        SVG;
    }
}