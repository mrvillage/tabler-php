<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconDeviceNintendo extends Icon {
    public static function getName(): string {
        return 'device-nintendo';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M10 20v-16h-3a4 4 0 0 0 -4 4v8a4 4 0 0 0 4 4h3z" />   <path d="M14 20v-16h3a4 4 0 0 1 4 4v8a4 4 0 0 1 -4 4h-3z" />   <circle cx="17.5" cy="15.5" r="1" fill="currentColor" />   <circle cx="6.5" cy="8.5" r="1" fill="currentColor" />
        SVG;
    }
}