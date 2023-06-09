<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconTopologyStarRing3 extends \Tabler\Icon {
    public static function getName(): string {
        return 'topology-star-ring-3';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M10 19a2 2 0 1 0 -4 0a2 2 0 0 0 4 0z" />   <path d="M18 5a2 2 0 1 0 -4 0a2 2 0 0 0 4 0z" />   <path d="M10 5a2 2 0 1 0 -4 0a2 2 0 0 0 4 0z" />   <path d="M6 12a2 2 0 1 0 -4 0a2 2 0 0 0 4 0z" />   <path d="M18 19a2 2 0 1 0 -4 0a2 2 0 0 0 4 0z" />   <path d="M14 12a2 2 0 1 0 -4 0a2 2 0 0 0 4 0z" />   <path d="M22 12a2 2 0 1 0 -4 0a2 2 0 0 0 4 0z" />   <path d="M6 12h4" />   <path d="M14 12h4" />   <path d="M15 7l-2 3" />   <path d="M9 7l2 3" />   <path d="M11 14l-2 3" />   <path d="M13 14l2 3" />   <path d="M10 5h4" />   <path d="M10 19h4" />   <path d="M17 17l2 -3" />   <path d="M19 10l-2 -3" />   <path d="M7 7l-2 3" />   <path d="M5 14l2 3" />
        SVG;
    }
}