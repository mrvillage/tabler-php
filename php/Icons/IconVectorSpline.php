<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconVectorSpline extends \Tabler\Icon {
    public static function getName(): string {
        return 'vector-spline';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M17 3m0 1a1 1 0 0 1 1 -1h2a1 1 0 0 1 1 1v2a1 1 0 0 1 -1 1h-2a1 1 0 0 1 -1 -1z" />   <path d="M3 17m0 1a1 1 0 0 1 1 -1h2a1 1 0 0 1 1 1v2a1 1 0 0 1 -1 1h-2a1 1 0 0 1 -1 -1z" />   <path d="M17 5c-6.627 0 -12 5.373 -12 12" />
        SVG;
    }
}