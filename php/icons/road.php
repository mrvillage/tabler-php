<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconRoad extends \Tabler\Icon {
    public static function getName(): string {
        return 'road';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M4 19l4 -14" />   <path d="M16 5l4 14" />   <path d="M12 8v-2" />   <path d="M12 13v-2" />   <path d="M12 18v-2" />
        SVG;
    }
}