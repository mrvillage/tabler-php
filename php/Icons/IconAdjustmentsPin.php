<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconAdjustmentsPin extends \Tabler\Icon {
    public static function getName(): string {
        return 'adjustments-pin';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M4 10a2 2 0 1 0 4 0a2 2 0 0 0 -4 0" />   <path d="M6 4v4" />   <path d="M6 12v8" />   <path d="M13.071 14.31a2 2 0 1 0 -1.071 3.69" />   <path d="M12 4v10" />   <path d="M12 18v2" />   <path d="M16 7a2 2 0 1 0 4 0a2 2 0 0 0 -4 0" />   <path d="M18 4v1" />   <path d="M18 9v2.5" />   <path d="M21.121 20.121a3 3 0 1 0 -4.242 0c.418 .419 1.125 1.045 2.121 1.879c1.051 -.89 1.759 -1.516 2.121 -1.879z" />   <path d="M19 18v.01" />
        SVG;
    }
}