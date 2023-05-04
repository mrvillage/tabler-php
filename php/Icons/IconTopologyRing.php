<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconTopologyRing extends \Tabler\Icon {
    public static function getName(): string {
        return 'topology-ring';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M14 20a2 2 0 1 0 -4 0a2 2 0 0 0 4 0z" />   <path d="M14 4a2 2 0 1 0 -4 0a2 2 0 0 0 4 0z" />   <path d="M6 12a2 2 0 1 0 -4 0a2 2 0 0 0 4 0z" />   <path d="M22 12a2 2 0 1 0 -4 0a2 2 0 0 0 4 0z" />   <path d="M13.5 5.5l5 5" />   <path d="M5.5 13.5l5 5" />   <path d="M13.5 18.5l5 -5" />   <path d="M10.5 5.5l-5 5" />
        SVG;
    }
}