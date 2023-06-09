<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconBuildingMonument extends \Tabler\Icon {
    public static function getName(): string {
        return 'building-monument';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M8 18l2 -13l2 -2l2 2l2 13" />   <path d="M5 21v-3h14v3" />   <path d="M3 21l18 0" />
        SVG;
    }
}