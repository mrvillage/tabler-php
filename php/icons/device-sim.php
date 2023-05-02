<?php
require_once('../Icon.php');

class IconDeviceSim extends Icon {
    public static function getName(): string {
        return 'device-sim';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M6 3h8.5l4.5 4.5v12.5a1 1 0 0 1 -1 1h-12a1 1 0 0 1 -1 -1v-16a1 1 0 0 1 1 -1z" />   <path d="M9 11h3v6" />   <path d="M15 17v.01" />   <path d="M15 14v.01" />   <path d="M15 11v.01" />   <path d="M9 14v.01" />   <path d="M9 17v.01" />
        SVG;
    }
}