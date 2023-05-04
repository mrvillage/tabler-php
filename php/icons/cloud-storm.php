<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconCloudStorm extends Icon {
    public static function getName(): string {
        return 'cloud-storm';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M7 18a4.6 4.4 0 0 1 0 -9a5 4.5 0 0 1 11 2h1a3.5 3.5 0 0 1 0 7h-1" />   <path d="M13 14l-2 4l3 0l-2 4" />
        SVG;
    }
}