<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconBuildingBroadcastTower extends \Tabler\Icon {
    public static function getName(): string {
        return 'building-broadcast-tower';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M12 12m-1 0a1 1 0 1 0 2 0a1 1 0 1 0 -2 0" />   <path d="M16.616 13.924a5 5 0 1 0 -9.23 0" />   <path d="M20.307 15.469a9 9 0 1 0 -16.615 0" />   <path d="M9 21l3 -9l3 9" />   <path d="M10 19h4" />
        SVG;
    }
}