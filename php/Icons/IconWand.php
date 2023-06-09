<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconWand extends \Tabler\Icon {
    public static function getName(): string {
        return 'wand';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M6 21l15 -15l-3 -3l-15 15l3 3" />   <path d="M15 6l3 3" />   <path d="M9 3a2 2 0 0 0 2 2a2 2 0 0 0 -2 2a2 2 0 0 0 -2 -2a2 2 0 0 0 2 -2" />   <path d="M19 13a2 2 0 0 0 2 2a2 2 0 0 0 -2 2a2 2 0 0 0 -2 -2a2 2 0 0 0 2 -2" />
        SVG;
    }
}