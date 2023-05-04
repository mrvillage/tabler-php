<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconEmergencyBed extends \Tabler\Icon {
    public static function getName(): string {
        return 'emergency-bed';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M16 18m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0" />   <path d="M8 18m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0" />   <path d="M4 8l2.1 2.8a3 3 0 0 0 2.4 1.2h11.5" />   <path d="M10 6h4" />   <path d="M12 4v4" />   <path d="M12 12v2l-2.5 2.5" />   <path d="M14.5 16.5l-2.5 -2.5" />
        SVG;
    }
}