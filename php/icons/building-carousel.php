<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconBuildingCarousel extends Icon {
    public static function getName(): string {
        return 'building-carousel';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M12 12m-6 0a6 6 0 1 0 12 0a6 6 0 1 0 -12 0" />   <path d="M5 8m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0" />   <path d="M12 4m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0" />   <path d="M19 8m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0" />   <path d="M5 16m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0" />   <path d="M19 16m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0" />   <path d="M8 22l4 -10l4 10" />
        SVG;
    }
}