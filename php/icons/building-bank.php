<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconBuildingBank extends Tabler\Icon {
    public static function getName(): string {
        return 'building-bank';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M3 21l18 0" />   <path d="M3 10l18 0" />   <path d="M5 6l7 -3l7 3" />   <path d="M4 10l0 11" />   <path d="M20 10l0 11" />   <path d="M8 14l0 3" />   <path d="M12 14l0 3" />   <path d="M16 14l0 3" />
        SVG;
    }
}