<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconDevicesPcOff extends Tabler\Icon {
    public static function getName(): string {
        return 'devices-pc-off';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M9 9v10h-6v-14h2" />   <path d="M13 9h9v7h-2m-4 0h-4v-4" />   <path d="M14 19h5" />   <path d="M17 17v2" />   <path d="M6 13v.01" />   <path d="M6 16v.01" />   <path d="M3 3l18 18" />
        SVG;
    }
}