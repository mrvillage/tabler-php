<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconAspectRatio extends \Tabler\Icon {
    public static function getName(): string {
        return 'aspect-ratio';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M3 5m0 2a2 2 0 0 1 2 -2h14a2 2 0 0 1 2 2v10a2 2 0 0 1 -2 2h-14a2 2 0 0 1 -2 -2z" />   <path d="M7 12v-3h3" />   <path d="M17 12v3h-3" />
        SVG;
    }
}