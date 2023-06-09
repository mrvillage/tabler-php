<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconCloudRain extends \Tabler\Icon {
    public static function getName(): string {
        return 'cloud-rain';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M7 18a4.6 4.4 0 0 1 0 -9a5 4.5 0 0 1 11 2h1a3.5 3.5 0 0 1 0 7" />   <path d="M11 13v2m0 3v2m4 -5v2m0 3v2" />
        SVG;
    }
}