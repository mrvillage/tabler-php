<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconRuler2 extends Tabler\Icon {
    public static function getName(): string {
        return 'ruler-2';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M17 3l4 4l-14 14l-4 -4z" />   <path d="M16 7l-1.5 -1.5" />   <path d="M13 10l-1.5 -1.5" />   <path d="M10 13l-1.5 -1.5" />   <path d="M7 16l-1.5 -1.5" />
        SVG;
    }
}