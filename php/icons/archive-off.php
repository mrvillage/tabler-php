<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconArchiveOff extends Tabler\Icon {
    public static function getName(): string {
        return 'archive-off';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M8 4h11a2 2 0 1 1 0 4h-7m-4 0h-3a2 2 0 0 1 -.826 -3.822" />   <path d="M5 8v10a2 2 0 0 0 2 2h10a2 2 0 0 0 1.824 -1.18m.176 -3.82v-7" />   <path d="M10 12h2" />   <path d="M3 3l18 18" />
        SVG;
    }
}