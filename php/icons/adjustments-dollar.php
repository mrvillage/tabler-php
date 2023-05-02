<?php
require_once(__DIR__ . '../Icon.php');

class IconAdjustmentsDollar extends Icon {
    public static function getName(): string {
        return 'adjustments-dollar';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M4 10a2 2 0 1 0 4 0a2 2 0 0 0 -4 0" />   <path d="M6 4v4" />   <path d="M6 12v8" />   <path d="M13.366 14.54a2 2 0 1 0 -.216 3.097" />   <path d="M12 4v10" />   <path d="M12 18v2" />   <path d="M16 7a2 2 0 1 0 4 0a2 2 0 0 0 -4 0" />   <path d="M18 4v1" />   <path d="M18 9v1" />   <path d="M21 15h-2.5a1.5 1.5 0 0 0 0 3h1a1.5 1.5 0 0 1 0 3h-2.5" />   <path d="M19 21v1m0 -8v1" />
        SVG;
    }
}