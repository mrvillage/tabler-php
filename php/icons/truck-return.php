<?php
require_once(__DIR__ . '../Icon.php');

class IconTruckReturn extends Icon {
    public static function getName(): string {
        return 'truck-return';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M7 17m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0" />   <path d="M17 17m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0" />   <path d="M5 17h-2v-11a1 1 0 0 1 1 -1h9v6h-5l2 2m0 -4l-2 2" />   <path d="M9 17l6 0" />   <path d="M13 6h5l3 5v6h-2" />
        SVG;
    }
}