<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconRulerOff extends Icon {
    public static function getName(): string {
        return 'ruler-off';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M8 4h11a1 1 0 0 1 1 1v5a1 1 0 0 1 -1 1h-4m-3.713 .299a1 1 0 0 0 -.287 .701v7a1 1 0 0 1 -1 1h-5a1 1 0 0 1 -1 -1v-14c0 -.284 .118 -.54 .308 -.722" />   <path d="M4 8h2" />   <path d="M4 12h3" />   <path d="M4 16h2" />   <path d="M12 4v3" />   <path d="M16 4v2" />   <path d="M3 3l18 18" />
        SVG;
    }
}