<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconAdjustmentsAlt extends \Tabler\Icon {
    public static function getName(): string {
        return 'adjustments-alt';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M4 8h4v4h-4z" />   <path d="M6 4l0 4" />   <path d="M6 12l0 8" />   <path d="M10 14h4v4h-4z" />   <path d="M12 4l0 10" />   <path d="M12 18l0 2" />   <path d="M16 5h4v4h-4z" />   <path d="M18 4l0 1" />   <path d="M18 9l0 11" />
        SVG;
    }
}