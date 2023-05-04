<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconArrowsUpRight extends Icon {
    public static function getName(): string {
        return 'arrows-up-right';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M17 21l4 -4l-4 -4" />   <path d="M21 17h-11a3 3 0 0 1 -3 -3v-11" />   <path d="M11 7l-4 -4l-4 4" />
        SVG;
    }
}