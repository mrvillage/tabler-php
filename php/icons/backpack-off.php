<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconBackpackOff extends Tabler\Icon {
    public static function getName(): string {
        return 'backpack-off';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M10 6h3a6 6 0 0 1 6 6v3m-.129 3.872a3 3 0 0 1 -2.871 2.128h-8a3 3 0 0 1 -3 -3v-6a5.99 5.99 0 0 1 2.285 -4.712" />   <path d="M10 6v-1a2 2 0 1 1 4 0v1" />   <path d="M9 21v-4a2 2 0 0 1 2 -2h2a2 2 0 0 1 2 2v4" />   <path d="M3 3l18 18" />
        SVG;
    }
}