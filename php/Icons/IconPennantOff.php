<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconPennantOff extends \Tabler\Icon {
    public static function getName(): string {
        return 'pennant-off';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M8 21h4" />   <path d="M10 21v-11m0 -4v-3" />   <path d="M10 4l9 4l-4.858 2.16m-2.764 1.227l-1.378 .613" />   <path d="M3 3l18 18" />
        SVG;
    }
}