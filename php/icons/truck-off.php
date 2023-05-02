<?php
require_once(__DIR__ . '../Icon.php');

class IconTruckOff extends Icon {
    public static function getName(): string {
        return 'truck-off';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M7 17m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0" />   <path d="M15.585 15.586a2 2 0 0 0 2.826 2.831" />   <path d="M5 17h-2v-11a1 1 0 0 1 1 -1h1m3.96 0h4.04v4m0 4v4m-4 0h6m6 0v-6h-6m-2 -5h5l3 5" />   <path d="M3 3l18 18" />
        SVG;
    }
}