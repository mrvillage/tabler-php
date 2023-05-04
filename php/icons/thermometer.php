<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconThermometer extends Icon {
    public static function getName(): string {
        return 'thermometer';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M19 5a2.828 2.828 0 0 1 0 4l-8 8h-4v-4l8 -8a2.828 2.828 0 0 1 4 0z" />   <path d="M16 7l-1.5 -1.5" />   <path d="M13 10l-1.5 -1.5" />   <path d="M10 13l-1.5 -1.5" />   <path d="M7 17l-3 3" />
        SVG;
    }
}