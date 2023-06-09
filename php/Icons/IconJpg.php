<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconJpg extends \Tabler\Icon {
    public static function getName(): string {
        return 'jpg';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M21 8h-2a2 2 0 0 0 -2 2v4a2 2 0 0 0 2 2h2v-4h-1" />   <path d="M10 16v-8h2a2 2 0 1 1 0 4h-2" />   <path d="M3 8h4v6a2 2 0 0 1 -2 2h-1.5a.5 .5 0 0 1 -.5 -.5v-.5" />
        SVG;
    }
}