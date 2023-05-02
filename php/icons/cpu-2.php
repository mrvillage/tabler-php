<?php
require_once(__DIR__ . '../Icon.php');

class IconCpu2 extends Icon {
    public static function getName(): string {
        return 'cpu-2';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M5 5m0 1a1 1 0 0 1 1 -1h12a1 1 0 0 1 1 1v12a1 1 0 0 1 -1 1h-12a1 1 0 0 1 -1 -1z" />   <path d="M8 10v-2h2m6 6v2h-2m-4 0h-2v-2m8 -4v-2h-2" />   <path d="M3 10h2" />   <path d="M3 14h2" />   <path d="M10 3v2" />   <path d="M14 3v2" />   <path d="M21 10h-2" />   <path d="M21 14h-2" />   <path d="M14 21v-2" />   <path d="M10 21v-2" />
        SVG;
    }
}