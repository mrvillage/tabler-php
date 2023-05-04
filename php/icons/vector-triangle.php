<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconVectorTriangle extends Tabler\Icon {
    public static function getName(): string {
        return 'vector-triangle';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M10 4m0 1a1 1 0 0 1 1 -1h2a1 1 0 0 1 1 1v2a1 1 0 0 1 -1 1h-2a1 1 0 0 1 -1 -1z" />   <path d="M3 17m0 1a1 1 0 0 1 1 -1h2a1 1 0 0 1 1 1v2a1 1 0 0 1 -1 1h-2a1 1 0 0 1 -1 -1z" />   <path d="M17 17m0 1a1 1 0 0 1 1 -1h2a1 1 0 0 1 1 1v2a1 1 0 0 1 -1 1h-2a1 1 0 0 1 -1 -1z" />   <path d="M6.5 17.1l5 -9.1" />   <path d="M17.5 17.1l-5 -9.1" />   <path d="M7 19l10 0" />
        SVG;
    }
}