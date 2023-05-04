<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconBuildingChurch extends Icon {
    public static function getName(): string {
        return 'building-church';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M3 21l18 0" />   <path d="M10 21v-4a2 2 0 0 1 4 0v4" />   <path d="M10 5l4 0" />   <path d="M12 3l0 5" />   <path d="M6 21v-7m-2 2l8 -8l8 8m-2 -2v7" />
        SVG;
    }
}