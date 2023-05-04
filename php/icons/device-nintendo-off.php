<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconDeviceNintendoOff extends Tabler\Icon {
    public static function getName(): string {
        return 'device-nintendo-off';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M4.713 4.718a4 4 0 0 0 -1.713 3.282v8a4 4 0 0 0 4 4h3v-10m0 -4v-2h-2" />   <path d="M14 10v-6h3a4 4 0 0 1 4 4v8c0 .308 -.035 .608 -.1 .896m-1.62 2.39a3.982 3.982 0 0 1 -2.28 .714h-3v-6" />   <path d="M6.5 8.5m-1 0a1 1 0 1 0 2 0a1 1 0 1 0 -2 0" />   <path d="M3 3l18 18" />
        SVG;
    }
}