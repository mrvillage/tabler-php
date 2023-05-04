<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconMap2 extends Icon {
    public static function getName(): string {
        return 'map-2';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M12 18.5l-3 -1.5l-6 3v-13l6 -3l6 3l6 -3v7.5" />   <path d="M9 4v13" />   <path d="M15 7v5.5" />   <path d="M21.121 20.121a3 3 0 1 0 -4.242 0c.418 .419 1.125 1.045 2.121 1.879c1.051 -.89 1.759 -1.516 2.121 -1.879z" />   <path d="M19 18v.01" />
        SVG;
    }
}