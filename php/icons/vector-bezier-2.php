<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconVectorBezier2 extends Icon {
    public static function getName(): string {
        return 'vector-bezier-2';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M3 3m0 1a1 1 0 0 1 1 -1h2a1 1 0 0 1 1 1v2a1 1 0 0 1 -1 1h-2a1 1 0 0 1 -1 -1z" />   <path d="M17 17m0 1a1 1 0 0 1 1 -1h2a1 1 0 0 1 1 1v2a1 1 0 0 1 -1 1h-2a1 1 0 0 1 -1 -1z" />   <path d="M7 5l7 0" />   <path d="M10 19l7 0" />   <path d="M9 19m-1 0a1 1 0 1 0 2 0a1 1 0 1 0 -2 0" />   <path d="M15 5m-1 0a1 1 0 1 0 2 0a1 1 0 1 0 -2 0" />   <path d="M7 5.5a5 6.5 0 0 1 5 6.5a5 6.5 0 0 0 5 6.5" />
        SVG;
    }
}