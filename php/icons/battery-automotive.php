<?php
require_once(__DIR__ . '../Icon.php');

class IconBatteryAutomotive extends Icon {
    public static function getName(): string {
        return 'battery-automotive';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M3 6m0 2a2 2 0 0 1 2 -2h14a2 2 0 0 1 2 2v10a2 2 0 0 1 -2 2h-14a2 2 0 0 1 -2 -2z" />   <path d="M6 6v-2" />   <path d="M19 4l0 2" />   <path d="M6.5 13l3 0" />   <path d="M14.5 13l3 0" />   <path d="M16 11.5l0 3" />
        SVG;
    }
}