<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconAdjustmentsDown extends \Tabler\Icon {
    public static function getName(): string {
        return 'adjustments-down';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M4 10a2 2 0 1 0 4 0a2 2 0 0 0 -4 0" />   <path d="M6 4v4" />   <path d="M6 12v8" />   <path d="M13.945 15.53a2 2 0 1 0 -1.945 2.47" />   <path d="M12 4v10" />   <path d="M12 18v2" />   <path d="M16 7a2 2 0 1 0 4 0a2 2 0 0 0 -4 0" />   <path d="M18 4v1" />   <path d="M18 9v3" />   <path d="M19 16v6" />   <path d="M22 19l-3 3l-3 -3" />
        SVG;
    }
}