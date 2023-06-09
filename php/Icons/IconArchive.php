<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconArchive extends \Tabler\Icon {
    public static function getName(): string {
        return 'archive';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M3 4m0 2a2 2 0 0 1 2 -2h14a2 2 0 0 1 2 2v0a2 2 0 0 1 -2 2h-14a2 2 0 0 1 -2 -2z" />   <path d="M5 8v10a2 2 0 0 0 2 2h10a2 2 0 0 0 2 -2v-10" />   <path d="M10 12l4 0" />
        SVG;
    }
}