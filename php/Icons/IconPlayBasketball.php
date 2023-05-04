<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconPlayBasketball extends \Tabler\Icon {
    public static function getName(): string {
        return 'play-basketball';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M10 4a1 1 0 1 0 2 0a1 1 0 0 0 -2 0" />   <path d="M5 21l3 -3l.75 -1.5" />   <path d="M14 21v-4l-4 -3l.5 -6" />   <path d="M5 12l1 -3l4.5 -1l3.5 3l4 1" />   <path d="M18.5 16a.5 .5 0 1 0 0 -1a.5 .5 0 0 0 0 1z" fill="currentColor" />
        SVG;
    }
}