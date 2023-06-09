<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconBuildingPavilion extends \Tabler\Icon {
    public static function getName(): string {
        return 'building-pavilion';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M3 21h7v-3a2 2 0 0 1 4 0v3h7" />   <path d="M6 21l0 -9" />   <path d="M18 21l0 -9" />   <path d="M6 12h12a3 3 0 0 0 3 -3a9 8 0 0 1 -9 -6a9 8 0 0 1 -9 6a3 3 0 0 0 3 3" />
        SVG;
    }
}