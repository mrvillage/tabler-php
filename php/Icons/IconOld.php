<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconOld extends \Tabler\Icon {
    public static function getName(): string {
        return 'old';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M11 21l-1 -4l-2 -3v-6" />   <path d="M5 14l-1 -3l4 -3l3 2l3 .5" />   <path d="M8 4m-1 0a1 1 0 1 0 2 0a1 1 0 1 0 -2 0" />   <path d="M7 17l-2 4" />   <path d="M16 21v-8.5a1.5 1.5 0 0 1 3 0v.5" />
        SVG;
    }
}