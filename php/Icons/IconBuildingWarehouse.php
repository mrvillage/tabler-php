<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconBuildingWarehouse extends \Tabler\Icon {
    public static function getName(): string {
        return 'building-warehouse';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M3 21v-13l9 -4l9 4v13" />   <path d="M13 13h4v8h-10v-6h6" />   <path d="M13 21v-9a1 1 0 0 0 -1 -1h-2a1 1 0 0 0 -1 1v3" />
        SVG;
    }
}