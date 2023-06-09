<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconTopologyRing3 extends \Tabler\Icon {
    public static function getName(): string {
        return 'topology-ring-3';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M8 18a2 2 0 1 0 -4 0a2 2 0 0 0 4 0z" />   <path d="M20 18a2 2 0 1 0 -4 0a2 2 0 0 0 4 0z" />   <path d="M20 6a2 2 0 1 0 -4 0a2 2 0 0 0 4 0z" />   <path d="M8 6a2 2 0 1 0 -4 0a2 2 0 0 0 4 0z" />   <path d="M6 8v8" />   <path d="M18 16v-8" />   <path d="M8 6h8" />   <path d="M16 18h-8" />
        SVG;
    }
}