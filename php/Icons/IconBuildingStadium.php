<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconBuildingStadium extends \Tabler\Icon {
    public static function getName(): string {
        return 'building-stadium';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M12 12m-8 0a8 2 0 1 0 16 0a8 2 0 1 0 -16 0" />   <path d="M4 12v7c0 .94 2.51 1.785 6 2v-3h4v3c3.435 -.225 6 -1.07 6 -2v-7" />   <path d="M15 6h4v-3h-4v7" />   <path d="M7 6h4v-3h-4v7" />
        SVG;
    }
}