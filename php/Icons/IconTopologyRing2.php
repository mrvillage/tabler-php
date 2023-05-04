<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconTopologyRing2 extends \Tabler\Icon {
    public static function getName(): string {
        return 'topology-ring-2';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M14 6a2 2 0 1 0 -4 0a2 2 0 0 0 4 0z" />   <path d="M7 18a2 2 0 1 0 -4 0a2 2 0 0 0 4 0z" />   <path d="M21 18a2 2 0 1 0 -4 0a2 2 0 0 0 4 0z" />   <path d="M7 18h10" />   <path d="M18 16l-5 -8" />   <path d="M11 8l-5 8" />
        SVG;
    }
}