<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconHourglass extends \Tabler\Icon {
    public static function getName(): string {
        return 'hourglass';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M6.5 7h11" />   <path d="M6.5 17h11" />   <path d="M6 20v-2a6 6 0 1 1 12 0v2a1 1 0 0 1 -1 1h-10a1 1 0 0 1 -1 -1z" />   <path d="M6 4v2a6 6 0 1 0 12 0v-2a1 1 0 0 0 -1 -1h-10a1 1 0 0 0 -1 1z" />
        SVG;
    }
}