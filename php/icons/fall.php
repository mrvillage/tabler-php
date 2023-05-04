<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconFall extends Icon {
    public static function getName(): string {
        return 'fall';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M11 21l1 -5l-1 -4l-3 -4h4l3 -3" />   <path d="M6 16l-1 -4l3 -4" />   <path d="M6 5m-1 0a1 1 0 1 0 2 0a1 1 0 1 0 -2 0" />   <path d="M13.5 12h2.5l4 2" />
        SVG;
    }
}