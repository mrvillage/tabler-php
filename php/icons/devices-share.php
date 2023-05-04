<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconDevicesShare extends Icon {
    public static function getName(): string {
        return 'devices-share';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M13 15v-6a1 1 0 0 1 1 -1h6a1 1 0 0 1 1 1v4" />   <path d="M18 8v-3a1 1 0 0 0 -1 -1h-13a1 1 0 0 0 -1 1v12a1 1 0 0 0 1 1h9" />   <path d="M16 22l5 -5" />   <path d="M21 21.5v-4.5h-4.5" />   <path d="M16 9h2" />
        SVG;
    }
}