<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconClearFormatting extends Tabler\Icon {
    public static function getName(): string {
        return 'clear-formatting';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M17 15l4 4m0 -4l-4 4" />   <path d="M7 6v-1h11v1" />   <path d="M7 19l4 0" />   <path d="M13 5l-4 14" />
        SVG;
    }
}